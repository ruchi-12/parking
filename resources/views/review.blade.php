@extends('layouts.master')

@section('title','review')

@section('header')
	@include('layouts.menubar')
@endsection

@section('content')
<section id="main">
		<div class="container">
			<div class="features-section-head text-center">
				<h3><span>F</span>eedback</h3>
			</div>
				<div class="col-md-6 offset-md-3 login text-center">
					<div>
		  			<label for="name" class="labelTop">Name</label>
		  			<input type="text" name="name" placeholder="Enter your name" class="form-group form-control" id="name" message="name">
		  			</div>
					<div>
		  			<label for="review" class="labelTop">Review</label>
		  			<textarea type="text" id="review" cols="30" rows="4" class="form-group form-control" name="review" placeholder="Enter your parking review....." message="review"></textarea>
		  		</div>
		  		<div>
		  			<button class="btn1" id="submit">Submit</button>
		  		</div>
 				</div>
			</div>
</section>
@endsection

@section('scripts')
<script type="text/javascript" src="/js/review.js"></script>
@endsection
@section('footer')
@include('layouts.footer')
@endsection
