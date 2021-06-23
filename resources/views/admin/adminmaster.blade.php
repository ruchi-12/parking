<!DOCTYPE html>
<html lang="en">

<head>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <title>@yield('title')  :: Parking Hub</title>
  <!-- plugins:@yield('title')  :: Parking Hubcss -->
  @yield('src')
  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.2/css/all.css" integrity="sha384-fnmOCqbTlWIlj8LyTjo7mOUStjsKC4pOpQbqyi7RrhN7udi9RwhKkMHpvLbHG9Sr" crossorigin="anonymous">
  <link rel="stylesheet" href="/admin/vendors/iconfonts/mdi/css/materialdesignicons.min.css">
  <link rel="stylesheet" href="/admin/vendors/css/vendor.bundle.base.css">
  <link rel="stylesheet" href="/admin/vendors/css/vendor.bundle.addons.css">
  <link rel="stylesheet" href="/admin/css/style.css">
  
  <!-- endinject -->
  <link rel="shortcut icon" href="/admin/images/favicon.png" />
</head>

<body>



  <div class="container-scroller">
     @yield('navbar')

    <!-- partial -->
    <div class="container-fluid page-body-wrapper">
      <!-- partial:partials/_sidebar.html -->
      @yield('sidebar')
      <!-- Start Content  -->
        @yield('content')
        <!--end content-->
    </div>
    </div>
         @yield('footer')
   <!--scripts-->
</body>

  <script src="/admin/vendors/js/vendor.bundle.base.js"></script>
  <script src="/admin/vendors/js/vendor.bundle.addons.js"></script>
  <script src="/admin/js/off-canvas.js"></script>
  <script src="/admin/js/misc.js"></script>
  <script src="/admin/js/dashboard.js"></script>
  <script src="/js/script.js" type="text/javascript"></script>
  <script type="text/javascript" src="https://canvasjs.com/assets/script/canvasjs.min.js"></script>
    @yield('script')

      <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/socket.io/2.2.0/socket.io.js"></script>

    <script type="text/javascript">

    var socket = io.connect('http://localhost:4000');
    
    socket.on('parking',function(data){
     var vendorid = data.vendorid;
     var title = data.title;
     var address = data.address;
     var description = data.description;
     var city = data.city;
     var floor = data.floor;
     var status = data.status;
     var location =data.location;

     $('#title').text(title);
     $('#vendorid').text(vendorid);
     $('#address').text(address);
     $('#description').text(description);
     $('#city').text(city);
     $('#floor').text(floor);
     $('#status').text(status);
     $('#location').text(location);
     
     console.log(data);
     socket.emit('alldata',data);
    });

    socket.on('totalUsers',function(totalUsers){
      $('#totalUsers').text(totalUsers);
    });
    socket.on('notification',function(notification){
      $('#notification').text(notification);
    });
  </script>

</html>
