@extends('layouts.master')

@section('title','User booking')


@section('header')
		@include('layouts.menubar')
@endsection

@section('content')
	<div class="container">
  		<div class="row">

    		<div class="col-md-6 offset-md-3">
					<div class="features-section-head text-center">
						<h3><span>B</span>ook</h3>
					</div>
				<div id="booking-form">
					<label >Arrival date </label>
					<input type="text" name="start_date" id="start_date" class="form-group form-control" >
		   			<input type="hidden" class="form-control" id="user_id" name="user_id" placeholder="enter user id"  value="{{$userInfo->id}}">
		   			<input type="hidden" class="form-control" id="parking_id" name="parking_id" placeholder="enter parking id"  value="{{$slotInfo->parking_id}}">
		   			<input type="hidden" class="form-control form-group" id="slots_id" name="slot_id" placeholder="enter slots id"  value="{{$slotInfo->id}}" >
	   			@foreach($features as $value)
		   			<div class="form-check">
					  <input class="form-check-input form-group" type="checkbox" value="{{$value->feature}}" skip="true" name="feature">
					  <label class="form-check-label" for="defaultCheck1">
					    <?php echo $value->feature ?>
					  </label>
					</div>
					@endforeach
					 <label for="car_no">car no</label>
					 <input type="text" class="form-control form-group" id="car_no" name="car_no" placeholder=" enter car no" message="vehical no">

					<button  class="submit" id="book_slots" name="book_slot"> Book </button>
				</div>
				<div class="gap100x"></div>
				<div class="gap100x"></div>
		</div>
	</div>
</div>

@endsection

 @section('scripts')
	<script type="text/javascript" src="/js/booking.js"></script>
<script type="text/javascript">

	</script>
@endsection


@section('footer')
	@include('layouts.footer')
@endsection
