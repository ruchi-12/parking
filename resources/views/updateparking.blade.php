@extends('layouts.master')

@section('title','Login')

@section('header')
    @include('layouts.menubar')
@endsection

@section('footer')
    @include('layouts.footer')
@endsection

@section('content')
<div class="row" >
    <div class="col-md-5 offset-md-4">
        <div class="gap50x"></div>
            <div id="update-parking-form">
                 <div>
                    <input type="text" id="parking_id" class="form-group form-control" name="parking_id"  value="{{$userInfo->id}}" hidden>
                </div>
                <div>
                    <label for="add-name">Name</label>
                    <input type="text" id="title" class="form-group form-control" name="title"  message="title" value="{{$userInfo->title}}">
                </div>
                <div>
                    <label for="add-description">Description</label>
                    <textarea type="text" id="add-description" cols="30"  rows="4" class="form-group form-control" name="description" value="{{$userInfo->description}}"  message="description" ></textarea>
                </div>
                    <div>
                    <label for="add-status">Enter no of floor</label>
                    <input  type="text" class="form-control form-group" name="floor" id="add-floor" value="{{$userInfo->floor}}" style="width: 80px" >
                    </div>
                <div>
                    <div>
                    <label for="add-status">Status</label>
                    <select class="form-control form-group" name="status" id="add-status">
                        <option value="active">Active</option>
                        <option value="deactive">Deactive</option>
                    </select>
                </div>
                <div>
                    <label for="add-image" class="gap10x">Choose Image</label><br>
                    <input type="file" id="image" value="" class="gap10x form-group form-control" name="image" message="image">
                <img id="imgShow" style="display: none;" height="100px" width="100px">
                </div>
                <div>
                    <button  class="submit" id="update-parking" name="update-parking"> Upadate Parking </button>
                    <a href="/DisplayParkingDetails"><button class="submit"><i class="fa fa-angle-double-left" style="font-size:16px"></i> Previous</button></a>
                </div>
            </div>
            <div class="gap100x"></div>
        </div>
    </div>
<div class="gap100x"></div>
@endsection

@section('scripts')
    <script type="text/javascript" src="/js/updateparking.js"></script>
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
</script>
@endsection
