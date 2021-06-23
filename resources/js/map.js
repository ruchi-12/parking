<script type="text/javascript">
function initAutocomplete() {

			var map = new google.maps.Map(document.getElementById('map'), {

				center: {lat: 21.1702401, lng: 72.83106070000008},

				zoom: 13,

				mapTypeId: 'roadmap'

			});

			// Create the search box and link it to the UI element.

			var input = document.getElementById('searchLocation');

			var searchBox = new google.maps.places.SearchBox(input);

			map.controls[google.maps.ControlPosition.TOP_LEFT].push(input);



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

	<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyDS3CWrKuJ3hsn0Oro40tY8quMa__ks8Z4&libraries=places&callback=initAutocomplete" async defer></script>
