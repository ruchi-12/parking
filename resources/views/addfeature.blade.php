@extends('layouts.master')
@section('title','Add Features')
@section('header')
    @include('layouts.menubar')
@endsection
@section('footer')
    @include('layouts.footer')
@endsection
@section('content')
<section id="main">
	<div class="login-content" >
		<div class="container">
			<div class="row">
				<div class="col-md-6 offset-md-3 login text-center">
						<div id="feature-form">
              <div class="features-section-head text-center">
								<h3><span>A</span>dd Features</h3>
							</div>
                <input id="txtid" name="id" type="text" class="form-control form-group"
                 value="{{$userInfo->id}}" hidden><br>
                <input id="txtfeature" name="feature" type="text" class="form-control form-group" placeholder="Enter features name" message="Feature">
                <br>

                 <input id="txtprice" name="price" type="text" class="form-control form-group" placeholder="Enter feature price" message="prise"><br>
                  <textarea id="txtdescription" name="description" rows="5" type="text" class="form-control form-group" placeholder="Enter feature description" message="description"></textarea><br>
                 <button id="btnadd" type="button" class="submit">Add</button>
                 <a href="/floors"><button class="submit"><i class="fa fa-angle-double-left" style="font-size:16px"></i> Previous</button></a>
               </div>
        </div>
      </div>
    </div>
  </div>
</section>
@endsection
@section('scripts')
<script type="text/javascript" src="/js/features.js"></script>
@endsection
