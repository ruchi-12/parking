<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Parking;
use App\User;
use Validator;
use App\Vendor;
use App\Notification;
use App\Floors;
use App\Slots;
use App\Parkingfeatures;
use Hash;
use Storage;
use session;
use Illuminate\Session\SessionManager;

class VendorsController {
	// public function notification(){
	// 	return view('app');
	// }

	public function addParking(Request $request){
		 $user = Vendor::find(session()->get('USER')['id']);
		 return view('addparking',array('userInfo'=>$user));
	}

	public function saveImage(Request $request){
			$v=Validator::make($request->all(),[
				'image' => 'required|image|mimes:jpeg,png,gif,jpg,svg|max:2048'
			]);
			if($v->fails()){
				return response($v->errors(),500);
			}
			$file = $request->file('image');
			$file_name = time() . $file->getClientOriginalName();
			$file_path = DIRECTORY_SEPARATOR . 'images' . DIRECTORY_SEPARATOR . 'parking' .DIRECTORY_SEPARATOR ;
			$file->move(public_path().DIRECTORY_SEPARATOR.$file_path,$file_name);
			return response($file_path.$file_name);
        }
	public function parkingDetailsSubmit(Request $request){
		$message=[
			'required' =>':attribute field is required',
		];
		$v=Validator::make($request->all(),[
			'title' => 'required ',
			'city' => 'required',
			'description'=>'required',
			'address' =>'required',
			'status'=>'required',
			'latitude'=>'required',
			'longitude'=>'required',
		],$message);
		// return response($file_path,$file_name);
		/*
			Check Validation
		*/
		$errors=$v->errors();
		if($v->fails()){
		    return response($errors,500);
		}
		if($v){
		   
		    $notify = new Notification;
		    $notify->vendor_id = session()->get('USER')['id'];
			$notify->title = $request->title;
			$notify->description = $request->description;
			$notify->address = $request->address;
			$notify->city = $request->city;
			$notify->floor = $request->floor;
			$notify->image = $request->image;
			$notify->status = $request->status;
			$notify->save();
			
			$park = new Parking;
			$park->vendor_id = session()->get('USER')['id'];
			$park->title = $request->title;
			$park->description = $request->description;
			$park->address = $request->address;
			$park->city = $request->city;
			$park->status = $request->status;
			$park->latitude = $request->latitude;
			$park->longitude = $request->longitude;
			$park->image = 	$request->image;
			$park->floor = $request->floor;
			$park->save();

			$no = $park->floor;
			$i=1;
			while ($i<=$no) {
				$floors = new Floors;
			    $floors->number=$i;
				$floors->parking_id = $park->id;
				$floors->status=1;
				$floors->save();
				$i++;
			}
		return response("Your new add building processing you have get the notification. ",200);
		}
		else{
			return response("not added",500);
		}
	}
	public function floorsDisplay(){
			$details = DB::table('parkings')->get();
			return view('displayfloors',compact('details'));
	}

	public function DeleteRecords($id){
		$p = Parking::find($id);
		Floors::where('parking_id',$p->id)->delete();
		Slots::where('parking_id',$p->id)->delete();
		Parkingfeatures::where('parking_id',$p->id)->delete();
		$p->delete();
		return redirect('DisplayParkingDetails');
	}

	public function displaysearch(){
			return view('/customer');
	}

	public function map(){
		$details = DB::table('parkings')->get();
		if($details->location == $request->location)
		return redirect('DisplayParkingDetails');
	}

	public function DisplayParkingDetails(){
		$id = session()->get('USER')['id'];
		$details = Parking::where('vendor_id',$id)->get();
		return view('DisplayParkingDetails',compact('details'));
	}
	public function updateParking($id){
		$parking = Parking::find($id);
		return view('updateparking',array('userInfo'=>$parking));
	}

	public function update(Request $request){
			$parking = Parking::find($request->parking_id);
			if(!$parking){
				return response('Opps! Failed to get your profile data, Please try again',500);
			}
			$parking->title=$request->title;
			$parking->description=$request->description;
			$parking->floor=$request->floor;
			$parking->status=$request->status;
			$parking->image=$request->image;

			$parking->save();
			$no = $parking->floor;
			$i=1;
			while ($i<=$no) {
				$floors = new Floors;
			    $floors->number=$i;
				$floors->parking_id = $parking->id;
				$floors->status=1;
				$floors->save();
				$i++;
			}
			return response('successfully changed',200);
	}

	public function floorsDetail(){
		$id = session()->get('USER')['id'];
		$details = Parking::where('vendor_id',$id)->get();
		return view('/floors',compact('details'));
	}

	public function addSlots($id){
		$details=Floors::where('parking_id',$id)->get();
		return view('/addslots',compact('details'));
	}

	public function Slots(Request $request){
			/*
				Get Floor
			*/
			$floor = Floors::with('parking')->find($request->floor);
			if(!$floor){
				return Response('Something went wrong! Please try again',500);
			}

			if($floor->parking->vendor_id != session()->get('USER')['id']){
				return Response('Unauthorized',401);
			}
			$no = $request->slots;
			$i=1;
			while ($i<=$no){
		    	$slots = new Slots;
			    $slots->floor_id = $request->floor;
				$slots->slots = $i;
				if($request->price < 0){
					return response('Nagative price not accepted',500);
				}
				$slots->price = $request->price;
				$slots->parking_id = $floor->parking->id;
				$slots->status = 1;
				$slots->save();
				$i++;
				return response("Slot added successfully",200);
			}
		}
		public function feature($id){
			$val=Parking::find($id);
			// print_r($val->toArray());
			return view('addfeature',array('userInfo'=>$val));
		}
		public function addFeature(Request $request){

			$message=[
			'required' =>':attribute field is required',
		];
		$v=Validator::make($request->all(),[
			'feature' => 'required ',
		],$message);
		$errors=$v->errors();
		if($v->fails()){
		    return response($errors,500);
		}
		if($v){
			$parkingfeatures = new Parkingfeatures;
			$parkingfeatures->vendor_id = session()->get('USER')['id'];
			$parkingfeatures->parking_id=$request->id;
			$parkingfeatures->feature = $request->feature;
			$parkingfeatures->price = $request->price;
			$parkingfeatures->description = $request->description;
			$parkingfeatures->save();
			return response("Features addes sucessfully",200);
		}
		else{
			return response("not added",500);
		}
		}

		public function qrcode(Request $request){
			$id = session()->get('USER')['id'];
			if(session()->get('USER')['role'] == "vendor"){
					$user =Vendor::where('id',$id)->first();
					// print_r($user->toArray());
				}
			if(session()->get('USER')['role'] == "customer"){
				$user=User::where('id',$id)->first();
				// print_r($user->toArray());
			}
			if(!$id){
				return view('login');
			}
			return view('qrcode',compact('user'));
		}
		public function vendorSearch(Request $request){
			$id = session()->get('USER')['id'];
				$parking=Parking::where('title','LIKE',$request->search.'%')->where('vendor_id',$id)->get();
				if(!$parking){
				return response('data not found',400);
				}
				return response($parking,200);
		}
		public function vendorSearchOrders(Request $request){
			$id = session()->get('USER')['id'];
				$orders=Booking::where('users_id',$id)->where('users_id','LIKE',$request->search.'%')->get();
				if(!$orders){
				return response('data not found',400);
				}
				return response($orders,200);
		}
		public function myParkingOrders($id){
			$order = DB::table('bookings')->where('parking_id',$id)->paginate(4);
			return view('/myparkingorders',compact('order'));
		}
		public function viewFeature($id){
			$feature = DB::table('parkingfeatures')->where('parking_id',$id)->paginate(4);
			return view('viewfeature',compact('feature'));
		}
		public function deleteOrders($id){
		 $orders = DB::table('bookings')->where('id',$id)->delete();
			return redirect('myparkingorders');
		}
		public function deleteFeature($id){
			$feature = DB::table('parkingfeatures')->where('id',$id)->delete();
			return redirect('DisplayParkingDetails');
		}

 }
