@extends('layouts.master')

@section('title','customer')

@section('header')
	@include('layouts.menubar')
@endsection
@section('footer')
	@include('layouts.footer')
@endsection
@section('content')

<div class="row" >
	<div class="gap20"></div>
	<div class="container">
		<div class="products-section">
				<div class="col-md-6 offset-md-3 text-center">
					<input type="text" id="searchParking" class="form-control form-group" name="search" placeholder="Search Parking" autocomplete="off">
				</div>
					<div class="products-section-head text-center">
					<h3><span>P</span>arkings</h3>
					<p>“Parkings available near by you”</p>
				</div>
				<div class="gap100x"></div>
				<div class="products-section-grids">
					<div id="portfoliolist">
					</div>
					<div class="clearfix"></div>
		  		</div>
		</div>

	</div>
</div>
@endsection

@section('scripts')
	<script type="text/javascript" src="/js/get-parking.js"></script>
@endsection
