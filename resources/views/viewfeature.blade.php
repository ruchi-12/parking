@extends('layouts.master')

@section('title','Parking details')

@section('header')
	@include('layouts.menubar')
@endsection

@section('content')
<div class="gap10x margin_previous">
		<a href="/DisplayParkingDetails"><button class="btn1"><i class="fa fa-home" style="font-size:16px"></i> Previous</button></a>
</div>
	<div class="container">
		<div class="row">
			<div class="col-md-12">
						<div class="gap30x"></div>
					<div id="modal" style="display: none;">
					<table class="table table-striped">
						<thead>
 						 <tr>
 						 <th scope="col">Number</th>
 						 <th scope="col">Feature</th>
 						 <th scope="col">Price</th>
 						 <th scope="col">Description</th>
 						 <th scope="col">Action</th>
 					 </tr>
 					 </thead>
						<tbody id="searchOrders">

						</tbody>
					</table>
				</div>
				<div id="modal1">
					<table class="table table-striped">
					  <thead>
					    <tr>
					    <th scope="col">Number</th>
 						 <th scope="col">Feature</th>
 						 <th scope="col">Price</th>
 						 <th scope="col">Description</th>
 						 <th scope="col">action</th>
						</tr>
					  </thead>
					  <tbody>
					  	@foreach($feature as $value)
					    <tr>
					    <td>{{$value->id}}</td>
						 	<td>{{$value->feature}}</td>
						 	<td>{{$value->price}}</td>
						 	<td>{{$value->description}}</td>
						 	<td><a class="font" href="/delete/feature/{{ $value->id}}" >  <i class="far fa-trash-alt fa-fw" ></i></a></td>
						 </tr>
						@endforeach
					  </tbody>
					</table>
				</div>
				</div>
			</div>
		</div>
	</div>
	<div class="gap100x"></div>
@endsection

@section('scripts')
<script type="text/javascript" src="/js/vendor.js">

</script>
@endsection
@section('footer')
	@include('layouts.footer')
@endsection
