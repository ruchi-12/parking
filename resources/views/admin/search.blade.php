@extends('admin.adminmaster')
@section('navbar')
    @include('admin.navbar')
@endsection
@section('sidebar')
@include('admin.sidebar')
@endsection
@section('footer')
    @include('admin.footer')
@endsection
 @section('content') 
      <!-- partial -->
      <div class="main-panel">
        <div class="content-wrapper">
           <div class="row">
            <div class="col-lg-10 grid-margin stretch-card">
              <div id="search-form">
              <input type="text" id="search" class="form-control form-group" name="search" placeholder="Search user">
              <br>
            </div>
            </div>
          </div>
          <div class="row">
            <div class="col-lg-10 grid-margin stretch-card">
             
              <div class="card">
                <div class="card-body">
                  <div class="table-responsive">
                    <table class="table table-hover" width="1000px">
                      <thead>
                        <tr>
                          <th>Name</th>
                          <th>Email Address</th>
                          <th>Phone</th>
                          <th>Date of Birth</th>
                          <th>Delete</th>
                         
                        </tr>
                      </thead>
                      <tbody>
                      </tbody>
                    </table>
                  </div>
                </div>
              </div>
            </div>
         @endsection
         @section('script')
         <script type="text/javascript" src="js/aduser.js"></script>
@endsection