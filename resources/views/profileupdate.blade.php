@extends('layouts.master')

@section('title','Login')

@section('header')
     @include('layouts.menubar')
@endsection
@section('footer')
    @include('layouts.footer')
@endsection

@section('content')
  <div class="profileupdate-content">
    <div class="container">
      <div class=" col-md-6 offset-md-3 login text-center">
         <div class="features-section-head text-center">
          <h3><span>P</span>rofile Update</h3>
        </div>
          <div id="profileupdate-form">
            <div class="cus_info_wrap ">
        	     <label for="name" class="labelTop">Name</label>
               <input id="name" type="text" class="form-group form-control"  message="name" name="name" value="{{$userInfo->name}}">
            </div>
          <div class="cus_info_wrap ">
              <label for="email" class="labelTop">Email</label>
              <input id="email" type="email" class="form-group form-control"  name="email"   message="email" value="{{$userInfo->email}}">
          </div>
          <div class="cus_info_wrap ">
              <label for="phone" class="labelTop">Phone</label>
              <input id="phone" type="phone" class="form-group form-control"  name="phone"   message="phone" id="phone" value="{{$userInfo->phone}}">
          </div>
          <div class="cus_info_wrap ">
              <label for="birthdate" class="labelTop">DOB</label>
              <input type="text" name="birthdate" id="daterange" class="form-group form-control" value="{{$userInfo->birthdate}}">
          </div>
          <div class="cus_info_wrap ">

              <label for="add-image" class="labelTop">Choose Image</label><br>
              <input type="file" id="profile" value="" class="gap10x form-group form-control" name="profile" message="profileimage" skip="true">
             <img class="img-xs rounded-circle" id="imgShow" style="display: none;" height="100px" width="100px">
          </div>
            <input type="hidden" name="_token" value="{{ csrf_token()}}">
          <div>
            <button type="submit" class="submit" name="profileupdate" id="profileupdate">SUBMIT</button>
            <a href="/"><button class="submit"><i class="fa fa-home" style="font-size:16px"></i> Previous</button></a>
          </div>
            </div>
           </div>
        </div>
      </div>
        <div class="gap100x"></div>

@endsection
@section('scripts')
        <script type="text/javascript" src="/js/profile.js"></script>
     </script>
@endsection
