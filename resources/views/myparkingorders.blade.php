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
					<div id="search-form">
						 <div class="container h-100">
								<div class="d-flex justify-content-center h-100">
										<div class="searchbar">
												<input class="search_input" type="text" id="searchOrder" name="search" placeholder="Search..." autocomplete="off">
												<a href="#" class="search_icon"><i class="fas fa-search"></i></a>
										</div>
									</div>
								</div>
								</div>
						<div class="gap30x"></div>
					<div id="modal" style="display: none;">
					<table class="table table-striped">
						<thead>
 						 <tr>
 						 <th scope="col">User Id</th>
 						 <th scope="col">Slot_id</th>
 						 <th scope="col">Arrival_date</th>
 						 <th scope="col">Leave_date</th>
 						 <th scope="col">Paidamount</th>
 						 <th scope="col">Status</th>
 						 <th scope="col">Delete</th>
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
					    <th scope="col">User Id</th>
							<th scope="col">Slot_id</th>
							<th scope="col">Arrival_date</th>
							<th scope="col">Leave_date</th>
							<th scope="col">Paidamount</th>
							<th scope="col">Status</th>
							<th scope="col">Delete</th>
						</tr>
					  </thead>
					  <tbody>
					  	@foreach($order as $value)
					    <tr>
					    <td>{{$value->users_id}}</td>
						 	<td>{{$value->slot_id}}</td>
						 	<td>{{$value->start_date}}</td>
						 	<td>{{$value->end_date}}</td>
							<td>{{$value->paidamount}}</td>
							@if($value->status == 0)
							<td><img src="/images/pending2.png" height="20px" width="20px"></td>
								 @endif
								 @if($value->status == 1)
								 <td><img src="/images/success2.png" height="20px" width="20px"></td>
										@endif
							<td>
						 	<a class="font" href="delete/vendor/order/{{ $value->id}}">  <i class="far fa-trash-alt fa-fw"></i></a>
						 	</td>
						 </tr>
						@endforeach
					  </tbody>
					</table>
					{{ $order->links() }}
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
