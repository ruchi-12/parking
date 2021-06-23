@extends('layout.login')

<head>

  @section('title')
  Login
  @endsection

  <style type="text/css">
    #login-image{
        background-image: url(/img/register-page.jpg);
        background-attachment: fixed;
        height: 100vh;
        width: 100vw;
        background-size: contain;
    }
    #profileup-form{
      padding: 150;
      background-color: #95b9f7; 
      height: 100vh;
    }
  
    
  
    }
  </style>
  
</head>

@section('content')
  <div class="row">
    <div class="col-md-6">
        
        <!--  Login Image -->
        <div id="login-image"></div>>

    </div>
    <div class="col-md-6">
          <!--  Login Form--> 

          <div id="profileup-form">

      
        	<label for="name">NAME</label>
            <input id="name" type="text" class="form-group form-control"  value="<?php echo $userInfo->name; ?>" name="name" >
            <label for="email">EMAIL</label>
            <input id="email" type="text" class="form-group form-control"  name="email" >
            <input type="hidden" name="_token" value="{{ csrf_token()}}">
            <button type="submit" class="btn btn-success" name="submit">Update</button>
        
    </div>
</div>

value="<?php echo $userInfo->email; ?>"



@endsection

@section('script')
    <script type="text/javascript">
        $('#submit').click(function() {
        var data = _velidation($('#profileup-form'),'input');

            if(data == false)
            {
              return false;
            }
        

            // return false;
                $.ajax({
            url: '/profileupdate',
            type: 'POST',
            // data: data
     });  
        })
    </script>
@endsection
