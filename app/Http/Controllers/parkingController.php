<?php
namespace App\Http\Controllers;
use Illuminate\http\Request;
use Illuminate\Support\Facades\DB;
use App\Parking;
use App\Floors;
use App\Slots;
use Response;

class parkingController{
	public function getParkings(Request $request){
		$lat = $request->latitude;
		$lon = $request->longitude;
		$radius = 50; // KM

		$angle_radius = $radius / ( 111 * cos( $lat ) );
		$min_lat = $lat - $angle_radius;
		$max_lat = $lat + $angle_radius;
		$min_lon = $lon - $angle_radius;
		$max_lon = $lon + $angle_radius;

		// return response(Parking::all()->toArray(),200);

		$parkings = Parking::whereBetween('latitude',array($max_lat,$min_lat))
		->whereBetween('longitude',array($max_lon,$min_lon));

		if(isset($request->search) &&  $request->search !== ""){
			// $parkings->where('title','LIKE',$request->search.'%');
			$parkings->where('city','LIKE',$request->search.'%');
		}
		$parkings = $parkings->orderBy('latitude','ASC')->get();
		return response($parkings->toArray(),200);
	}

	public function parkingDetails($id){
		$user=Parking::where('id',$id)->get();
		return view('/parkingdetails',compact('user'));
	}
	public function services($id){
		$features = DB::table('parkingfeatures')->where('parking_id',$id)->get();
		$parking=Parking::where('id',$id)->get();
		return view('/services',compact('features','parking'));
	}
	public function parkingFloors($id){
		$parking = Parking::find($id);
		$details=Floors::where('parking_id',$id)->get();
		return view('/getparking',compact('details','parking'));
	}
	public function Fparking(request $request){
			$slots = Slots::where('floor_id',$request->floor)->get();
			$book = DB::table('bookings')->whereBetween('start_date', array($request->start_date, $request->end_date))->orWhere('end_date', $request->end_date)->get();
			$booked = array();
			foreach ($book as $value) {
				$booked[] = $value->slot_id;
			}
			if(!$slots){
				return response('Something went wrong! Please try again',500);
			}
		return response([$slots,$booked],200);
	}
}
?>
