@extends('layouts.master')

@section('footer')
		@include('layouts.footer')
@endsection

@section('title','Register')
@section('content')
<section id="main">
		<div class="container">
			<div class="features-section-head text-center">
				<h3><span>S</span>ing Up</h3>
			</div>
				<div class="col-md-6 offset-md-3 login text-center">

					<div id="login-signup-form">
						<div id="register-form" area-hidden="true">

 						<div class="cus_info_wrap">
 							<label class="labelTop" for="name">
 							UserName:
 							<span class="require">*</span>
 							</label>
 							 <input type="text" name="name" class="form-group form-control" placeholder="Enter your name" id="name" message="name" >
 						</div>

 						<div class="cus_info_wrap">
 							<label class="labelTop">
 							Email Id:
 							<span class="require">*</span>
 							</label>
 							 <input type="email" name="email" class="form-group form-control" placeholder="Enter your email" id="register-email" message="Email">
 						</div>

 						<div class="cus_info_wrap">
 							<label class="labelTop">
 							Select Account
 							<span class="require">*</span>
 							</label>
 							<select name="role" class="form-control form-group" >
 								<option value="customer" name="customer">customer</option>
 					            <option value="vendor" name="vendor">Vendor</option>
 					        </select>
 						</div>
 						<div class="clearfix">
 						</div>
              <div class="cus_info_wrap">
 							<label class="labelTop">
 							Password:
 							<span class="require">*</span>
 							</label>
 							  <input type="password" class="form-group form-control" name="password" placeholder="Enter password" id="password" message="Password" minlength="8">
 						</div>
 						<div class="botton1">
 							<button  class="submit" id="registerbtn" >Register</button>
 						</div>

 					</br>
						Have an account?<a class="link" href="login">Log in</a>
 					</div>
 				</div>
			</div>
		</div>

</section>

@endsection
@section('scripts')

		<script type="text/javascript" src="{{ asset('/js/login.js') }}"></script>

@endsection
