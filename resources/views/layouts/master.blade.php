<!DOCTYPE html>
<html >
<head>
<title> @yield('title')  :: Parking Hub</title>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<meta name="csrf-token" content="{{ csrf_token() }}">
<link rel="stylesheet" href="path/to/font-awesome/css/font-awesome.min.css">
<link href="{{ asset('/css/bootstrap.css') }}" rel='stylesheet' type='text/css'/>

<link href="{{ asset('/css/style.css') }}" rel="stylesheet" type="text/css" media="all" />
<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.2/css/all.css" integrity="sha384-fnmOCqbTlWIlj8LyTjo7mOUStjsKC4pOpQbqyi7RrhN7udi9RwhKkMHpvLbHG9Sr" crossorigin="anonymous">
<link href='http://fonts.googleapis.com/css?family=Lato:100,300,400,700,900,100italic,300italic,400italic,700italic,900italic' rel='stylesheet' type='text/css'>

<link href="{{ asset('/css/nav.css') }}" rel="stylesheet" type="text/css" media="all"/>
<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.1/css/all.css" integrity="sha384-50oBUHEmvpQ+1lW4y57PTFmhCaXp0ML5d60M1M7uH2+nqUivzIebhndOJK28anvf" crossorigin="anonymous">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/3.7.0/animate.min.css">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">

<link rel="stylesheet" type="text/css" href="https://cdn.jsdelivr.net/npm/daterangepicker/daterangepicker.css" />
<link rel="stylesheet" type="text/css" media="screen"
     href="http://tarruda.github.com/bootstrap-datetimepicker/assets/css/bootstrap-datetimepicker.min.css">

<link href="css/hover-min.css" rel="stylesheet">


<style type="text/css">

	#loader {
    position: fixed;
    left: 0px;
    top: 0px;
    width: 100%;
    height: 100%;
    z-index: 9999;
    background: url('images/car.gif') 50% 50% no-repeat rgb(260,260,260);
    opacity: .7;
}
body{
  background: #f2f2f2;
  font-family: 'Open Sans', sans-serif;
}
.img_section figure img {
        transform: scale(1);
        transition: .3s ease-in-out;
        height: 300;
        width: 200;
      }
    .img_section figure:hover img {
      transform: scale(1.3);
    }
    #map-canvas {
height: 500px;
width: 100%;
margin: 0px;
padding: 0px
}

</style>

@section('header')

	@include('layouts.menubar')

@endsection

@yield('css')

</head>
	<body>
		<!-- <div id="loader"></div> -->
		<!-- Menu -->

		@yield('header')

		<!-- End Menu -->


		<div class="content">

			<!-- Start Content  -->

				@yield('content')

			<!-- End Content -->

		</div>
		<!-- Footer -->
  @yield('footer')

		<!-- End Footer -->

	</body>  <!-- script-for-portfolio -->

	<script src="https://code.jquery.com/jquery-3.2.1.min.js"></script>

	<!-- Sockets -->

	<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/socket.io/2.2.0/socket.io.js"></script>


	<script type="text/javascript">

		var socket = io.connect('http://192.168.43.32:4000');

/*		socket.on('welcomeMessage',function(data){
			alert(data);
		});


		socket.on('newUser',function(msg){
			alert(msg)
		});

		socket.on('timeUp',function(data){
			alert(data.msg + ' ' + data.date);
		});

*/
    // socket.on('count',function(count){
    //   $('#count').text(count);

    socket.on('message',function(data){
      $('#message').text(data);
    });
    
		socket.on('totalUsers',function(totalUsers){
			$('#totalUsers').text(totalUsers);
		});

		socket.emit('sfsd','sasdas');



	</script>

	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>

	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>

    <script type="text/javascript" src="https://cdn.jsdelivr.net/momentjs/latest/moment.min.js"></script>

    <script src="{{ asset('/path/to/angular.js') }}"></script>
    <script src="{{ asset('/socket.io/socket.io.js') }}"></script>
	<script type="text/javascript" src="https://cdn.jsdelivr.net/npm/daterangepicker/daterangepicker.min.js"></script>

	<script src="{{ asset('/js/jquery.easydropdown.js') }}"></script>

	<script src="https://cdnjs.cloudflare.com/ajax/libs/sweetalert/2.1.2/sweetalert.min.js"></script>

	<script src="{{ asset('/js/script.js') }}" type="text/javascript"></script>
  <script>
  // When the user scrolls down 20px from the top of the document, show the button
  window.onscroll = function() {scrollFunction()};

  function scrollFunction() {
    if (document.body.scrollTop > 20 || document.documentElement.scrollTop > 20) {
      document.getElementById("myBtn").style.display = "block";
    } else {
      document.getElementById("myBtn").style.display = "none";
    }
  }

  // When the user clicks on the button, scroll to the top of the document
  function topFunction() {
    document.body.scrollTop = 0;
    document.documentElement.scrollTop = 0;
  }
  </script>

	 <script type="text/javascript"
     src="http://tarruda.github.com/bootstrap-datetimepicker/assets/js/bootstrap-datetimepicker.min.js">
    </script>
    @yield('scripts')
</html>
