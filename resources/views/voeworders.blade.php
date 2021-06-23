@extends('admin.adminmaster')
@section('navbar')
    @include('admin.layouts.navbar')
@endsection
@section('sidebar')
    @include('admin.layouts.sidebar')
@endsection
@section('title','Orders')
@section('footer')
    @include('admin.layouts.footer')
@endsection
 @section('content')
      <div class="main-panel">
        <div class="content-wrapper">
          <div class="row">
            <div class="col-lg-10 grid-margin stretch-card">
                <div class="card-body bg">
                  <div  id="modal1">
                    <table class="table table-hover" width="1000px">
                      <thead>
                        <tr>
                          <th>No</th>
                          <th>Arrival date</th>
                          <th>Leave date</th>
                          <th>Total amount</th>
                          <th>Discount</th>
                          <th>Paidamount</th>
                          <th>Delete</th>

                        </tr>
                      </thead>
                      <tbody id="vendor">
                        @php
                          $i = 1
                          @endphp
                        @foreach($orders as $value)
                        <tr>
                          <td>{{$i}}</td>
                          <td>{{$value->start_date}}</td>
                          <td>{{$value->end_date}}</td>
                          <td>{{$value->totalamount}}</td>
                          <td>{{$value->discount}}</td>
                          <td>{{$value->paidamount}}</td>
                          <td><a href="delete/order/{{$value->id}}"><i class="far fa-trash-alt"></i></a></td>
                          <td>
                        </tr>
                          @php
                          $i = $i + 1
                          @endphp
                        @endforeach

                      </tbody>
                    </table>
                    <br>
                    <br>
                  {{ $orders->links() }}
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
