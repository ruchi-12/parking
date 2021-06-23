@extends('layouts.master')

@section('title','booking')


@section('header')
	<div class="header" id="home">	
		@include('layouts.menubar')
		@include('layouts.banner')
	</div>
@endsection


@section('content')		<!-- start Dresses-page -->
	<!-- content-section-starts -->
	<div class="container">
	<div class="dreamcrub">
			   	 <ul class="breadcrumbs">
				 
                    <li class="home">
                       <a href="index.html" title="Go to Home Page"><img src="images/home.png" alt=""/></a>&nbsp;
                       <span>&gt;</span>
                    </li>
                    <li>
                       Dresses
					    <span>&gt;</span>
                    </li><li>
         <span class="red">&nbsp;Clothes&nbsp;</span>
     </li>
                </ul>
                <ul class="previous">
                	<li><a href="index.html">Back to Previous Page</a></li>
                </ul>
                <div class="clearfix"></div>
			   </div>
			   </div>
			   <div class="container">
	   <div class="ft-ball">
		<div class="cont span_2_of_3">
		  <div class="mens-toolbar">
              <div class="sort">
               	<div class="sort-by">
		            <label>Sort By</label>
		            <select>
		                            <option value="">
		                    Popularity               </option>
		                            <option value="">
		                    Price : High to Low               </option>
		                            <option value="">
		                    Price : Low to High               </option>
		            </select>
		            <a href=""><img src="images/arrow2.gif" alt="" class="v-middle"></a>
               </div>
    		</div>
	          <div class="pager">   
	           <div class="limiter visible-desktop">
	            <label>Show</label>
	            <select>
	                            <option value="" selected="selected">
	                    9                </option>
	                            <option value="">
	                    15                </option>
	                            <option value="">
	                    30                </option>
	                        </select> per page        
	             </div>
	       		<ul class="dc_pagination dc_paginationA dc_paginationA06">
				    <li><a href="#" class="previous">Pages</a></li>
				    <li><a href="#">1</a></li>
				    <li><a href="#">2</a></li>
			  	</ul>
		   		<div class="clearfix"></div>
	    	</div>
     	    <div class="clearfix"></div>
	       </div>
			    <div class="box1">
				   <div class="col_1_of_single1 span_1_of_single1">
				     <div class="view1 view-fifth1">
				  	  <div class="top_box">
					  	<h3 class="m_1">Lorem ipsum dolor sit amet</h3>
					  	<p class="m_2">Lorem ipsum</p>
						<a href="bookdetails">
				         <div class="grid_img">
						   <div class="css3"><img src="/images/download image/download.jpg" alt=""/></div>
					          <div class="mask1">
	                       		<div class="info">Book</div>
			                  </div>
	                    </div>
                       <div class="price">$ 510</div>
					   </div>
					    </div></a>
						<div class="rtng">
					    <form action="" class="sky-form">
						     <fieldset>					
							   <section>
							     <div class="rating">
									<input type="radio" name="stars-rating" id="stars-rating-5">
									<label for="stars-rating-5"><i class="icon-star"></i></label>
									<input type="radio" name="stars-rating" id="stars-rating-4">
									<label for="stars-rating-4"><i class="icon-star"></i></label>
									<input type="radio" name="stars-rating" id="stars-rating-3">
									<label for="stars-rating-3"><i class="icon-star"></i></label>
									<input type="radio" name="stars-rating" id="stars-rating-2">
									<label for="stars-rating-2"><i class="icon-star"></i></label>
									<input type="radio" name="stars-rating" id="stars-rating-1">
									<label for="stars-rating-1"><i class="icon-star"></i></label><span class="rtng">(5)<span>
									<div class="clearfix"></div>
								 </div>
							  </section>
						    </fieldset>
						  </form>
						  </div>
						 <ul class="list2">
						  <li>
						  	<img src="images/plus.png" alt=""/>
						  	<ul class="icon1 sub-icon1 profile_img">
							  <li><a class="active-icon c1" href="single.html">Add To Bag </a>
								<ul class="sub-icon1 list">
									<li><h3>sed diam nonummy</h3><a href=""></a></li>
									<li><p>Lorem ipsum dolor sit amet, consectetuer  <a href="">adipiscing elit, sed diam</a></p></li>
								</ul>
							  </li>
							 </ul>
						   </li>
					     </ul>
			    	    <div class="clear"></div>
			    	</div>
				    <div class="col_1_of_single1 span_1_of_single1">
				     <div class="view1 view-fifth1">
				  	  <div class="top_box">
					  	<h3 class="m_1">Lorem ipsum dolor sit amet</h3>
					  	<p class="m_2">Lorem ipsum</p>
						<a href="single.html">
				         <div class="grid_img">
						   <div class="css3"><img src="/images/download image/download2.jpg" alt=""/></div>
					          <div class="mask1">
	                       		<div class="info">Book</div>
			                  </div>
	                    </div>
                       <div class="price">$ 510</div>
					   </div>
					    </div></a>
					   <div class="rtng">
					    <form action="" class="sky-form">
						     <fieldset>					
							   <section>
							     <div class="rating">
									<input type="radio" name="stars-rating" id="stars-rating-5">
									<label for="stars-rating-5"><i class="icon-star"></i></label>
									<input type="radio" name="stars-rating" id="stars-rating-4">
									<label for="stars-rating-4"><i class="icon-star"></i></label>
									<input type="radio" name="stars-rating" id="stars-rating-3">
									<label for="stars-rating-3"><i class="icon-star"></i></label>
									<input type="radio" name="stars-rating" id="stars-rating-2">
									<label for="stars-rating-2"><i class="icon-star"></i></label>
									<input type="radio" name="stars-rating" id="stars-rating-1">
									<label for="stars-rating-1"><i class="icon-star"></i></label><span class="rtng">(5)<span>
									<div class="clearfix"></div>
								 </div>
							  </section>
						    </fieldset>
						  </form>
						  </div>
						 <ul class="list2">
						  <li>
						  	<img src="images/plus.png" alt=""/>
						  	<ul class="icon1 sub-icon1 profile_img">
							  <li><a class="active-icon c1" href="single.html">Add To Bag </a>
								<ul class="sub-icon1 list">
									<li><h3>sed diam nonummy</h3><a href=""></a></li>
									<li><p>Lorem ipsum dolor sit amet, consectetuer  <a href="">adipiscing elit, sed diam</a></p></li>
								</ul>
							  </li>
							 </ul>
						   </li>
					     </ul>
			    	    <div class="clear"></div>
			    	</div>
				   <div class="col_1_of_single1 span_1_of_single1">
				     <div class="view1 view-fifth1">
				  	  <div class="top_box">
					  	<h3 class="m_1">Lorem ipsum dolor sit amet</h3>
					  	<p class="m_2">Lorem ipsum</p>
						<a href="single.html">
				         <div class="grid_img">
						   <div class="css3"><img src="/images/download image/download3.jpg" alt=""/></div>
					          <div class="mask1">
	                       		<div class="info">Book</div>
			                  </div>
	                    </div>
                       <div class="price">$ 510</div>
					   </div>
					    </div></a>
					   <div class="rtng">
					    <form action="" class="sky-form">
						     <fieldset>					
							   <section>
							     <div class="rating">
									<input type="radio" name="stars-rating" id="stars-rating-5">
									<label for="stars-rating-5"><i class="icon-star"></i></label>
									<input type="radio" name="stars-rating" id="stars-rating-4">
									<label for="stars-rating-4"><i class="icon-star"></i></label>
									<input type="radio" name="stars-rating" id="stars-rating-3">
									<label for="stars-rating-3"><i class="icon-star"></i></label>
									<input type="radio" name="stars-rating" id="stars-rating-2">
									<label for="stars-rating-2"><i class="icon-star"></i></label>
									<input type="radio" name="stars-rating" id="stars-rating-1">
									<label for="stars-rating-1"><i class="icon-star"></i></label><span class="rtng">(5)<span>
									<div class="clearfix"></div>
								 </div>
							  </section>
						    </fieldset>
						  </form>
						  </div>
						 <ul class="list2">
						  <li>
						  	<img src="images/plus.png" alt=""/>
						  	<ul class="icon1 sub-icon1 profile_img">
							  <li><a class="active-icon c1" href="single.html">Add To Bag </a>
								<ul class="sub-icon1 list">
									<li><h3>sed diam nonummy</h3><a href=""></a></li>
									<li><p>Lorem ipsum dolor sit amet, consectetuer  <a href="">adipiscing elit, sed diam</a></p></li>
								</ul>
							  </li>
							 </ul>
						   </li>
					     </ul>
			    	    <div class="clearfix"></div>
			    	</div>
				  <div class="clearfix"></div>
			  </div>
			  <div class="box1">
				 <div class="col_1_of_single1 span_1_of_single1">
				     <div class="view1 view-fifth1">
				  	  <div class="top_box">
					  	<h3 class="m_1">Lorem ipsum dolor sit amet</h3>
					  	<p class="m_2">Lorem ipsum</p>
						<a href="single.html">
				         <div class="grid_img">
						   <div class="css3"><img src="/images/download image/images.jpg" alt=""/></div>
					          <div class="mask1">
	                       		<div class="info">Book</div>
			                  </div>
	                    </div>
                       <div class="price">$ 510</div>
					   </div>
					    </div></a>
					   <div class="rtng">
					    <form action="" class="sky-form">
						     <fieldset>					
							   <section>
							     <div class="rating">
									<input type="radio" name="stars-rating" id="stars-rating-5">
									<label for="stars-rating-5"><i class="icon-star"></i></label>
									<input type="radio" name="stars-rating" id="stars-rating-4">
									<label for="stars-rating-4"><i class="icon-star"></i></label>
									<input type="radio" name="stars-rating" id="stars-rating-3">
									<label for="stars-rating-3"><i class="icon-star"></i></label>
									<input type="radio" name="stars-rating" id="stars-rating-2">
									<label for="stars-rating-2"><i class="icon-star"></i></label>
									<input type="radio" name="stars-rating" id="stars-rating-1">
									<label for="stars-rating-1"><i class="icon-star"></i></label><span class="rtng">(5)<span>
									<div class="clearfix"></div>
								 </div>
							  </section>
						    </fieldset>
						  </form>
						  </div>
						 <ul class="list2">
						  <li>
						  	<img src="images/plus.png" alt=""/>
						  	<ul class="icon1 sub-icon1 profile_img">
							  <li><a class="active-icon c1" href="single.html">Add To Bag </a>
								<ul class="sub-icon1 list">
									<li><h3>sed diam nonummy</h3><a href=""></a></li>
									<li><p>Lorem ipsum dolor sit amet, consectetuer  <a href="">adipiscing elit, sed diam</a></p></li>
								</ul>
							  </li>
							 </ul>
						   </li>
					     </ul>
			    	    <div class="clearfix"></div>
			    	</div>
				    <div class="col_1_of_single1 span_1_of_single1">
				     <div class="view1 view-fifth1">
				  	  <div class="top_box">
					  	<h3 class="m_1">Lorem ipsum dolor sit amet</h3>
					  	<p class="m_2">Lorem ipsum</p>
						<a href="single.html">
				         <div class="grid_img">
						   <div class="css3"><img src="/images/download image/parking_02.jpg" alt=""/></div>
					          <div class="mask1">
	                       		<div class="info">Book</div>
			                  </div>
	                    </div>
                       <div class="price">$ 510</div>
					   </div>
					    </div></a>
						<div class="rtng">
					    <form action="" class="sky-form">
						     <fieldset>					
							   <section>
							     <div class="rating">
									<input type="radio" name="stars-rating" id="stars-rating-5">
									<label for="stars-rating-5"><i class="icon-star"></i></label>
									<input type="radio" name="stars-rating" id="stars-rating-4">
									<label for="stars-rating-4"><i class="icon-star"></i></label>
									<input type="radio" name="stars-rating" id="stars-rating-3">
									<label for="stars-rating-3"><i class="icon-star"></i></label>
									<input type="radio" name="stars-rating" id="stars-rating-2">
									<label for="stars-rating-2"><i class="icon-star"></i></label>
									<input type="radio" name="stars-rating" id="stars-rating-1">
									<label for="stars-rating-1"><i class="icon-star"></i></label><span class="rtng">(5)<span>
									<div class="clearfix"></div>
								 </div>
							  </section>
						    </fieldset>
						  </form>
						  </div>
						 <ul class="list2">
						  <li>
						  	<img src="images/plus.png" alt=""/>
						  	<ul class="icon1 sub-icon1 profile_img">
							  <li><a class="active-icon c1" href="single.html">Add To Bag </a>
								<ul class="sub-icon1 list">
									<li><h3>sed diam nonummy</h3><a href=""></a></li>
									<li><p>Lorem ipsum dolor sit amet, consectetuer  <a href="">adipiscing elit, sed diam</a></p></li>
								</ul>
							  </li>
							 </ul>
						   </li>
					     </ul>
			    	    <div class="clear"></div>
			    	</div>
				    <div class="col_1_of_single1 span_1_of_single1">
				     <div class="view1 view-fifth1">
				  	  <div class="top_box">
					  	<h3 class="m_1">Lorem ipsum dolor sit amet</h3>
					  	<p class="m_2">Lorem ipsum</p>
						<a href="single.html">
				         <div class="grid_img">
						   <div class="css3"><img src="/images/download image/download4.jpg" alt=""/></div>
					          <div class="mask1">
	                       		<div class="info">Book</div>
			                  </div>
	                    </div>
                       <div class="price">$ 510</div>
					   </div>
					    </div></a>
					   <div class="rtng">
					    <form action="" class="sky-form">
						     <fieldset>					
							   <section>
							     <div class="rating">
									<input type="radio" name="stars-rating" id="stars-rating-5">
									<label for="stars-rating-5"><i class="icon-star"></i></label>
									<input type="radio" name="stars-rating" id="stars-rating-4">
									<label for="stars-rating-4"><i class="icon-star"></i></label>
									<input type="radio" name="stars-rating" id="stars-rating-3">
									<label for="stars-rating-3"><i class="icon-star"></i></label>
									<input type="radio" name="stars-rating" id="stars-rating-2">
									<label for="stars-rating-2"><i class="icon-star"></i></label>
									<input type="radio" name="stars-rating" id="stars-rating-1">
									<label for="stars-rating-1"><i class="icon-star"></i></label><span class="rtng">(5)<span>
									<div class="clearfix"></div>
								 </div>
							  </section>
						    </fieldset>
						  </form>
						  </div>
						 <ul class="list2">
						  <li>
						  	<img src="images/plus.png" alt=""/>
						  	<ul class="icon1 sub-icon1 profile_img">
							  <li><a class="active-icon c1" href="single.html">Add To Bag </a>
								<ul class="sub-icon1 list">
									<li><h3>sed diam nonummy</h3><a href=""></a></li>
									<li><p>Lorem ipsum dolor sit amet, consectetuer  <a href="">adipiscing elit, sed diam</a></p></li>
								</ul>
							  </li>
							 </ul>
						   </li>
					     </ul>
			    	    <div class="clearfix"></div>
			    	</div>
				  <div class="clearfix"></div>
			  </div>
			  <div class="box1">
				    <div class="col_1_of_single1 span_1_of_single1">
				     <div class="view1 view-fifth1">
				  	  <div class="top_box">
					  	<h3 class="m_1">Lorem ipsum dolor sit amet</h3>
					  	<p class="m_2">Lorem ipsum</p>
						<a href="single.html">
				         <div class="grid_img">
						   <div class="css3"><img src="/images/download image/download5.jpg" alt=""/></div>
					          <div class="mask1">
	                       		<div class="info">Book</div>
			                  </div>
	                    </div>
                       <div class="price">$ 510</div>
					   </div>
					    </div></a>
					   <div class="rtng">
					    <form action="" class="sky-form">
						     <fieldset>					
							   <section>
							     <div class="rating">
									<input type="radio" name="stars-rating" id="stars-rating-5">
									<label for="stars-rating-5"><i class="icon-star"></i></label>
									<input type="radio" name="stars-rating" id="stars-rating-4">
									<label for="stars-rating-4"><i class="icon-star"></i></label>
									<input type="radio" name="stars-rating" id="stars-rating-3">
									<label for="stars-rating-3"><i class="icon-star"></i></label>
									<input type="radio" name="stars-rating" id="stars-rating-2">
									<label for="stars-rating-2"><i class="icon-star"></i></label>
									<input type="radio" name="stars-rating" id="stars-rating-1">
									<label for="stars-rating-1"><i class="icon-star"></i></label><span class="rtng">(5)<span>
									<div class="clearfix"></div>
								 </div>
							  </section>
						    </fieldset>
						  </form>
						  </div>
						 <ul class="list2">
						  <li>
						  	<img src="images/plus.png" alt=""/>
						  	<ul class="icon1 sub-icon1 profile_img">
							  <li><a class="active-icon c1" href="single.html">Add To Bag </a>
								<ul class="sub-icon1 list">
									<li><h3>sed diam nonummy</h3><a href=""></a></li>
									<li><p>Lorem ipsum dolor sit amet, consectetuer  <a href="">adipiscing elit, sed diam</a></p></li>
								</ul>
							  </li>
							 </ul>
						   </li>
					     </ul>
			    	    <div class="clearfix"></div>
			    	</div>
				    <div class="col_1_of_single1 span_1_of_single1">
				     <div class="view1 view-fifth1">
				  	  <div class="top_box">
					  	<h3 class="m_1">Lorem ipsum dolor sit amet</h3>
					  	<p class="m_2">Lorem ipsum</p>
						<a href="single.html">
				         <div class="grid_img">
						   <div class="css3"><img src="/images/download image/download6.jpg" alt=""/></div>
					          <div class="mask1">
	                       		<div class="info">Book</div>
			                  </div>
	                    </div>
                       <div class="price">$ 510</div>
					   </div>
					    </div></a>
					   <div class="rtng">
					    <form action="" class="sky-form">
						     <fieldset>					
							   <section>
							     <div class="rating">
									<input type="radio" name="stars-rating" id="stars-rating-5">
									<label for="stars-rating-5"><i class="icon-star"></i></label>
									<input type="radio" name="stars-rating" id="stars-rating-4">
									<label for="stars-rating-4"><i class="icon-star"></i></label>
									<input type="radio" name="stars-rating" id="stars-rating-3">
									<label for="stars-rating-3"><i class="icon-star"></i></label>
									<input type="radio" name="stars-rating" id="stars-rating-2">
									<label for="stars-rating-2"><i class="icon-star"></i></label>
									<input type="radio" name="stars-rating" id="stars-rating-1">
									<label for="stars-rating-1"><i class="icon-star"></i></label><span class="rtng">(5)<span>
									<div class="clearfix"></div>
								 </div>
							  </section>
						    </fieldset>
						  </form>
						  </div>
						 <ul class="list2">
						  <li>
						  	<img src="images/plus.png" alt=""/>
						  	<ul class="icon1 sub-icon1 profile_img">
							  <li><a class="active-icon c1" href="single.html">Add To Bag </a>
								<ul class="sub-icon1 list">
									<li><h3>sed diam nonummy</h3><a href=""></a></li>
									<li><p>Lorem ipsum dolor sit amet, consectetuer  <a href="">adipiscing elit, sed diam</a></p></li>
								</ul>
							  </li>
							 </ul>
						   </li>
					     </ul>
			    	    <div class="clearfix"></div>
			    	</div>
				    <div class="col_1_of_single1 span_1_of_single1">
				     <div class="view1 view-fifth1">
				  	  <div class="top_box">
					  	<h3 class="m_1">Lorem ipsum dolor sit amet</h3>
					  	<p class="m_2">Lorem ipsum</p>
						<a href="single.html">
				         <div class="grid_img">
						   <div class="css3"><img src="/images/download image/download7.jpg" alt=""/></div>
					          <div class="mask1">
	                       		<div class="info">Book</div>
			                  </div>
	                    </div>
                       <div class="price">$ 510</div>
					   </div>
					    </div></a>
					   <div class="rtng">
					    <form action="" class="sky-form">
						     <fieldset>					
							   <section>
							     <div class="rating">
									<input type="radio" name="stars-rating" id="stars-rating-5">
									<label for="stars-rating-5"><i class="icon-star"></i></label>
									<input type="radio" name="stars-rating" id="stars-rating-4">
									<label for="stars-rating-4"><i class="icon-star"></i></label>
									<input type="radio" name="stars-rating" id="stars-rating-3">
									<label for="stars-rating-3"><i class="icon-star"></i></label>
									<input type="radio" name="stars-rating" id="stars-rating-2">
									<label for="stars-rating-2"><i class="icon-star"></i></label>
									<input type="radio" name="stars-rating" id="stars-rating-1">
									<label for="stars-rating-1"><i class="icon-star"></i></label><span class="rtng">(5)<span>
									<div class="clearfix"></div>
								 </div>
							  </section>
						    </fieldset>
						  </form>
						  </div>
						 <ul class="list2">
						  <li>
						  	<img src="images/plus.png" alt=""/>
						  	<ul class="icon1 sub-icon1 profile_img">
							  <li><a class="active-icon c1" href="single.html">Add To Bag </a>
								<ul class="sub-icon1 list">
									<li><h3>sed diam nonummy</h3><a href=""></a></li>
									<li><p>Lorem ipsum dolor sit amet, consectetuer  <a href="">adipiscing elit, sed diam</a></p></li>
								</ul>
							  </li>
							 </ul>
						   </li>
					     </ul>
			    	    <div class="clearfix"></div>
			    	</div>
				  <div class="clearfix"></div>
			  </div>
			  <div class="box1">
				   <div class="col_1_of_single1 span_1_of_single1">
				     <div class="view1 view-fifth1">
				  	  <div class="top_box">
					  	<h3 class="m_1">Lorem ipsum dolor sit amet</h3>
					  	<p class="m_2">Lorem ipsum</p>
						<a href="single.html">
				         <div class="grid_img">
						   <div class="css3"><img src="/images/download image/download8.jpg" alt=""/></div>
					          <div class="mask1">
	                       		<div class="info">Book</div>
			                  </div>
	                    </div>
                       <div class="price">$ 510</div>
					   </div>
					    </div></a>
					   <div class="rtng">
					    <form action="" class="sky-form">
						     <fieldset>					
							   <section>
							     <div class="rating">
									<input type="radio" name="stars-rating" id="stars-rating-5">
									<label for="stars-rating-5"><i class="icon-star"></i></label>
									<input type="radio" name="stars-rating" id="stars-rating-4">
									<label for="stars-rating-4"><i class="icon-star"></i></label>
									<input type="radio" name="stars-rating" id="stars-rating-3">
									<label for="stars-rating-3"><i class="icon-star"></i></label>
									<input type="radio" name="stars-rating" id="stars-rating-2">
									<label for="stars-rating-2"><i class="icon-star"></i></label>
									<input type="radio" name="stars-rating" id="stars-rating-1">
									<label for="stars-rating-1"><i class="icon-star"></i></label><span class="rtng">(5)<span>
									<div class="clearfix"></div>
								 </div>
							  </section>
						    </fieldset>
						  </form>
						  </div>
						 <ul class="list2">
						  <li>
						  	<img src="images/plus.png" alt=""/>
						  	<ul class="icon1 sub-icon1 profile_img">
							  <li><a class="active-icon c1" href="single.html">Add To Bag </a>
								<ul class="sub-icon1 list">
									<li><h3>sed diam nonummy</h3><a href=""></a></li>
									<li><p>Lorem ipsum dolor sit amet, consectetuer  <a href="">adipiscing elit, sed diam</a></p></li>
								</ul>
							  </li>
							 </ul>
						   </li>
					     </ul>
			    	    <div class="clearfix"></div>
			    	</div>
				    <div class="col_1_of_single1 span_1_of_single1">
				     <div class="view1 view-fifth1">
				  	  <div class="top_box">
					  	<h3 class="m_1">Lorem ipsum dolor sit amet</h3>
					  	<p class="m_2">Lorem ipsum</p>
						<a href="single.html">
				         <div class="grid_img">
						   <div class="css3"><img src="/images/download image/download9.jpg" alt=""/></div>
					          <div class="mask1">
	                       		<div class="info">Book</div>
			                  </div>
	                    </div>
                       <div class="price">$ 510</div>
					   </div>
					    </div></a>
					   <div class="rtng">
					    <form action="" class="sky-form">
						     <fieldset>					
							   <section>
							     <div class="rating">
									<input type="radio" name="stars-rating" id="stars-rating-5">
									<label for="stars-rating-5"><i class="icon-star"></i></label>
									<input type="radio" name="stars-rating" id="stars-rating-4">
									<label for="stars-rating-4"><i class="icon-star"></i></label>
									<input type="radio" name="stars-rating" id="stars-rating-3">
									<label for="stars-rating-3"><i class="icon-star"></i></label>
									<input type="radio" name="stars-rating" id="stars-rating-2">
									<label for="stars-rating-2"><i class="icon-star"></i></label>
									<input type="radio" name="stars-rating" id="stars-rating-1">
									<label for="stars-rating-1"><i class="icon-star"></i></label><span class="rtng">(5)<span>
									<div class="clearfix"></div>
								 </div>
							  </section>
						    </fieldset>
						  </form>
						  </div>
						 <ul class="list2">
						  <li>
						  	<img src="images/plus.png" alt=""/>
						  	<ul class="icon1 sub-icon1 profile_img">
							  <li><a class="active-icon c1" href="single.html">Add To Bag </a>
								<ul class="sub-icon1 list">
									<li><h3>sed diam nonummy</h3><a href=""></a></li>
									<li><p>Lorem ipsum dolor sit amet, consectetuer  <a href="">adipiscing elit, sed diam</a></p></li>
								</ul>
							  </li>
							 </ul>
						   </li>
					     </ul>
			    	    <div class="clearfix"></div>
			    	</div>
				   <div class="col_1_of_single1 span_1_of_single1">
				     <div class="view1 view-fifth1">
				  	  <div class="top_box">
					  	<h3 class="m_1">Lorem ipsum dolor sit amet</h3>
					  	<p class="m_2">Lorem ipsum</p>
						<a href="single.html">
				         <div class="grid_img">
						   <div class="css3"><img src="/images/download image/download10.jpg" alt=""/></div>
					          <div class="mask1">
	                       		<div class="info">Book</div>
			                  </div>
	                    </div>
                       <div class="price">$ 510</div>
					   </div>
					    </div></a>
					   <div class="rtng">
					    <form action="" class="sky-form">
						     <fieldset>					
							   <section>
							     <div class="rating">
									<input type="radio" name="stars-rating" id="stars-rating-5">
									<label for="stars-rating-5"><i class="icon-star"></i></label>
									<input type="radio" name="stars-rating" id="stars-rating-4">
									<label for="stars-rating-4"><i class="icon-star"></i></label>
									<input type="radio" name="stars-rating" id="stars-rating-3">
									<label for="stars-rating-3"><i class="icon-star"></i></label>
									<input type="radio" name="stars-rating" id="stars-rating-2">
									<label for="stars-rating-2"><i class="icon-star"></i></label>
									<input type="radio" name="stars-rating" id="stars-rating-1">
									<label for="stars-rating-1"><i class="icon-star"></i></label><span class="rtng">(5)<span>
									<div class="clearfix"></div>
								 </div>
							  </section>
						    </fieldset>
						  </form>
						  </div>
						 <ul class="list2">
						  <li>
						  	<img src="images/plus.png" alt=""/>
						  	<ul class="icon1 sub-icon1 profile_img">
							  <li><a class="active-icon c1" href="single.html">Add To Bag </a>
								<ul class="sub-icon1 list">
									<li><h3>sed diam nonummy</h3><a href=""></a></li>
									<li><p>Lorem ipsum dolor sit amet, consectetuer  <a href="">adipiscing elit, sed diam</a></p></li>
								</ul>
							  </li>
							 </ul>
						   </li>
					     </ul>
			    	    <div class="clearfix"></div>
			    	</div>
				  <div class="clearfix"></div>
			  </div>
			  </div>
     	    <div class="rsidebar span_1_of_left">
				   <section  class="sky-form">
				   <div class="product_right">
     			<h3 class="m_2">Categories</h3>
     			    <select class="dropdown" tabindex="10" data-settings='{"wrapperClass":"metro"}'>
            			<option value="0">New</option>	
						<option value="1">tempor</option>
						<option value="2">congue</option>
						<option value="3">mazim </option>
						<option value="4">mutationem</option>
						<option value="5">hendrerit </option>
		           </select>
				   <select class="dropdown" tabindex="50" data-settings='{"wrapperClass":"metro"}'>
						<option value="1">Designers</option>
						<option value="2">Sub Category1</option>
						<option value="3">Sub Category2</option>
						<option value="4">Sub Category3</option>
			       </select>
				   <select class="dropdown" tabindex="8" data-settings='{"wrapperClass":"metro"}'>
						<option value="1">Women</option>
						<option value="2">Sub Category1</option>
						<option value="3">Sub Category2</option>
						<option value="4">Sub Category3</option>
			       </select>
			       <select class="dropdown" tabindex="8" data-settings='{"wrapperClass":"metro"}'>
						<option value="1">Men</option>
						<option value="2">Sub Category1</option>
						<option value="3">Sub Category2</option>
						<option value="4">Sub Category3</option>
			       </select>
			       <select class="dropdown" tabindex="8" data-settings='{"wrapperClass":"metro"}'>
						<option value="1">Clearance</option>
						<option value="2">Sub Category1</option>
						<option value="3">Sub Category2</option>
						<option value="4">Sub Category3</option>
			       </select>
</div>
                   	  <h4>Occasion</h4>
						<div class="row row1 scroll-pane">
							<div class="col col-4">
								<label class="checkbox"><input type="checkbox" name="checkbox" checked=""><i></i>Athletic (20)</label>
							</div>
							<div class="col col-4">
								<label class="checkbox"><input type="checkbox" name="checkbox"><i></i>Athletic Shoes (48)</label>
								<label class="checkbox"><input type="checkbox" name="checkbox"><i></i>Casual (45)</label>
								<label class="checkbox"><input type="checkbox" name="checkbox"><i></i>Casual (45)</label>
								<label class="checkbox"><input type="checkbox" name="checkbox"><i></i>Other (1)</label>
						    </div>
						 </div>
					 <h4>Styles</h4>
						<div class="row row1 scroll-pane">
							<div class="col col-4">
								<label class="checkbox"><input type="checkbox" name="checkbox" checked=""><i></i>Athletic (20)</label>
							</div>
							<div class="col col-4">
								<label class="checkbox"><input type="checkbox" name="checkbox"><i></i>Ballerina (5)</label>
								<label class="checkbox"><input type="checkbox" name="checkbox"><i></i>Pumps (7)</label>
								<label class="checkbox"><input type="checkbox" name="checkbox"><i></i>High Tops (2)</label>
								<label class="checkbox"><input type="checkbox" name="checkbox"><i></i>Other (1)</label>
>>>>>>> 56ea2356f9440ca9ac73c9a0fa7854798eb51724
						    </div>
				        </div>
			       		<div class="price">$ 510</div>
						</a>
			</div>
		</div>
<<<<<<< HEAD
</div>

</div>

@endsection
@section('scripts')
		
		<script type="text/javascript" src="/js/login.js"></script>
		
@endsection
=======
			  <div class="clearfix"></div>
		   </div>
	</div>
	
@endsection

@section('footer')
	@include('layouts.footer')
@endsection

>>>>>>> 56ea2356f9440ca9ac73c9a0fa7854798eb51724
