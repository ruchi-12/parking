@extends('layouts.master')

@section('title','Add slots')

@section('header')
	@include('layouts.menubar')
@endsection
@section('footer')
	@include('layouts.footer')
@endsection
@section('content')
<section id="main">
	<div class="login-content" >
		<div class="container">
			<div class="row" >
				<div class="col-md-6 offset-md-3 login text-center">
					<div id="add-slots-form">

		  			<div class="features-section-head text-center">
								<h3><span>A</span>dd slots</h3>
							</div>
		  			<div class="cus_info_wrap">
		  			<label for="floors" class="labelTop">Select Floor</label>
		  			<select class="form-control form-group" name="floor" id="floor">
		  				@foreach($details as $floor)
		  				<option value="{{ $floor->id }}"> {{ $loop->iteration }} </option>
		  				@endforeach

		  			</select>
		  		</div>
		  		<div class="cus_info_wrap">
		  			<label class="labelTop" for="slots">Slots</label>
		  			<input type="text" class="form-control" id="slots"  name="slots" placeholder="Enter slots">
		 		</div>
		  		<div class="cus_info_wrap">
		  			<label for="price" class="labelTop">Price</label><br>
		  			<input type="text" id="price" value="" class="gap10x form-group form-control" name="price" message="price" placeholder="Enter price">
		  		</div>
					<button  class="submit" id="add-slots" name="add-slots"> Add
					</button><a href="/floors"><button class="submit"><i class="fa fa-angle-double-left" style="font-size:16px"></i> Previous</button></a>
		  	</div>
	    </div>
	</div>

</div>
</div>
</div>
</div>
</section>


@endsection

@section('scripts')
<script type="text/javascript" src="/js/addslots.js" ></script>

@endsection

@section('footer')
		@include('layouts.footer')
@endsection
