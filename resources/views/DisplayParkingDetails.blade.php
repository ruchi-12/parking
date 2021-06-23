@extends('layouts.master')

@section('title','Parking details')

@section('header')
	@include('layouts.menubar')
@endsection


@section('content')
<div class="gap10x margin_previous">
		<a href="/"><button class="btn1"><i class="fa fa-home" style="font-size:16px"></i> Home</button></a>
</div>
<div class="gap30x"></div>
	<div class="container">
		<div class="row" style="height:600px;">
			<div class="col-md-12">
				<div id="search-form">
					 <div class="container h-100">
							<div class="d-flex justify-content-center h-100">
									<div class="searchbar">
											<input class="search_input" type="text" id="searchParking" name="search" placeholder="Search..." autocomplete="off">
											<a href="#" class="search_icon"><i class="fas fa-search"></i></a>
									</div>
								</div>
							</div>
							</div>
				<div class="parking1" align="center">
					<div class="gap30x"></div>
					<div id="modal" style="display: none;">
					<table class="table table-striped">
						<thead>
							<tr>
							<th scope="col">Number</th>
							<th scope="col">Title</th>
							<th scope="col">Description</th>
							<th scope="col">Floors</th>
							<th scope="col">Image</th>
							<th scope="col" style="width:200px"><center>Action</center></th>
							<th scope="col">Orders</th>
						</tr>
						</thead>
						<tbody id="search">

						</tbody>
					</table>
				</div>
				<div id="modal1">
					<table class="table table-striped">
					  <thead>
					    <tr>
					    <th scope="col">Number</th>
							<th scope="col">Title</th>
							<th scope="col">Description</th>
							<th scope="col">Floors</th>
							<th scope="col">Image</th>
							<th scope="col" ><center>Action</center></th>
							<th scope="col">Orders</th>
							<th scope="col" style="float: right;">Feature</th>

						</tr>
					  </thead>
					  <tbody>
					  	@foreach($details as $value)
					    <tr>
					    <td>{{$value->id}}</td>
						 	<td>{{$value->title}}</td>
						 	<td>{{$value->description}}</td>
						 	<td>{{$value->floor}}</td>

						 	<td ><img src="{{$value->image}}" height="100px" width="100px"></td>
                      		<td colspan="2">
						 	<a class="font" href="delete/{{ $value->id}}" >  <i class="far fa-trash-alt fa-fw" ></i></a>
				 			<a  class="font" href="update/parking/{{$value->id}}" ><i class="far fa-edit fa-fw"></i></a>
					 		</td>
							<td>
				 			<a  class="font" href="my/parking/orders/{{$value->id}}"><i class="far fa-eye fa-fw"></i></a>			 		
				 			</td>
					 		<td>
					 		<a href="/view/feature/{{$value->id}}"><button class="btn1">View more</button></a></td>
						 </tr>
						@endforeach

					  </tbody>
					</table>
				</div>
				</div>
			</div>
		</div>
</div>
	</div>
	<div class="gap30x"></div>
@endsection

@section('scripts')
<script type="text/javascript" src="js/vendor.js">

</script>
@endsection
@section('footer')
	@include('layouts.footer')
@endsection
