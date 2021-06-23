@extends('layouts.master')

@section('title','content')


@section('header')

		@include('layouts.menubar')
@endsection

@section('content')
<div class="row row1">
  <div class="column1">
		<div class="features-section-head text-center">
			<h3>Ask for more <span>information</span></h3>
			<div><p><small>As soon as possible you will be contacted from one of our account managers</small></p></div>
			<div class="row">
			<div class="col-md-12">
			<div style="float:left;padding:20px;">
				<img src="{{ asset('/images/location.png') }}" height="40px" width="40px">
			</div>
			<div style="float:left;font-weight: bold;color:#6d7b8a;padding-top:20px;">
				Come and meet us
				<div style="color:#6d7b8a">
				310,sayona plaza,surat.
			</div>
		</div>
	</div>
</div>
<div class="row">
	<div class="col-md-12">
		<div style="float:left;padding:20px;">
			<img src="{{ asset('/images/phone1.png') }}" height="40px" width="40px" >
		</div>
		<div style="float:left;font-weight:bold;color:#6d7b8a;padding-top:20px;">
			Phone
			<div style="color:#6d7b8a">
			+447700 900269
		</div>
	</div>
</div>
</div>
</div>
</div>
  <div class="column">
		<section id="main">
			<div class="login-content"  >
				<div class="container" >
					<div class="row" style="height:700px;width:750px;" >
						<div class="col-md-10 	login text-center">
						<div class="agile1">
							<div id="contact-form">
							<lable class="form-group" style="float:left">Name</lable>
								<span><input class="form-group form-control" name="userName" type="text" class="textbox" placeholder="Enter your name" Message="name"></span>
								<lable class="form-group" style="float:left">Email</lable>
								<span><input class="form-group form-control" name="userEmail" type="email" class="textbox" placeholder="Enter your email" Message="email"></span>
								<lable class="form-group" style="float:left">Telephone</lable>
								<span><input class="form-group form-control" name="userPhone" type="phone" class="textbox" placeholder="Enter your phone" Message="phone"></span>
								<lable class="form-group" style="float:left">Message</lable>
							<textarea class="form-group form-control" name="message" placeholder="Enter your message" message="message"> </textarea>
							<button class="submit" id="send">Send</button>
						</div>
						</div>
						</div>
						</div>
					</div>
				</div>
	   </div>
</div>

@endsection

@section('footer')
	@include('layouts.footer')
@endsection
@section('scripts')
<script type="text/javascript" src="/js/contact.js"></script>

@endsection
