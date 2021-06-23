@extends('admin.adminmaster')
@section('title','Adimin change password')
      <!-- partial -->
    <div class="container-fluid page-body-wrapper full-page-wrapper auth-page">
      <div class="content-wrapper d-flex align-items-center auth auth-bg-1 theme-one">
        <div class="row w-100">
          <div class="col-lg-4 mx-auto">
            <div class="auto-form-wrapper">
              <div id="admin-change-pwd">
                <div class="form-group">
                  <label class="label">Old password</label>
                  <div class="input-group">
                    <input type="password" class="form-control" placeholder="*********" name="oldpwd" message="old password">
                    <div class="input-group-append">
                      <span class="input-group-text">
                        <i class="mdi mdi-check-circle-outline"></i>
                      </span>
                    </div>
                  </div>
                </div>
                <div class="form-group">
                  <label class="label">New Password</label>
                  <div class="input-group">
                    <input type="password" class="form-control" placeholder="*********" name="newpwd" message="new password">
                    <div class="input-group-append">
                      <span class="input-group-text">
                        <i class="mdi mdi-check-circle-outline"></i>
                      </span>
                    </div>
                  </div>
                </div>
                <div class="form-group">
                  <button class="btn btn-primary submit-btn btn-block" id="change-pwd">Change</button>
                  <br>
                  <a href="/dashboard">Back to Home</a>
                </div>

            </div>
            <ul class="auth-footer">
              <li>
                <a href="#">Conditions</a>
              </li>
              <li>
                <a href="#">Help</a>
              </li>
              <li>
                <a href="#">Terms</a>
              </li>
            </ul>
            <p class="footer-text text-center">copyright © 2018 ParkOn. All rights reserved.</p>
          </div>
        </div>
      </div>
      <!-- content-wrapper ends -->
    <!-- page-body-wrapper ends -->
  </div>
  @section('script')

    <script type="text/javascript" src="/js/adminchangepwd.js"></script>

@endsection
