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
  <div class="profileupdate-content">
    <div class="container">
    <div class="booking text-center">
    <div id="booking-form">
        <div class="col-md-5 login text-center">
         <h4 class="form-group">Book parking slote</h4>
            <div class="cus_info_wrap">
            <label for="birthdate">Select Date</label>
            <input type="text" name="datetimes" id="daterange" class="form-group form-control" id="datetimes">
             <label for="phone">Promo Id</label>
            <input  type="text" class="form-group form-control"  name="promoid"  message="phone" id="promoid">
             <label for="phone">Total Amount</label>
            <input  type="text" class="form-group form-control"  name="totalamount"  message="phone" id="totalamount">
        </div>
        </div>
        <div class="col-md-5 sign-up text-center">
            <label for="phone">Total Amount</label>
            <input  type="text" class="form-group form-control"  name="totalamount"  message="phone" id="totalamount">
            <input type="hidden" name="_token" value="{{ csrf_token()}}">
            <button type="submit" class="btn btn-success" name="profileupdate" id="booking">SUBMIT</button>
            </div>
           </div>
       </div>
        </div>
    </div>
</div>     
</center> 

@endsection
@section('scripts')
        <script type="text/javascript" src="/js/booking.js"></script>
@endsection