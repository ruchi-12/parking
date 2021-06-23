@extends('layouts.master')

@section('title','customer')

@section('header')
	@include('layouts.menubar')
@endsection
@section('footer')
	@include('layouts.footer')
@endsection
@section('content')
<!-- <div   style="background: url('../images/park4.jpg')"> -->
<div class="gap10x margin_previous">
		<a href="/"><button class="btn1"><i class="fa fa-home" style="font-size:16px"></i> Home</button></a>
</div>
<div class="gap40x"></div>	
	<div class="container">
		<div class="row" style="height:600px;">
			<div class="col-md-12">
				<div class="parking1" align="center">
					<table class="table table-striped">
					  <thead>
					    <tr>
							<th scope="col">Title</th>
							<th scope="col">Floors</th>
							<th scope="col">Add Slots</th>
							<th scope="col">Add Features  </th>

					    </tr>
					  </thead>
					  <tbody>
					  	@foreach($details as $value)
					    <tr>
						 	<td>{{$value->title}}</td>
						 	<td>{{$value->floor}}</td>
						 	<td><a class="link" href="/add/slots/{{$value->id}}">Add Slots</a></td>

						 	<td><a class="link" href="/add/feature/{{$value->id}}" id="add-feature">Add Feature</a></td>


					    </tr>
							@endforeach

					  </tbody>
					</table>
				</div>
			</div>
		</div>

	</div>
@endsection

@section('scripts')
@endsection
