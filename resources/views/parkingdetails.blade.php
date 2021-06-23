@extends('layouts.master')

@section('title','Login')

@section('header')
	@include('layouts.menubar')
@endsection
@section('footer')
	@include('layouts.footer')
@endsection
@section('content')
@foreach($user as $value)
<span class="border border-primary">
 <div class="row">
    <div class=" offset-md-2">
        <div id="login-image">
		<img src="{{$value->image}}" width="400" height="400" style="padding-top: 20px;">
		</div>

    </div>
    <div class="col-md-5" style="padding-top: 30px;padding-left: 20px">
    	<div class="products-section-head">
					<h3><span></span>{{$value->title}}</h3>
					<h2><span>Address:</span></h2><p>{{$value->address}}</p>
					<h2><span>Description:</span></h2><p>{{$value->description}}</p>
				</div>
				<center>
				<button class="submit"><a href="user/booking/{{$value->parking_id}}">Book Now</a></button>
			</center>
    </div>
</div>
<div class="gap100x"></div>
@endforeach
@endsection

@section('scripts')
@endsection

@section('footer')
		@include('layouts.footer')
@endsection
