<?php
namespace App\Http\Controllers;

use Illuminate\http\Request;
use Illuminate\Support\Facades\DB;
use App\User;
use App\Vendor;
use App\Contact;
use App\Parking;
use App\Booking;
use App\Slots;
use App\Floors;
use App\Payment;
use App\Review;
use App\Parkingfeatures;
use Validator;
use Carbon\Carbon;
use Hash;
use Mail;
use PDF;
use App\Mail\sendmail;
use Illuminate\Support\MessageBag;
use Illuminate\Session\SessionManager;

class UsersController extends MasterController{

	public function review(){
		return view('review');
	}
	public function addReview(Request $request){
		$message=[
			'required' =>':attribute field is required',
		];
		$v=Validator::make($request->all(),[
			'review' => 'required ',
			'name' => 'required'
		],$message);
		$errors=$v->errors();
		if($v->fails()){
		    return response($errors,500);
		}
		if($v){
			$review = new Review;
			$review->user_id = session()->get('USER')['id'];
			$review->email=session()->get('USER')['email'];
			$review->review = $request->review;
			$review->name = $request->name;
			$review->save();
			return response("Thanks for feedback",200);
		}
		else{
			return response("not added",500);
		}
	}

	//forget password email send otp get and set new password
	public function forgetpassword(){
		return view('forgetpassword');
	}

	public function contact(){
		return view('contact');
	}
	public function contactInfo(Request $request){
		$contact = new Contact;
		$contact->name = $request->userName;
		$contact->email = $request->userEmail;
		$contact->phone = $request->userPhone;
		$contact->message = $request->message;
 		$contact->save();
		return response('successfully send',200);
	}
	public function carwash(){
			return view('carwash');
	}

	public function forgetpwd(){
		
		return view('forgetpwd');
	}

	public function detail(){
		return view('bookdetails');
	}
	public function viewParking(){
		return view('customer');
	}

	public function sendOTP(Request $request){
		//otp send to user
			$user = $this->_getUserByCondtion(['email'=>$request->email]);

			if(!$user){
				return Response('This email is not associated with us!',406);
			}

			$request->session()->put('changePasswordEmail',$user->email);
			$otp=rand(1000,9999);
			$request->session()->put('otp',$otp);

			$data=array(
				'name'=> 'parking hub',
				'message'=>$otp
			);
			try {
				Mail::to($request->email)->send(new sendmail($data));
			} catch (Exception $e) {
				return response('Oops! Something went wrong, Please try again',500);
			}

			$email=$user->email;
			//'OPT sent to your email address, Please check your inbox'
			return response('Enter your otp',200);

	}

	public function verifyOTP(request $request){
       if($request->otp == session()->get('otp')){
       		session()->put('otpVerified',true);
			return response('OTP verified',200);
		} else{
		return response('Invalid OTP',406);
	        session()->forget('otp');
		// session()->forget('otp');
		}
	}
	public function userImage(){
		$id = session()->get('USER')['id'];
		$user = User::where('id',$id)->get();
		dd($user);
		return view('layouts.menubar',['image',$user]);
	}
	public function resetPassword(Request $request){

			/*
				Check OTP is verified or not
			*/
			if(!session()->has('otpVerified') || !session()->get('otpVerified')){
				return response('Something went wrong, Please try again',403);
			}

			$msg = [
		        "required"=>":attribute is required"
		    ];
			$validation=Validator::make($request->all(),[
			'confirmpwd' => 'required',
			'newpwd' => 'required',
	        ],$msg);

	  		$errors=$validation->errors();

			if($validation->fails()){
				return response("All fields are required",500);
			}

			/* vendor*/

			if( Vendor::where(['email'=>$request->session()->get('changePasswordEmail')])->first()){

				$user = Vendor::where(['email'=>$request->session()->get('changePasswordEmail')])->first();

			} elseif (User::where(['email'=>$request->session()->get('changePasswordEmail')])->first()){

				$user = User::where(['email'=>$request->session()->get('changePasswordEmail')])->first();

			}

			if(!$user){
				return response('OTP expired',404);
			}

			$newPassword = Hash::make($request->newpwd);
			$user->password=$newPassword;
			$user->save();

			session()->forget('changePasswordEmail');
			session()->forget('otpVerified');

			return response('Successfully changed',200);

			}

/*
		}*/
	//forget password end

	//only show index page
	public function index_page(){
		$sessionData = [
			'name' => 'admin',
			'email' => 'admin@gmail.com',
			'id' => '1',
			'profile' => '',
			'role'=>'customer'
		];
		// session()->put('USER',$sessionData);
		// $user=User::find(session()->get('USER')['id']);
		return view('index',array('userInfo'=>$sessionData));
		
		// return view('index');
	}
	public function user() {
			return view('register');
	}
	public function registerSave(Request $request){
			$msg=[
		             "required"=>":attribute is required ok"
		    ];

			$signup=Validator::make($request->all(),[
				'name' => 'required',
				'email' => 'required|email|unique:users',
				'role' => 'required',
				'password'=> 'required'
    		 ],$msg);

	  		$errors=$signup->errors();
			if($signup->fails()){
				return response("This email is already associated with us",500);
			}

			$signup=Validator::make($request->all(),[
				'email' => 'required|email|unique:vendors',
    		 ],$msg);

	  		$errors=$signup->errors();
			if($signup->fails()){
				return response("This email is already associated with us",500);
			}
			if($signup){
			      if($request->role == "vendor"){
							$user = new Vendor;
						}
					else{
						$user = new User;
			 		}
						$user->name = $request->name;
						$user->email = $request->email;
						$user->password = Hash::make($request->password);
						$user->role = $request->role;
						$user->save();
					return response("register successfully",200);
					}
			return response("register successfully",200);
		}

	public function vendor(request $request){
		return view('vendor');
	}

	public function login(request $request){

		return view('login');
	}

	public function submitlogin(Request $request){

		$message=[
			'required' =>'the :attribute field is required',
		];

		$v=Validator::make($request->all(),[
			'email' => ["required","email:users,vendors"],
			'password'=>["required"]

		],$message);
		$errors=$v->errors();
		/*
			Check Validation
		*/
		if($v->fails()){
		    return response($errors,500);
		}
		/*
			Get User from Users table
		*/
		if(User::where(['email'=>$request->email])->first()){
		$user = User::where(['email'=>$request->email])->first();
			if(Hash::check($request->password,$user->password)){

				$sessionData = [
			    	'name' => $user->name,
			    	'email' => $user->email,
			    	'id' => $user->id,
					'profile' => $user->image,
			    	'role'=>$user->role
				];
				session()->put('USER',$sessionData);

        	   return response('/customer',200);

    	     }
    		return response('Password not found',406);
			}
        /*
			Get User from Vendor table
		*/
        elseif( Vendor::where(['email'=>$request->email])->first()){
        	$user=Vendor::where(['email'=>$request->email])->first();
        	if(Hash::check($request->password,$user->password)){

        	    $sessionData = [
			    	'name' => $user->name,
			    	'email' => $user->email,
			    	'id' => $user->id,
					'profile' => $user->image,
			    	'role'=>$user->role
				];
				session()->put('USER',$sessionData);

        	    return response('/',200);

        	}
        	return response('Password not found',406);
        }
        /*
			Admin login
		*/
		else{
			$admin = DB::table('admins')->first();
			if($request->email == $admin->email){
				if($request->password == $admin->password){
				$sessionData = [
			'title' => $admin->title,
			'email' => $admin->email,
			'profile'=>$admin->image,
			'id' => $admin->id,
	    ];
	    session()->put('USER',$sessionData);
        		return response('/dashboard',200);
        	}
			return response('Password not found',406);
		}
	}
	}
	public function changePwd(Request $request){

		return view('changepassword');
	}

	public function changePassword(Request $request){
		$msg = [
		        "required"=>":attribute is required"
		    ];
			$validation=Validator::make($request->all(),[
			'oldpwd' => 'required',
			'newpwd' => 'required',
			'confirmpwd' => 'required',
	        ],$msg);

	  		$errors=$validation->errors();

			if($validation->fails()){
				return response("All fields are required",500);
			}

			$user = $this->_getUser(session()->get('USER')['id'],session()->get('USER')['role']);


			if(!$user){
				return response('Opps! Something wend wrong, Please try again',500);
			}

			/*
				Check Password

			*/

			if(!Hash::check($request->oldpwd,$user->password)){
				return response('Your current password is invalid',406);
			}

			/*

				Check password

			*/

			if($request->newpwd != $request->confirmpwd){
				return response('Both password don\'t match ',406);
			}

			/*
				Save new Password
			*/

			$user->password=Hash::make($request->confirmpwd);
			$user->save();


			return response('Password changed',200);


		//profile update
		}
		public function profileupdate(Request $request){
			if(User::find(session()->get('USER')['role'] == "customer")){
				$user=User::find(session()->get('USER')['id']);
			}
			elseif(Vendor::find(session()->get('USER')['role'] == "vendor")){
				$user=Vendor::find(session()->get('USER')['id']);
			}
				return view('profileupdate',array('userInfo'=>$user));
	    }

		public function update(Request $request){
			$user = $this->_getUser(session()->get('USER')['id'],session()->get('USER')['role']);
			if(!$user){
				return response('not updated',500);
			}
					$user->name=$request->name;
					$user->email=$request->email;
					$user->phone=$request->phone;
					$user->birthdate=$request->birthdate;
					$user->image=$request->image;
					$user->save();
					return response('Successfully changed',200);
		}
		public function profileImage(Request $request){
				$v=Validator::make($request->all(),[
					'profile' => 'required|image|mimes:jpeg,png,gif,jpg,svg|max:2048'
				]);
				if($v->fails()){
					return response($v->errors(),500);
				}
				$file = $request->file('profile');
				$file_name = time() . $file->getClientOriginalName();
				$file_path = DIRECTORY_SEPARATOR . 'images' . DIRECTORY_SEPARATOR . 'profile' .DIRECTORY_SEPARATOR ;
				$file->move(public_path().DIRECTORY_SEPARATOR.$file_path,$file_name);
				return response($file_path.$file_name);
	    }
	public function userbooking($id,request $request){

		$user=User::find(session()->get('USER')['id']);
		$slot=Slots::with('floors')->where('id',$id)->first();
		// print_r($slot->toArray());
		$features=DB::table('parkingfeatures')->where('parking_id',$slot->parking_id)->get();
		$details=Slots::where('floor_id',$id)->get();

		return view('userbooking',compact('features'),['details' => $details, 'slotInfo'=>$slot,'userInfo'=>$user]);
	}

	public function booking(Request $request){


		$message=[
			'required' =>'the :attribute field is required',
		];

		$v=Validator::make($request->all(),[
			'start_date'=>["required"],
			'car_no' => ["required"],
		],$message);
		$errors=$v->errors();
		/*
			Check Validation
		*/
		if($v->fails()){
		    return response($errors,500);
		}

		$start = explode(' - ', $request->start_date)[0];
		$end = explode(' - ', $request->start_date)[1];

		$booking = new Booking;
		$booking->users_id = $request->user_id;
		$booking->parking_id = $request->parking_id;
		$booking->slot_id = $request->slot_id;
	  // $booking->start_date = $request->start_date;
		// $booking->end_date = $request->end_date;
		$booking->start_date = $start;
		$booking->end_date = $end;
		$booking->carno = $request->car_no;
		$booking->feature = $request->feature;
		$price = 0;
		$features = Parkingfeatures::where('parking_id',$request->parking_id)->get();
		foreach ($features  as $value) {
			// code...
				$price = $price + (int)$value->price;
		}

		$booking->token = str_random(60);
		$booking->status = 0; //0 Process | 1 Success | 2 Cancel
		/*totalamount*/
				$start = Carbon::parse($start);
		    $end =  Carbon::parse($end);

				$days = $end->diffInDays($start);
				$slots = Slots::find($request->slot_id);
				$totalamount = ($slots->price * $days)  + $price;
				$booking->totalamount = $totalamount;

			/*discount*/
			$discount = 0;
			if($days > 2){
					$discount = $totalamount * 10 /100;
					$booking->discount = $discount;
					$booking->save();
			}
			// $booking->discount = 0 ;
			$booking->paidamount = $totalamount - $discount ;
		$booking->save();
		if($booking){

				$slots = Slots::find($booking->slot_id);
				$slots->status = 0;
				$slots->save();
				$ac_token = $this->__getPaypalToken();
				// Bill
				$price1 = $booking->paidamount;
				$bill = '{
				    "intent": "sale",
				    "payer": {
				        "payment_method": "paypal"
				    },
				    "redirect_urls": {
				        "return_url": "http://localhost:8080/order/payment/success",
				        "cancel_url": "http://localhost:8080/order/payment/cancel"
				    },
				    "transactions": [{
				        "item_list": {
				            "items": [{
				                "name": "slot",
				                "price":'.$price1.',
				                "currency": "USD",
				                "quantity": 1
				              }]
				        },
				        "amount": {
				            "currency": "USD",
				            "total":'.$price1.'
				        },
				        "description": "This is the payment description."
				    }]
				}';


				$link = $this->__getPaymentLink($ac_token,$bill);

				if(!$link){
					return response("Opps! Something went wrong, Please try again",500);

				}

				$token = explode("&token=", $link)[1];

				$payment = new Payment();
				$payment->link = $link;
				$payment->token = $token;
				$payment->booking_id = $booking->id;
				$payment->amount = $booking->paidamount;
				$payment->save();
				return response($link,200);
		}
	}
	public function admin(){
		return view('admin.adminindex');
	}
	public function features(){
		return view('features');
	}


	public function paymentCencel(Request $request){
		// Find Payment

		$payment = Payment::where('token',$request->input('token'))->first();

		if(!$payment){
			dd("Invalid arguments");
		}
		if($payment->status !== 0){
			dd("Invalid arguments");
		}
		// Update Order
		// Status = 2
		$payment->status = 3;
		$payment->save();
		return redirect()->route('booking',$payment->booking_id);

	}
	public function paymentSuccess(Request $request){
		// Find Payment
		$payment = Payment::where('token',$request->input('token'))->first();
		if(!$payment){
			dd("Invalid arguments");
		}
		if($payment->status !== 0){
			dd("Invalid arguments");
		}
		// Update Order
		// Status = 1
		$payment->status = 1;
		$payment->payment_id = $request->input('paymentId');
		$payment->payer_id = $request->input('PayerID');
		$payment->save();
		return redirect()->route('home');

	}
	public function getDirection($id){
		$direction = DB::table('parkings')->where('id',$id)->get();
		return view('/getdirection',compact('direction'));
	}
	public function Direction(Request $request){
		$direction = DB::table('parkings')->where('id',$request->parking_id)->get();
		return response($direction->toArray());
	}
	public function userReview(){
				return view();
	}
	public function work(){
					return view('/work');
	}
	public function generatePDF(){
			$data = Booking::where('users_id',session()->get('USER')['id'])->paginate(5);
			$pdf = PDF::loadView('invoice',compact('data'));
		  return $pdf->download('parking.pdf');
	}
	public function orders(){
			$data = Booking::where('users_id',session()->get('USER')['id'])->with('Parking')->get();
			return view('/usersorder',compact('data'));
	}
	public function aboutUs(){
				return view('aboutus');
	}
}
