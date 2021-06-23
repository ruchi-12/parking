@extends('layouts.master')

@section('footer')
		@include('layouts.footer')
@endsection
@section('title','Login')
@section('content')
<section id="main">
		<div class="container">
				<div class="features-section-head text-center">
					<h3><span>L</span>ogin</h3>
				</div>
				<div class="col-md-6 offset-md-3 login text-center">
					<div class="login-signup-form" >
						<div id="login-form" >

								<div class="cus_info_wrap">
									<label for="login-email" class="labelTop">
									Email:
									<span class="require">*</span>
									</label>
									<i class="fa fa-user-circle-o" aria-hidden="true"></i>
									<input type="email" name="email" class="form-group form-control " placeholder="Enter your email" id="login-email" message="Email" autocomplete="off">
								</div>
								<div class="clearfix"></div>
								<div class="cus_info_wrap">
									<label class="labelTop" for="login-password">
									Password:
									<span class="require">*</span>
									</label>
									<input type="password" name="password" class="form-group form-control radious" placeholder="Enter your password" id="login-password" message="Password">
								</div>
								<div class="clearfix"></div>
								<div class="sky-form span_99">
							</div>
								<div class="botton1">
							</div>
								<button  class="submit" id="submitlogin"> Login </button>
						</div>
						<br>

						<a class="link1" href="{{ asset('/forgetpwd') }}">Forget Password ?</a>
						<br>
						<br>
							New User ? <a class="link" href="register">Create an Account </a>
						<br>
						<br>
					</div>
				</div>
	</div>
</section>
@endsection
@section('scripts')

		<script type="text/javascript" src="{{ asset('/js/login.js') }}"></script>

@endsection
