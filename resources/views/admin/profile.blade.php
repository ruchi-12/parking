@extends('admin.adminmaster')
@section('title','Adimin change password')
      <!-- partial -->
    <div class="container-fluid page-body-wrapper full-page-wrapper auth-page">
      <div class="content-wrapper d-flex align-items-center auth auth-bg-1 theme-one">
        <div class="row w-100">
          <div class="col-lg-4 mx-auto">
            <div class="auto-form-wrapper">
              <div id="profileupdate-form">
                <div class="form-group">
                  <label class="label">Title</label>
                  <div class="input-group">
                    <input type="text" class="form-control" name="title" value="{{ session()->get('USER')['title']}}">
                    <div class="input-group-append">
                      <span class="input-group-text">
                        <i class="mdi mdi-check-circle-outline"></i>
                      </span>
                    </div>
                </div>
                <br>
                <div class="form-group">
                  <label class="label">Email</label>
                  <div class="input-group">
                    <input type="text" class="form-control" name="email" value="{{ session()->get('USER')['email']}}">
                    <div class="input-group-append">
                      <span class="input-group-text">
                        <i class="mdi mdi-check-circle-outline"></i>
                      </span>
                    </div>
                  </div>
                </div>
                <br>
                <div class="form-group">
                  <label class="label">Profile</label>
                  <div class="input-group">
                    <input type="file" id="profile" value="" class="gap10x form-group form-control" name="profile" message="profileimage" skip="true">
                    <div class="input-group-append">
                      <span class="input-group-text">
                        <i class="mdi mdi-check-circle-outline"></i>
                      </span>
                    </div>
                  </div>
                </div>
                <center>
                <img class="img-xs rounded-circle" id="imgShow" style="display: none;" height="100px" width="100px">
              </center>
                </div>
                <div class="form-group">
                  <button class="btn btn-primary submit-btn btn-block" id="parkingupdate">Change</button>
                  <br>
                  <a href="/dashboard">Back to Home</a>
                </div>
            </div>
          </div>
        </div>
      </div>
      <!-- content-wrapper ends -->
    <!-- page-body-wrapper ends -->
  </div>
  @section('script')

    <script type="text/javascript">
    $('#profile').change(function(e){
      var profile = e.target.files[0];
      var data = new FormData();
      data.append('profile',profile);
      _ajaxImage('/parking/image','post',data,function(status,response){
        console.log(response);
        $('#imgShow').show();
        $('#imgShow').attr('src',response);
      });
    })
  $('#parkingupdate').click(function() {
      var data = _velidation($('#profileupdate-form'),'input');
      if(data == false){
        return false;
      }
      data.profile = $('#imgShow').attr('src');
      _ajax('/profileUp','POST',data,$(this),function(status,response){
        alert(status);
           if(status == 200){
          _alert(response,"",'success','OK');
          }
          _alert('Oops!Somethong went wrong.',"",'error','OK');
        });
  });
    </script>

@endsection
