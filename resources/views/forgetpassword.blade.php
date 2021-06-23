@extends('layouts.master')

@section('title','Login')


@section('header')
  @include('layouts.menubar')
@endsection


@section('footer')
  @include('layouts.footer')
@endsection
@section('content')
<center>
  <div class="changepassword-content">
    <div class="container">
        <div class="login text-center">
          <div id="forgetpassword-form">
             <h4 class="form-group">Change Password</h4>
              <div class="cus_info_wrap">
              <label for="newpwd">NEW PASSWORD</label>
              <input id="newpwd" type="password" class="form-group form-control"  name="newpwd"  placeholder="Enter your newpassword" id="newpwd" message="newpassword">
              <label for="confirmpwd">CONFIRM PASSWORD</label>
              <input id="confirmpwd" type="password" class="form-group form-control"  name="confirmpwd" placeholder="Enter your confirmpassword" id="confirmpwd" message="confirmpassword">
              <input type="hidden" name="_token" value="{{ csrf_token()}}">
              <button type="submit" class="btn btn-success" name="submit">SUBMIT</button>
          </div>
        </div>
      </div>
    </div>
</center>
@endsection
@section('scripts')
    <script type="text/javascript" src="/js/forgetpassword.js"></script>
@endsection


