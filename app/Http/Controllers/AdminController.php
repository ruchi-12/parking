<?php
namespace App\Http\Controllers;

use Illuminate\http\Request;
use Illuminate\Support\Facades\DB;
use App\User;
use App\Vendor;
use App\Parking;
use App\booking;
use App\Slots;
use App\Admin;
use App\Floors;
use App\Notification;
use App\Contact;

use App\Parkingfeatures;
use Validator;
use Carbon\Carbon;
use Hash;
use Mail;
use App\Mail\sendmail;
use Illuminate\Support\MessageBag;
use Illuminate\Session\SessionManager;

class AdminController {
	public function admin(){
		$user = User::all();
		$vendors = Vendor::all();
		$booking = booking::all();
		$admin = Admin::all();
		return view('admin.dashboard',compact('user','vendors','booking','admin'));
	}
	public function chart(){
		$data = DB::table("bookings")->selectRaw('COUNT(*) count,MONTH(start_date) month')->groupBy('month')->get();
		return response([$data[0],$data[1],$data[2],$data[3],$data[4],$data[5],$data[6],$data[7],$data[8],$data[9],$data[10],$data[11]],200);
	}
	public function user(){
		$user = DB::table('users')->get();
		return view('admin.user',compact('user'));
	}

	public function searchUser(Request $request){
			$user=User::where('name','LIKE',$request->search.'%')->get();
			if(!$user){
			return response('data not found',400);
			}
			return response($user,200);
	}
	public function sortUser(Request $request){
			if($request->Sort == 'Descending'){
				$users = User::orderBy('name', 'DESC')->get();
				return response($users,200);
			}
			if($request->Sort == 'Ascending'){
				$users = User::orderBy('name', 'ASC')->get();
				return response($users,200);
			}
	}
	public function parking(){
		$parking = DB::table('parkings')->get();
		return view('admin.parking',compact('parking'));
	}
	public function vendor(){
		$vendor = DB::table('vendors')->get();
		return view('admin.vendor',compact('vendor'));
	}

	public function searchVendor(Request $request){
			$vendor=Vendor::where('name','LIKE',$request->search.'%')->get();
			if(!$vendor){
				return response('Data not found',400);
			}
			return Response($vendor->toArray(),200);
   	}
		public function deleteVendor($id){
				Vendor::find($id)->delete();
				return redirect('/vendor');

		}
   	public function sortVendor(Request $request){
			if($request->Sort == 'Descending'){
				$vendor = Vendor::orderBy('name', 'DESC')->get();
				return response($vendor,200);
			}
			if($request->Sort == 'Ascending'){
				$vendor = Vendor::orderBy('name', 'ASC')->get();
				return response($vendor,200);
			}
	}
	public function deleteUser($id){
			 User::find($id)->delete();
			 return redirect('/user');
	}
	public function viewParking($id){
		$feature = Parkingfeatures::where('parking_id',$id)->get();
			$parking = Parking::find($id);
			return view('admin.showparking',compact('parking','feature'));
			}
			public function viewOrders($id){
				$orders = Booking::where('parking_id',$id)->get();
					return view('admin.vieworders',compact('orders'));
			}
	public function searchParking(Request $request){
			$parking = Parking::where('title','LIKE',$request->search."%")->get();
			if(!$parking){
				return response('Data not found',400);
			}
			return Response($parking,200);
   	}
   	public function sortParking(Request $request){
			if($request->Sort == 'Descending'){
				$parking = Parking::orderBy('title', 'DESC')->get();
				return response($parking,200);
			}
			if($request->Sort == 'Ascending'){
				$parking = Parking::orderBy('title', 'ASC')->get();
				return response($parking,200);
			}
	}
	public function deleteParking($id){
			Parking::find($id)->delete();
			return redirect('/parking');

	}

	public function orders(){
		$booking = DB::table('bookings')->paginate(5);
		return view('admin.orders',compact('booking'));
	}
	public function searchOrders(Request $request){
			$booking = booking::where('totalamount','LIKE',$request->search."%")->get();
			if(!$booking){
				return response('Data not found',400);
			}
			return Response($booking,200);
   	}
   	public function sortOrders(Request $request){
			if($request->Sort == 'Descending'){
				$booking = booking::orderBy('start_date', 'DESC')->get();
				return response($booking,200);
			}
			if($request->Sort == 'Ascending'){
				$booking = booking::orderBy('start_date', 'ASC')->get();
				return response($booking,200);
			}
	}
	public function changePassword(){
			return view('admin.adminchangepwd');
			}
	public function changePwd(Request $request){
		$password = Hash::make($request->newpwd);
		$admin = DB::table('admins')->where('password', $request->oldpwd)->update(['password' => $password]);
		   return response('Successfully changed',200);
		}
	public function deleteOrder($id){
				Booking::find($id)->delete();
				return redirect('/orders');

		}

		public function profile(){
			$data = DB::table('admins')->get();
			return view('admin.profile',['adminInfo' => $data]);
		}
		public function ProfileUp(Request $request){
		     $data = DB::table('admins')->where('id',session()->get('ADMIN')['id'])->update(['image' => $request->profile]);
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
				$file_path = DIRECTORY_SEPARATOR . 'admin' .DIRECTORY_SEPARATOR . 'images' . DIRECTORY_SEPARATOR  ;
				$file->move(public_path().DIRECTORY_SEPARATOR.$file_path,$file_name);
				return response($file_path.$file_name);
			}
	public function notifyParking(){
		$record = Notification::get();
		// print_r($record->toArray());
		return view('admin.notificationparking',compact('record'));
	}
	public function viewContact(){
		$contact = DB::table('contacts')->get();
		return view('admin.viewcontact',compact('contact'));
	}
	public function delContact($id){
				Contact::find($id)->delete();
				return redirect('/viewcontact');
		}
		public function searchContact(Request $request){
				$contact=Contact::where('name','LIKE',$request->search.'%')->get();
				if(!$user){
				return response('data not found',400);
				}
				return response($contact,200);
		}
		public function sortContact(Request $request){
				if($request->Sort == 'Descending'){
					$contact = Contact::orderBy('name', 'DESC')->get();
					return response($contact,200);
				}
				if($request->Sort == 'Ascending'){
					$contact = Contact::orderBy('name', 'ASC')->get();
					return response($contact,200);
				}
		}
		public function deleteRecord($id){
			Notification::find($id)->delete();
			return redirect('notificationparking');
		}
		public function deleteParkings($id){
			Notification::find($id)->delete();
			return redirect('notificationparking');
		}
}
