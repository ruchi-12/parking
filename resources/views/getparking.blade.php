@extends('layouts.master')

@section('title','customer')

@section('header')
	@include('layouts.menubar')
@endsection

@section('content')

<div class="content">
	<div class="gap50x"></div>
	<div class="row" >
		<div class="col-md-5 ">
			<div class="products-section-head">
			<div class="row" style="width:600px;padding-left:10px;">
				<div class="col-md-12">
					<img src="{{ $parking->image }}" class="parking-img-detail">
				</div>
				<div class="col-md-12">
					<div class="gap10x"></div>
					<h3> {{ $parking->title }} </h3>
				</div>
						<div class="col-md-12">
					<div class="gap10x"></div>
					<p> Address:{{ $parking->address }} </p>
				</div>
				<div class="col-md-12">
					<div class="gap10x"></div>
					<p> {{ $parking->description }} </p>
				</div>
				<div class="col-md-12">
					<div class="gap10x"></div>
					<a class="submit" href="/services/{{$parking->id}}">Services</a>
					<a class="book-now" id="get-direction" href="/get/direction/{{$parking->id}}" style="width:150px;">Get Direction</a>
				</div>
			</div>
		</div>
		</div>
		<div class="col-md-5 offset-md-1">
			<div id="add-floors-form">
			<div class="products-section-head">
					<div>
						<label >Vehicle Drop-Off Date </label>
						<input type="text" name="start_date" id="start_date" class="form-group form-control" >
						<label >Vehicle Pick-Up Date</label>
						<input type="text" name="end_date" id="end_date" class="form-group form-control">
						<label for="floors">Select Floor</label>
					  <select class="form-control form-group"  id="floor-select" name="floor">
						<option value="Select Floor">Select floor</option>
						@foreach($details as $floor)
						<option value="{{ $floor->id }}"> {{ $loop->iteration }} </option>
						@endforeach
					</select>
					<center>
					<button class="submit" id="show-slots">show</button>
				</center>
					</div>
				</div>
			</div>
		<div class="gap100x"></div>
			<div id="slotsDisplay">
	    </div>
	</div>
	</div>
	<div class="gap100x"></div>

	</div>
	</div>

@endsection

@section('scripts')
<script type="text/javascript" src="/js/floors.js" >

</script>
@endsection
@section('footer')
@include('layouts.footer')
@endsection
