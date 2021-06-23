@extends('admin.adminmaster')
@section('navbar')
    @include('admin.layouts.navbar')
@endsection
@section('sidebar')
    @include('admin.layouts.sidebar')
@endsection
@section('title','Parkings')
@section('footer')
    @include('admin.layouts.footer')
@endsection
 @section('content')
      <!-- partial -->
      <div class="main-panel">
        <div class="content-wrapper">
          <div class="row">
            <div class="col-lg-10 grid-margin stretch-card">
              <div id="search-form">
               <div class="container h-100">
                    <div class="d-flex justify-content-center h-100">
                        <div class="searchbar">
                            <input class="search_input" type="text" id="parkingSearch" name="search" placeholder="Search..." utocomplete="off">
                            <a href="#" class="search_icon"><i class="fas fa-search"></i></a>
                        </div>
                      </div>
                    </div>
                     </div>
                <select class="form-control form-group select" name="Sort" id="SortParking">
                      <option value="sorting" class="select">sorting</option>
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
                          <th>Vendor id</th>
                          <th>Name</th>
                          <th>Image</th>
                          <th>Floor</th>
                          <th>Delete</th>
                          <th>Details</th>
                          <th>Orders</th>
                        </tr>
                      </thead>
                      <tbody id="parking">
                      </tbody>
                    </table>
                  </div>
                  <div class="table-responsive" id="modal1">
                    <table class="table table-hover" width="1000px">
                      <thead>
                        <tr>
                          <th>Vendor id</th>
                          <th>Name</th>
                          <th>Image</th>
                          <th>Floor</th>
                          <th>Delete</th>
                          <th>Details</th>
                          <th>Orders</th>
                        </tr>
                      </thead>
                      <tbody>
                        @foreach($parking as $value)
                        <tr>
                          <td>{{$value->vendor_id}}</td>
                          <td>{{$value->title}}</td>
                            <!-- <i class="mdi mdi-arrow-down"></i> -->

                          <td><img src="{{$value->image}}"></td>
                          <td>{{$value->floor}}</td>

                            <td><a href="delete/parking/{{$value->id}}"><i class="far fa-trash-alt"></i></a>
                          </td>
                           <td><a href="/show/parking/{{$value->id}}"><i class="far fa-eye"></i></a></td>
                            <td><a href="/show/orders/{{$value->id}}"><i class="far fa-eye"></i></a></td>
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
