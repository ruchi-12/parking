@extends('layouts.master')

@section('title','car wash')


@section('header')
	<div class="header" id="home">	
		@include('layouts.menubar')
		@include('layouts.banner')
	</div>
@endsection

@section('content')

<div class="products-section-grids">
				
	<div id="portfoliolist">
		<div class="portfolio card mix_all  data-cat="card" style="display: inline-block; opacity: 1;">
			<div class="portfolio-wrapper">		
				<a href="single.html" class="b-link-stripe b-animate-go  thickbox">
			     <img src="/images/car5.jpg" class="img-responsive" alt="" />
			     <div class="b-wrapper">
			     	<div class="atc">
			     		<p>Add To Cart</p>
			     	</div>
			     	<div class="clearfix"></div>
			     	<h2 class="b-animate b-from-left b-delay03 ">
			     		<img src="images/icon-eye.png" class="img-responsive go" alt=""/>
			     	</h2>
			  	</div>
			  </a>
			<div class="title">
				<div class="colors">
					<h4></h4>
				</div>
				<div class="main-price">
					<h3><span>Rs.</span>30</h3>
				</div>
				<div class="clearfix"></div>
			</div>
        </div>
	</div>
</div>				




@endsection

@section('footer')

	@include('layouts.footer')

@endsection
