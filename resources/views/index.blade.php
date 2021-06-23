@extends('layouts.master')

@section('title','Home')
@section('header')
		@include('layouts.menubar')
		@include('layouts.banner')
@endsection

@section('content')
<div class="gap30x"></div>
<div class="features-section-head text-center">
<div style="float:center">
	<h3>Use our<span> Car Parking System</span> Which is</h3>
	<div class="gap100x"></div>
	<div class="row row1">
		<div class="col-md-4">
				<div  class="slow animated fadeInUp useCar">
					<center>
					<img src="{{ asset('images/use.png') }}" width="100px" height="100px">
				  <h2>Easy to use</h2>
				</center>
			</div>
		</div>
		<div class="col-md-4">
			<div  class="animated fadeInUp useCar">
				<img src="{{ asset('images/lock1.png') }}" width="100px" height="100px">
			<h2>Secured</h2>
			</div>
		</div>
		<div class="col-md-4">
		<div  class="animated fadeInUp useCar">
			<img src="images/notify.png" width="100px" height="100px">
		<h2>Notification</h2>
		</div>
</div>
</div>
<br>
<br>
<br>
</div>
<h3>How <span>Smart Parking Systems</span> works</h3>
<p>The innovative solution developed by Intercomp for the efficient and complete management of multilevel parkings.</p>
<br>

</p>
<div class="row">
	<div class="columnindex">
		<img src="{{ asset('/images/yes.png') }}" height="50px" width="50px">
		<h3>Online booking</h3>
    <p><small>Using Mobile App and Web App systems, users can book the parking area of interest in order to find it free for loading/unloading operations at the time selected.</small></p>
</div>
		<div class="columnindex">
			<img src="{{ asset('/images/onlinebooking.jpg') }}" height="350px" width="575px" style="padding:25px;">
</div>
</div>
<div class="row">
<div class="columnindex">
			<img src="{{ asset('/images/authentication.jpg') }}" height="350px" width="575px" style="padding:25px;">
</div>
<div class="columnindex">
	<img src="{{ asset('/images/yes.png') }}" height="50px" width="50px">
	<h3>Parking control</h3>
	<p><small>With our technology, only the persons that are authorized can make use of the areas for loading and unloading, or of specific parking stalls that are reserved for a limited period of time.

In case that an unauthorized vehicle is parked in a reserved area, the system immediately sends an alert to the competent bodies.</small></p>
</div>
</div>
<div class="row">
	<div class="columnindex">
		<img src="{{ asset('/images/yes.png') }}" height="50px" width="50px">
		<h3>Smart Cities</h3>
		<p><small>Smart parking, sustainability, the environment we live in and traffic are just some of the features of a Smart City. Find out all the news about the cities of the future (and of the present).</small></p>
</div>
		<div class="columnindex">
			<img src="{{ asset('/images/amartcity.jpg') }}" height="350px" width="575px" style="padding:25px;">
</div>
</div>
<div class="row">
	<div class="columnindex">
		<img src="{{ asset('/images/index3.jpg') }}" height="350px" width="575px" style="padding:25px;">
</div>
		<div class="columnindex">
			<img src="{{ asset('/images/yes.png') }}" height="50px" width="50px">
			<h3>Expanded security</h3>
			<p><small>Our all parking have cameras can capture streaming video whenever motion is detected in or around a space. Or continuously, if desired. Providing an expanded level of security that would otherwise be cost-prohibitive.</small></p>
</div>
</div>
<div class="gap40x"></div>
</div>
@endsection
@section('footer')
		@include('layouts.footer')
@endsection
@section('script')
<script type="text/javascript">
	
</script>
@endsection
