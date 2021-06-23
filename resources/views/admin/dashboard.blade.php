@extends('admin.adminmaster')
@section('navbar')
    @include('admin.layouts.navbar')
@endsection
@section('sidebar')
    @include('admin.layouts.sidebar')
@endsection
@section('title','Admin dashboard')
@section('footer')
    @include('admin.layouts.footer')
@endsection
 @section('content')
      <div class="main-panel">
        <div class="content-wrapper">
          <div class="row">
            <div class="col-xl-3 col-lg-3 col-md-3 col-sm-6 grid-margin stretch-card">
              <div class="card card-statistics">
                <div class="card-body">
                  <div class="clearfix">
                    <div class="float-left">
                      <i class="mdi mdi-cube text-danger icon-lg"></i>
                    </div>
                    <div class="float-right">
                      <p class="mb-0 text-right">Total payments</p>
                      <div class="fluid-container">
                        @php
                        $count = 0
                        @endphp
                        @foreach($booking as $value)
                        @if($value->status == 1)
                        <?php $count = $count + $value->paidamount;?>
                        @endif
                        @endforeach
                        <h3 class="font-weight-medium text-right mb-0"><?php echo $count;?></h3>
                      </div>
                    </div>
                  </div>

                </div>
              </div>
            </div>
            <div class="col-xl-3 col-lg-3 col-md-3 col-sm-6 grid-margin stretch-card">
              <div class="card card-statistics">
                <div class="card-body">
                  <div class="clearfix">
                    <div class="float-left">
                      <i class="mdi mdi-receipt text-warning icon-lg"></i>
                    </div>
                    <div class="float-right">
                      <p class="mb-0 text-right">Bookings</p>
                      <div class="fluid-container">
                        @php
                        $count = 0
                        @endphp
                        @foreach($booking as $value)
                        <?php $count = $count + 1;?>
                        @endforeach
                        <h3 class="font-weight-medium text-right mb-0"><?php echo $count;?></h3>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <div class="col-xl-3 col-lg-3 col-md-3 col-sm-6 grid-margin stretch-card">
              <div class="card card-statistics">
                <div class="card-body">
                  <div class="clearfix">
                    <div class="float-left">
                      <i class="mdi mdi-account-location text-info icon-lg"></i>
                    </div>
                    <div class="float-right">
                      <p class="mb-0 text-right">Vendors</p>
                      <div class="fluid-container">
                         @php
                        $count = 0
                        @endphp
                        @foreach($vendors as $value)
                        <?php $count = $count + 1;?>
                        @endforeach
                        <h3 class="font-weight-medium text-right mb-0"><?php echo $count;?></h3>
                      </div>
                    </div>
                  </div>

                </div>
              </div>
            </div>
            <div class="col-xl-3 col-lg-3 col-md-3 col-sm-6 grid-margin stretch-card">
              <div class="card card-statistics">
                <div class="card-body">
                  <div class="clearfix">
                    <div class="float-left">
                      <i class="mdi mdi-account-location text-info icon-lg"></i>
                    </div>
                    <div class="float-right">
                      <p class="mb-0 text-right">Users</p>
                      <div class="fluid-container">
                         @php
                        $count = 0
                        @endphp
                        @foreach($user as $value)
                        <?php $count = $count + 1;?>
                        @endforeach
                        <h3 class="font-weight-medium text-right mb-0"><?php echo $count;?></h3>
                      </div>
                    </div>
                  </div>

                </div>
              </div>
            </div>
          </div>
              <!--weather card ends-->
          <div class="row">
            <div class="col-md-12 grid-margin">
                  <div class="chart-container">
                    <div id="chartContainer" style="height: 300px; width: 100%;"></div>
                  </div>
            </div>
          </div>
        </div>
      </div>
@endsection
@section('script')
<script type="text/javascript" >
window.onload = function () {
  _ajax('/chart','get',{},$(this),function(status,response){
    var jan = response[0];
    var feb = response[1];
    var mar = response[2];
    var apr = response[3];
    var may = response[4];
    var jun = response[5];
    var jul = response[6];
    var aug = response[7];
    var sep = response[8];
    var oct = response[9];
    var nov = response[10];
    var dec = response[11];
  if(status == 200){
	var chart = new CanvasJS.Chart("chartContainer", {
		title:{
			text: "Order chart"
		},
		data: [
		{
			type: "column",
			dataPoints: [
				{ label: "Jan",  y: jan.count  },
				{ label: "Feb",  y: feb.count  },
				{ label: "Mar",  y: apr.count  },
				{ label: "Apr",  y: may.count  },
				{ label: "Jun",  y: jun.count  },
        { label: "Jul",  y: jul.count  },
        { label: "Aug",  y: aug.count  },
        { label: "Sep",  y: sep.count },
        { label: "Oct",  y: oct.count  },
        { label: "Nov",  y: nov.count  },
        { label: "Dec",  y: dec.count  }
			]
		}
		]
	});
	chart.render();
}
})
}
</script>
@endsection
