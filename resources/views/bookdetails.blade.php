
@extends('layouts.master')

@section('title','car wash')


@section('header')
	<div class="header" id="home">	
		@include('layouts.menubar')
		@include('layouts.banner')
	</div>
@endsection


@section('content')
		<!-- start-single-page -->
	<!-- content -->
	<div class="container">
		<div class="dreamcrub">
			   	 <ul class="breadcrumbs">
				 
                    <li class="home">
                       <a href="index.html" title="Go to Home Page"><img src="images/home.png" alt=""/></a>&nbsp;
                       <span>&gt;</span>
                    </li>
                    <li>
                       Sales
                    </li>&nbsp;
                       <span>&gt;</span>
					<li>products</a></li>
                </ul>
                <ul class="previous">
                	<li><a href="index.html">Back to Previous Page</a></li>
                </ul>
                <div class="clearfix"></div>
			   </div>
			   </div>
	<!-- start content -->
<div class="women_main">
<div class="container">

			<div class="row single">
				<div class="col-md-9 span-single">
				  <div class="single_left">
					<div class="grid images_3_of_2">
						<ul id="etalage">
							<li>
								<a href="optionallink.html">
									<img class="etalage_thumb_image" src="images/pic2.jpg" class="img-responsive" />
									<img class="etalage_source_image" src="images/pic2.jpg" class="img-responsive" title="" />
								</a>
							</li>
							<li>
								<img class="etalage_thumb_image" src="images/pic2.jpg" class="img-responsive" />
								<img class="etalage_source_image" src="images/pic2.jpg" class="img-responsive" title="" />
							</li>
							<li>
								<img class="etalage_thumb_image" src="images/pic2.jpg" class="img-responsive"  />
								<img class="etalage_source_image" src="images/pic2.jpg"class="img-responsive"  />
							</li>
						    <li>
								<img class="etalage_thumb_image" src="images/pic2.jpg" class="img-responsive"  />
								<img class="etalage_source_image" src="images/pic2.jpg"class="img-responsive"  />
							</li>
						</ul>
						 <div class="clearfix"></div>		
				  </div>
				  <div class="desc1 span_3_of_2">
					<h3>product name here</h3>
					<p>$ 999 <a href="#">click for offer</a></p>
					<div class="det_nav">
						<h4>related products :</h4>
						<ul>
							<li><a href="#"><img src="images/pic-6.jpg" class="img-responsive" alt=""/></a></li>
							<li><a href="#"><img src="images/pic-9.jpg" class="img-responsive" alt=""/></a></li>
							<li><a href="#"><img src="images/pic-4.jpg" class="img-responsive" alt=""/></a></li>
							<li><a href="#"><img src="images/pic-10.jpg" class="img-responsive" alt=""/></a></li>
						</ul>
					</div>
			   	 </div>
          	    <div class="clearfix"></div>
          	   </div>
          	    <div class="single-bottom1">
					<h6>Details</h6>
					<p class="prod-desc">Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat. Ut wisi enim ad minim veniam, quis nostrud exerci tation ullamcorper suscipit lobortis nisl ut aliquip ex ea commodo consequat. Duis autem vel eum iriure dolor in hendrerit in vulputate velit esse molestie consequat, vel illum dolore eu feugiat nulla facilisis at vero eros et accumsan et iusto odio dignissim qui blandit praesent luptatum zzril delenit augue duis dolore te feugait nulla facilisi. Nam liber tempor cum soluta nobis eleifend option</p>
				</div>
				<div class="single-bottom2">
					<h6>Related Products</h6>
						<div class="product">
						   <div class="product-desc">
								<div class="product-img">
		                           <img src="images/pic-8.jpg" class="img-responsive " alt=""/>
		                       </div>
		                       <div class="prod1-desc">
		                           <h5><a class="product_link" href="#">Excepteur sint</a></h5>
		                           <p class="product_descr"> Vivamus ante lorem, eleifend nec interdum non, ullamcorper et arcu. Class aptent taciti sociosqu ad litora torquent per conubia nostra, per inceptos himenaeos. </p>									
							   </div>
							  <div class="clearfix"></div>
					      </div>
						  <div class="product_price">
								<span class="price-access">$597.51</span>								
								<button class="button1"><span>Add to cart</span></button>
		                  </div>
						 <div class="clearfix"></div>
				     </div>
				     <div class="product">
						   <div class="product-desc">
								<div class="product-img">
		                           <img src="images/pic-2.jpg" class="img-responsive " alt=""/>
		                       </div>
		                       <div class="prod1-desc">
		                           <h5><a class="product_link" href="#">Excepteur sint</a></h5>
		                           <p class="product_descr"> Vivamus ante lorem, eleifend nec interdum non, ullamcorper et arcu. Class aptent taciti sociosqu ad litora torquent per conubia nostra, per inceptos himenaeos. </p>									
							   </div>
							   <div class="clearfix"></div>
					      </div>
						  <div class="product_price">
								<span class="price-access">$597.51</span>								
								<button class="button1"><span>Add to cart</span></button>
		                  </div>
						 <div class="clearfix"></div>
				     </div>
					 <div class="product">
						   <div class="product-desc">
								<div class="product-img">
		                           <img src="images/pic-3.jpg" class="img-responsive " alt=""/>
		                       </div>
		                       <div class="prod1-desc">
		                           <h5><a class="product_link" href="#">Excepteur sint</a></h5>
		                           <p class="product_descr"> Vivamus ante lorem, eleifend nec interdum non, ullamcorper et arcu. Class aptent taciti sociosqu ad litora torquent per conubia nostra, per inceptos himenaeos. </p>									
							   </div>
							   <div class="clearfix"></div>
					      </div>
						  <div class="product_price">
								<span class="price-access">$597.51</span>								
								<button class="button1"><span>Add to cart</span></button>
		                  </div>
						 <div class="clearfix"></div>
				     </div>
		   	  </div>       		
	  </div>
	 
	  <div class="col-md-3 span_1_of_right">
	  <div class="w_nav1">
			<h4>All</h4>
			<ul>
				<li><a href="products.html">products</a></li>
				<li><a href="#">new arrivals</a></li>
				<li><a href="#">trends</a></li>
				<li><a href="#">Bages</a></li>
				<li><a href="#">shoes</a></li>
				<li><a href="#">sale</a></li>
			</ul>	
			<h3>filter by</h3>
		</div>
		
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
						    </div>
						</div>
				</section>
		       <section  class="sky-form">
					<h4>Price</h4>
						<div class="row row1 scroll-pane">
							<div class="col col-4">
								<label class="checkbox"><input type="checkbox" name="checkbox" checked=""><i></i>$50.00 and Under (30)</label>
							</div>
							<div class="col col-4">
								<label class="checkbox"><input type="checkbox" name="checkbox"><i></i>$100.00 and Under (30)</label>
								<label class="checkbox"><input type="checkbox" name="checkbox"><i></i>$200.00 and Under (30)</label>
								<label class="checkbox"><input type="checkbox" name="checkbox"><i></i>$300.00 and Under (30)</label>
								<label class="checkbox"><input type="checkbox" name="checkbox"><i></i>$400.00 and Under (30)</label>
							</div>
						</div>
		       </section>
		       <section  class="sky-form">
					<h4>Colors</h4>
						<div class="row row1 scroll-pane">
							<div class="col col-4">
								<label class="checkbox"><input type="checkbox" name="checkbox" checked=""><i></i>Red</label>
							</div>
							<div class="col col-4">
								<label class="checkbox"><input type="checkbox" name="checkbox"><i></i>Green</label>
								<label class="checkbox"><input type="checkbox" name="checkbox"><i></i>Black</label>
								<label class="checkbox"><input type="checkbox" name="checkbox"><i></i>Yellow</label>
								<label class="checkbox"><input type="checkbox" name="checkbox"><i></i>Orange</label>
							</div>
						</div>
		       </section>
		</div>
		 </div></div></div>
	<!-- end content -->
	<!-- content-section-ends -->
		<div class="footer">
		<div class="up-arrow">
			<a class="scroll" href="#home"><img src="images/up.png" alt="" /></a>
		</div>
			<div class="container">
				<div class="copyrights">
					<p>Copyright &copy; 2015 All rights reserved | Template by  <a href="http://w3layouts.com">  W3layouts</a></p>
				</div>
				<div class="footer-social-icons">
					<a href="#"><i class="fb"></i></a>
					<a href="#"><i class="tw"></i></a>
					<a href="#"><i class="in"></i></a>
					<a href="#"><i class="pt"></i></a>
				</div>
				  <div class="clearfix"></div>
			</div>
		</div>
@endsection

@section('footer')
	@include('layouts.footer')
@endsection
