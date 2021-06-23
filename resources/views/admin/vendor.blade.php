@extends('admin.adminmaster')
@section('navbar')
    @include('admin.layouts.navbar')
@endsection
@section('title','Vendors')
@section('sidebar')
    @include('admin.layouts.sidebar')
@endsection
@section('footer')
    @include('admin.layouts.footer')
@endsection
 @section('content')
      <div class="main-panel">
        <div class="content-wrapper">
          <div class="row">
            <div class="col-lg-10 grid-margin stretch-card">
              <div id="search-form">
               <div class="container h-100">
                    <div class="d-flex justify-content-center h-100">
                        <div class="searchbar">
                            <input class="search_input" type="text" id="vendorSearch" name="search" placeholder="Search..." utocomplete="off">
                            <a href="#" class="search_icon"><i class="fas fa-search"></i></a>
                        </div>
                      </div>
                    </div>
                    </div>
                    <select class="form-control form-group select" name="Sort" id="SortVendor" >
                       <option  class="select">sorting</option>

                       <option value="Ascending" class="select">Ascending</option>
                       <option value="Descending" class="select">Descending</option>
                </select>
              <br>
            </div>
          </div>
          <div class="row">
            <div class="col-lg-10 grid-margin stretch-card">
                <div class="card-body bg">
                   <div class="table-responsive" style="display: none;" id="modal">
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
                      <tbody id="vendor">
                      </tbody>
                    </table>
                  </div>
                  <div class="table-responsive" id="modal1">
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
                      <tbody id="vendor">
                        @foreach($vendor as $value)
                        <tr>
                          <td>{{$value->name}}</td>
                          <td>{{$value->email}}</td>
                          <td>{{$value->phone}}
                            <!-- <i class="mdi mdi-arrow-down"></i> -->
                          </td>
                            <td>{{$value->birthdate}}
                            <!-- <i class="mdi mdi-arrow-down"></i> -->
                          </td>
                          <td>
                            <a href="/delete/vendor/{{$value->id}}"<i class="far fa-trash-alt"></i></a>
                          </td>
                        </tr>
                        @endforeach

                      </tbody>
                    </table>
                  </div>
              </div>
            </div>
@endsection
@section('script')
         <script type="text/javascript" src="js/admin.js"></script>
         <script type="text/javascript">
        $.ajaxSetup({ headers: { 'csrftoken' : '{{ csrf_token() }}' } });
        </script>

@endsection
