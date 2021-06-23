@extends('layouts.master')

@section('title','Login')

@section('header')
	@include('layouts.menubar')
@endsection

@section('footer')
	@include('layouts.footer')
@endsection

@section('content')	
<div id="otp-form">
    <div class="col-md-4 offset-md-4">
 			<label for="otp">ENTER YOUR OTP</label>
            <input type="otp" name="otp" class="form-group form-control " placeholder="Enter otp" id="otp" message="otp">
            <input type="hidden" name="_token" value="{{ csrf_token()}}">
            <button type="submit" class="btn btn-success" name="otpbtn">SUBMIT</button>
    </div>
</div>
@endsection

@section('scripts')
		<script type="text/javascript" src="/js/register.js"></script>
@endsection
