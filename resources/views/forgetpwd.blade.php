@extends('layouts.master')

@section('title','Forget password')
@section('footer')
    @include('layouts.footer')
@endsection
@section('content')
<section id="main">
	<div>
		<div class="container">
      <div class="features-section-head text-center">
          <h3><span>F</span>orgot Password</h3>
        </div>
				<div class="col-md-6 offset-md-3 login text-center">
					<div id="forgetpwd-form">

            <div class="cus_info_wrap">
                  <label for="login-email" class="labelTop">
                  Email:
                  <span class="require">*</span>
                  </label>
                  <input type="email" name="email" class="form-group form-control" placeholder="Enter your email" id="changePasswordEmail" message="email">
            </div>
                <div class="clearfix"></div>

					</div>

					<button type="submit" value="submit" class="submit" id="forget" _url="{{ route('sendOTP')}}" _url2="{{ route('verifyOTP')}}">Send OTP</button>
				 <div class="gap10x"><a href="/login"><font style="color: black;">Back</font></a></div>
				</div>
			</div>
	</div>
</section>



<section >

<div class="modal fade" id="verifyOTP"  tabindex="-1" role="dialog" aria-labelledby="verifyOTPLabel" area-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-body">
        <div id="reset-password-form">
          <div class="form-group">
            <label for="reset-password" class="col-form-label">New Password</label>
            <input type="password" class="form-control" id="reset-password" id="newpwd" name="newpwd" message="newpwd">
          </div>
          <div class="form-group">
            <label for="reset-new-password" class="col-form-label">Confirm Password</label>
            <input type="password" class="form-control" id="reset-new-password" id="confirmpwd" name="confirmpwd" message="confirmpwd">
          </div>
        </div>
      </div>
      <div class="modal-footer">
      <button type="button" class="btn btn-primary" id="set-password">Set New Password </button>
      </div>
    </div>
  </div>
</div>

</section>

@endsection
@section('scripts')

		<script type="text/javascript" src="/js/login.js"></script>

@endsection
