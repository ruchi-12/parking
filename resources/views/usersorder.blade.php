@extends('layouts.master')

@section('title','Parking details')

@section('header')
	@include('layouts.menubar')
@endsection

@section('content')
	<div class="container">
		<div class="row">
			<div class="col-md-12">
				<div class="parking1 padding" align="center">
					<div class="features-section-head text-center">
							<h3>My Orders</h3>
						</div>
						<div class="gap30x"></div>
					<table class="table table-striped">
					  <thead>
					    <tr>
					    <th scope="col">Parking</th>
						<th scope="col">Arrival date</th>
						<th scope="col">Leave date</th>
						<th scope="col">Total amount</th>
						<th scope="col">Discount</th>
						<th scope="col">Paidamount</th>
						</tr>
					  </thead>
					  <tbody>
					  	@foreach($data as $value)
					    <tr>
					    <td>{{$value->parking->title}}</td>
					    <td>{{$value->start_date}}</td>
						 	<td>{{$value->end_date}}</td>
						 	<td>{{$value->totalamount}}</td>
						 	<td>{{$value->discount}}</td>
						 	<td>{{$value->paidamount}}</td>
						 </tr>
						@endforeach
					  </tbody>
					</table>
					<button class="btn submit"><a href="/bill-test"><i class="fa fa-download">Download</i></a></button>
				</div>
				</div>
			</div>
	</div>
@endsection

@section('scripts')
@endsection
@section('footer')
	@include('layouts.footer')
@endsection
