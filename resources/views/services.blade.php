@extends('layouts.master')

@section('title','customer')

@section('header')
	@include('layouts.menubar')
@endsection

@section('content')
<div class="features-section-head text-center">
@foreach($features as $value)
<div class="row row1">
  <center>
  <div class="columnindex1">
    <img src="{{ asset('/images/yes.png') }}" height="50px" width="50px">
    <h3><span>{{$value->feature}}</span></h3>
    <p style="padding:15px;"><small>{{$value->description}}</small></p>
    <h2>price:${{$value->price}}</h2>
  </div>
</center>
</div>
<div>

</div>
@endforeach
</div>
@foreach($parking as $value)
<center>
<button class="submit"><a href="/user/booking/{{$value->parking_id}}">Book Now</a></button>
</center>
@endforeach

@endsection

@section('scripts')
@endsection
@section('footer')
@include('layouts.footer')
@endsection
