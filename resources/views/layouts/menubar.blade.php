<div class="top-header" id="home" style="padding-top:0px;">
			<div class="container">

					<div class="row">
					<div class="col-md-2">
						<div class="logo" style="padding-top:20px;">
							<a href="index.html"><img src="{{ asset('/images/logo1.png') }}" alt="logo" style="width: auto;height: 30px"></a>
							<strong><div style="color:white;align:center;font-size:10px;">SMPS</div></strong>
						</div>
					</div>
					<div class="col-md-10" style="margin-top:35px;" >
						<ul class="nav">
							<li class="active"><a href="{{ asset('/') }}">Home</a></li>
							<li class="dropdown1"><a data-toggle="modal" data-target="#myModal">How it work</a>
							</li>
							<li class="dropdown1"><a href="{{ asset('/aboutus') }}">About Us</a>
									<!-- <ul class="dropdown2">
											<li><a href="products.html">prise guide</a></li>
											<li><a href="products.html">reservations</a></li>
								<li><a href="products.html">our benifits</a></li>
								<li><a href="DisplayParkingDetails">ParkingDetails</a></li>
									</ul> -->
							</li>
							<li><a href="contact">Contact US</a></li>
							@if(session()->has('USER'))
									@if(session()->get('USER')['role']=="customer")
										<li><a href="{{ asset('/customer') }}">Search Parking</a>
									@endif
										<div class="clearfix"></div>
									</li>
									@if(session()->get('USER')['role']=="customer")
										<li><a href="{{ asset('/review') }}">Review</a></li>
									@endif
							@endif
							<div class="clearfix"></div>

							@if(session()->has('USER'))
								@if(session()->get('USER')['role'] == "vendor")
									<li class="dropdown1"><a style="text-decoration: none;" class="fa fa-bell" aria-hidden="true" href="#"><span class="badge" id="notification"> 0 </span></a>
										<ul class="dropdown2">
											<li id="message" style="background-color: white;padding:20px; width: 300px;"><font style="color: black;size: 20px;"></font></li>
										</ul>
									</li>
								@endif
								<li class="dropdown1"><a href="#"> {{ session()->get('USER')['name'] }} </a>
									<ul class="dropdown2">

										@if(session()->get('USER')['role']=="customer")
											<li><a href="{{ asset('/usersorder') }}">My Order</a></li>
										@endif

										<li><a href="{{ asset('/password/change') }}">Change Password</a></li>
										<li><a href="{{ asset('/logout') }}">logout</a></li>
										<li><a href="{{ asset('/profile/update') }}">Profile Update</a></li>

										@if(session()->get('USER')['role']=="vendor")

										<li><a href="{{ asset('/add/parking') }}">Add Building</a></li>
										<li><a href="{{ asset('/DisplayParkingDetails') }}">My parking</a></li>
										<li><a href="{{ asset('/floors') }}">Add slots</a></li>

										@endif
									</ul>
								</li>
									@if(session()->has('USER') && session()->get('USER')['profile'])
									<li>
											<img class="img-xs rounded-circle" src="{{ session()->get('USER')['profile'] }}" alt="Profile image" height="40px" width="40px">
									</li>
										@endif
									</ul>
							</li>
							@else
								<a href="login"><button type="button" class=" btn-transparent btn-rounded btn-large" style="width:200px;marign-top:-5px;">Login / Register</button></a>
							@endif
	            </ul>
	          </li>

	     <div class="clearfix"></div>

      	</ul>

	</div>
 	</div>
 </div>
</div>
<div class="modal fade" id="myModal" role="dialog">
<div class="modal-dialog modal-lg">
<div class="modal-content" >
		<div class="features-section-head text-center">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal">&times;</button>
        </div>
        <div class="modal-body">
						<div  class="animated bounceInDown">
							<div class="row" style="padding:10px;">
						   <div class="col-md-6">
									<h2>1.Find location!</h2>
									<div>
										<p><small>find parking where you want to park.</small></p>
									</div>
									</div>
									<div class="col-md-6">
									<li><img class="rounded-circle" src="{{ asset('/images/map.jpg') }}"  height="150px" width="150px" style="border: 2px solid #014d7a;	">
								</div>
					</div>
				</div>
				<div  class="animated1 bounceInDown "  >
					<div class="row" style="padding:10px;">
							<div class="col-md-6">
							<h2>2.Compare, book!</h2>
							<div>
								<p><small>See prices, distance, customer reviews...</small></p>
							</div>
							</div>
							<div class="col-md-6 ">
							<li><img class="rounded-circle" src="{{ asset('/images/2.jpg') }}"  height="150px" width="150px" style="border: 2px solid #014d7a;	">
						</div>
				</div>
			</div>
			<div  class="animated1 bounceInDown "  >
				<div class="row" style="padding:10px;">
						<div class="col-md-6">
						<h2>3.And park!</h2>
						<div>
							<p><small>Guaranteed place upon arrival, just show your booking in the car park.</small></p>
						</div>
						</div>
						<div class="col-md-6 ">
						<li><img class="rounded-circle" src="{{ asset('/images/3.jpg') }}"  height="150px" width="150px" style="border: 2px solid #014d7a;	">
					</div>
			</div>
		</div>
					</div>
        </div>
			</div>
      </div>

    </div>
  </div>
