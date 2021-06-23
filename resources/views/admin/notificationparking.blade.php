@extends('admin.adminmaster')
@section('navbar')
    @include('admin.layouts.navbar')
@endsection
@section('sidebar')
    @include('admin.layouts.sidebar')
@endsection
@section('title','Notification')
@section('footer')
    @include('admin.layouts.footer')
@endsection
@section('content')

<div id="modal1">
					<table class="table table-striped">
					  <thead>
					    <tr>
					    <th scope="col">Number</th>
					    	<th scope="col">Vendornumber</th>
							<th scope="col">Title</th>
							<th scope="col">Floors</th>
							<th scope="col">Image</th>
							<th scope="col" style="width:200px"><center>Action</center></th>
						</tr>
					  </thead>
					  <tbody>
					  	@foreach($record as $value)
					    <tr>
					    <td>{{$value->id}}</td>
					    <td>{{$value->vendor_id}}</td>
						 	<td id="title">{{$value->title}}</td>
						 	<td>{{$value->floor}}</td>

						 	<td ><img src="{{$value->image}}" height="100px" width="100px"></td>
						 	<td><a href="/delete/notification/{{ $value->id}}"><button class="btn" id="confirm">Confirm</button></a>
						 		<a href="/delete/parking/{{ $value->id}}"><button class="btn" id="cancel">Cancel</button></a></td>
						 </tr>
						@endforeach

					  </tbody>
					</table>
				</div>

@endsection
@section('script')
<script type="text/javascript">
		$('#confirm').click(function(){
			socket.emit('msg','Your building is confirmed.');
		});
	</script>
@endsection