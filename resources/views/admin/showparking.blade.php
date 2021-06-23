@extends('admin.adminmaster')
@section('navbar')
    @include('admin.layouts.navbar')
@endsection
@section('title','Parkings')
@section('sidebar')
    @include('admin.layouts.sidebar')
@endsection
@section('content')
<div class="main-panel">
  <div class="content-wrapper">
 <div class="row">
    <div class=" offset-md-2">
    <img src="{{$parking->image}}" width="300" height="300" style="padding-top: 20px;">
    </div>
    <div class="col-md-5" style="padding-top: 30px; padding-left: 20px;">
      <div class="products-section-head">
          <h3>{{$parking->title}}</h3>
          <h4>Address:</h4><p><small>{{$parking->address}}</small></p>
          <h4>Description:</h4><p><small>{{$parking->description}}</small></p>
      </div>
    </div>
    <br>
    <br>
    <div class="col-md-10 offset-md-1">
      <div class="products-section-head">
        <h4><u><center>Services</center></u></h4>
        <div  style="padding:10px;border-style:solid;border-width:5px;color:#5983e8;border-radius:10px;">
      <table>
        <tr>
          @foreach($feature as $value)
          <td>
           <h4><u>{{$value->feature}}:</u></h4>
           <p><small>{{$value->description}}</small></p>
           <h4>RS.{{$value->price}}</h4>
         </td>
     @endforeach
     </tr>
     </table>
   </div>
   </div>
 </div>
</div>
</div>
</div>
</div>
@endsection
@section('footer')
    @include('admin.layouts.footer')
@endsection
