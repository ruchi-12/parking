@extends('layouts.master')

@section('footer')
		@include('layouts.footer')
@endsection
@section('title','Login')
@section('css')

@endsection
@section('content')
<section id="main">
	<div class="login-content" >
		<div class="container">
			<div class="row">
				<div class="col-md-6 offset-md-3 login text-center">
					<button id="get" class="submit form-group">Direction</button>
					@foreach ($direction as $value)
					<input type="text"  class="form-group form-control" value="{{$value->id}}"  name="parking_id" id="parking_id" hidden>
					@endforeach
          <div id="map-canvas"></div>
      </div>
    </div>
  </div>
</div>
<div class="gap50x"></div>
</section>
@endsection
@section('scripts')

<script type="text/javascript" src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBNwXv16u3LDDHJ67T7AYXK-YELTByKBrk&libraries=places&callback=initAutocomplete"></script>
<script src="/js/getdirection.js">

</script>
@endsection
