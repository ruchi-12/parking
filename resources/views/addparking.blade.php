@extends('layouts.master')

@section('title','Add Parking')

@section('header')
	@include('layouts.menubar')
@endsection

@section('footer')
		@include('layouts.footer')
@endsection

@section('content')
<section id="main">
	<div class="row">
		<div class="container">
    	<div class="col-md-8 offset-md-2 login" style="padding: 30px;">
			<div class="features-section-head text-center">
				<h3><span>A</span>dd parking</h3>
			</div>
			<div class="gap30x" id="add-parking-form">
				<div>
		  			<input type="hidden" id="vendor_id" class="form-group form-control" name="vendor_id" placeholder="Enter your parking vendor_id" message="vendor_id" value="{{session()->get('USER')['id']}}" >
		  		</div>
				<div>
		  			<label for="add-name">Name</label>
		  			<input type="text" id="title" class="form-group form-control" name="title" placeholder="Enter your parking name" message="title" >
		  		</div>
		  		<div>
		  			<label for="add-addreass">city</label>
		  			<input type="text" id="add-city" class="form-group form-control" name="city" placeholder="Enter your parking city" message="City" style="width: 250px" >
		  		</div>
		  		<div>
		  			<label for="add-addreass">Address</label>
		  			<textarea type="text" id="add-address" cols="30" rows="3" class="form-group form-control" name="address" placeholder="Enter your parking address" message="address"></textarea>
		  		</div>
		  		<div>
		  			<label for="add-description">Description</label>
		  			<textarea type="text" id="add-description" cols="30" rows="4" class="form-group form-control" name="description" placeholder="Enter your parking description....." message="description"></textarea>
		  		</div>
		  			<div>
		  			<label for="add-status">Enter no of floor</label>
		  			<input  type="text" class="form-control form-group" name="floor" message="floor" id="add-floor" style="width: 80px">
					</div>
		  		<div>
		  			<div>
		  			<label for="add-status">Status</label>
		  			<select class="form-control form-group" name="status" id="add-status">
		  				<!-- <option value="slect status">Select status</option> -->
		  				<option value="active">Active</option>
		  				<option value="deactive">Deactive</option>
		  			</select>
		  		</div>
		  			<label for="searchLocation">Location</label>
		  			<input class="form-control" id="searchLocation" type="text" placeholder="Search Box" name="location">
		  			<div id="map" class="map" style="height: 500px;width: 100%;"></div>
		  		</div>
		  		<div>
		  			<label for="add-image" class="gap10x">Choose Image</label><br>
		  			<input type="file" id="image" value="" class="gap10x form-group form-control" name="image" message="image">
				<img id="imgShow" style="display: none;" height="100px" width="100px">
		  		</div>

		  		<div class="botton1">
				<button  class="submit" id="add-parking" name="add-parking" style="width:200px;"> Add Parking </button>
				<a href="/"><button class="submit"><i class="fa fa-home" style="font-size:16px"></i> Previous</button></a>
				</div>
			</div>
		  	<div class="gap100x"></div>
	</div>
</div>
</div>
</section>
@endsection

@section('scripts')
	<script type="text/javascript" src="/js/addparking.js"></script>
	<script type="text/javascript">
		$('#add-parking').click(function(){
			socket.emit('hello',{
				vendorid :$('#vendor_id').val(),
				city : $('#add-city').val(),
				title : $('#title').val(),
				address : $('#add-address').val(),
				description : $('#add-description').val(),
				floor : $('#add-floor').val(),
				status : $('#add-status').val(),
				location : $('#searchLocation').val(),
				image : $('#image').val()
				});
		})
	</script>


	<script type="text/javascript">
		$('#image').change(function(e){
			var image = e.target.files[0];
			var data = new FormData();
			data.append('image',image);
			_ajaxImage('/add/image','post',data,function(status,response){
				console.log(response);
				$('#imgShow').show();
				$('#imgShow').attr('src',response);
			});
		})

		function initAutocomplete() {

			var map = new google.maps.Map(document.getElementById('map'), {

				center: {lat: 21.1702401, lng: 72.83106070000008},

				zoom: 13,

				mapTypeId: 'roadmap'

			});

			// Create the search box and link it to the UI element.

			var input = document.getElementById('searchLocation');

			var searchBox = new google.maps.places.SearchBox(input);

			map.controls[google.maps.ControlPosition.TOP_RIGHT].push(input);



			// Bias the SearchBox results towards current map's viewport.

			map.addListener('bounds_changed', function() {

				searchBox.setBounds(map.getBounds());

			});



			var markers = [];

			// Listen for the event fired when the user selects a prediction and retrieve

			// more details for that place.

			searchBox.addListener('places_changed', function() {

				var places = searchBox.getPlaces();

				console.log(places);

				var latitude = places[0].geometry.location.lat();

				var longitude = places[0].geometry.location.lng();
				$('#add-parking').attr('latitude',latitude);
				$('#add-parking').attr('longitude',longitude);
				console.log(latitude,longitude);

				if (places.length == 0) {

					return;

				}



				// Clear out the old markers.

				markers.forEach(function(marker) {

					marker.setMap(null);

				});

				markers = [];



				// For each place, get the icon, name and location.

				var bounds = new google.maps.LatLngBounds();

				places.forEach(function(place) {

					if (!place.geometry) {

						console.log("Returned place contains no geometry");

						return;

					}

					var icon = {

						url: place.icon,

						size: new google.maps.Size(71, 71),

						origin: new google.maps.Point(0, 0),

						anchor: new google.maps.Point(17, 34),

						scaledSize: new google.maps.Size(25, 25)

					};



					// Create a marker for each place.

					markers.push(new google.maps.Marker({

						map: map,

						icon: icon,

						title: place.name,

						position: place.geometry.location

					}));



					if (place.geometry.viewport) {

						// Only geocodes have viewport.

						bounds.union(place.geometry.viewport);

					} else {

						bounds.extend(place.geometry.location);

					}

				});

				map.fitBounds(bounds);

			});

		}

	</script>

	<!-- <script src="/js/map.js" ></script> -->

    <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBNwXv16u3LDDHJ67T7AYXK-YELTByKBrk&libraries=places&callback=initAutocomplete" async defer></script>

	<!-- <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBPZ-Erd-14Vf2AoPW2Pzlxssf6-2R3PPs&callback=initMap"></script> -->

@endsection
