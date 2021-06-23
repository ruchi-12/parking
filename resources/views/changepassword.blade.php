@extends('layouts.master')

@section('title','Login')


@section('header')
    @include('layouts.menubar')
@endsection

@section('footer')
    @include('layouts.footer')
@endsection

@section('content')
<div class="changepwd-content">
    <div class="container">
        <div class="col-md-6 offset-md-3 login text-center">
           <div class="features-section-head text-center">
              <h3><span>C</span>hange password</h3>
            </div>
          <div id="changepassword-form">
            <div class="cus_info_wrap">
                <label for="oldpwd">OLD PASSWORD</label>
                <input id="oldpwd" type="Password" class="form-group form-control"  name="oldpwd" message="oldPassword"  placeholder="********">
            </div>
            <div class="cus_info_wrap">
                <label for="newpwd">NEW PASSWORD</label>
                <input id="newpwd" type="Password" class="form-group form-control"  name="newpwd"  message="newPassword" placeholder="********" >
            </div>
            <div class="cus_info_wrap">
                <label for="confirmpwd">CONFIRM PASSWORD</label>
                <input id="confirm" type="Password" class="form-group form-control"  name="confirmpwd" message="confirmPassword" placeholder="********" >
            </div>
            <div>
            <button class="submit" name="changepwd" id="changepwd">SUBMIT</button>
            <a href="/"><button class="submit"><i class="fa fa-home" style="font-size:16px"></i> Previous</button></a>
            </div>
            </div>
           </div>
        </div>
    </div>
    <div class="gap100x"></div>
  @endsection

@section('scripts')
        <script type="text/javascript" src="/js/login.js"></script>
@endsection
