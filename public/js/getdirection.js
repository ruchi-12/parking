
  var directionsDisplay = new google.maps.DirectionsRenderer();
   var directionsService = new google.maps.DirectionsService();
  var map;

  getLocation()
	.then(function(p){
    $data = $('#parking_id').val();
    _ajax('/direction','get',{parking_id:$data},null,function(status,response){
         $.each(response,function(i,direction){
          var start = new google.maps.LatLng(p.latitude,p.longitude);
          var end = new google.maps.LatLng(direction.latitude,direction.longitude);
          var mapOptions = {
            zoom:14,
            center:start
          };
          map = new google.maps.Map(document.getElementById('map-canvas'),mapOptions);

          directionsDisplay.setMap(map);

          function calculateRoute(){
            var request = {
              origin:start,
              destination:end,
              travelMode:'DRIVING'
            };

            directionsService.route(request,function(result,status){
              if(status =="OK"){
                directionsDisplay.setDirections(result);
              }
            });
          }
          document.getElementById('get').onclick = function(){
            calculateRoute();
  }
})
})
})
