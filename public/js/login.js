$('#submitlogin').unbind().click(function() {
    var data = _velidation($('#login-form'),'input');
    console.log('data : ',data);
    if(data == false){
      return false;
    }
    _ajax('/login','POST',data,$(this),function(status,response){
      if(status == 200){
          window.location.href=response;
      } else {
        _alert(response,"",'error','OK');
      }
    });

});
$('#registerbtn').unbind().click(function() {
    var data = _velidation($('#register-form'),'input');
    console.log(data);
    if(data == false){
      return false;
    }
     var data1 = _velidation($('#register-form'),'select');
     if(data1 == false){
      return false;
    }
    data.role=data1.role;

    _ajax('/register','POST',data,$(this),function(status,response){
         if(status==200){
           window.location.href="/login";
         }
         else{
            _alert(response,"",'error','OK');
         }
    });

});

$('#forget').unbind().click(function() {
    var obj = $(this);
    var data = _velidation($('#forgetpwd-form'),'input');
    if(data == false){
      return false;
    }

    _ajax(obj.attr('_url'),'POST',data,$(this),function(status,response){
        if (status == 200) {
                    var input = {
                    element: "input",
                    attributes: {
                    name:"otp",
                    placeholder: "Enter OTP",
                    type: "text",
                    id:"otp"
                    },
                }
                var button = {
                    text:'Verify OTP',
                    closeModal: false,
                    _url:'{{route("verifyOTP")}}'
                }
                _alert(response,"",'success',button,input);
                  $('.swal-button').unbind().click(function() {
                    var otp = $('#otp').val();
                     _ajax(obj.attr('_url2'),'POST',{otp:otp},$(this),function(status,response){
                        $('#errormsg').remove();
                        if(status == 200){
                            swal.close();
                            $('#verifyOTP').modal('show');
                        }
                        else{
                         $('#otp').after(`<span style="color:red" id="errormsg">${response}</span>`);
                         $('.swal-button').removeClass('swal-button--loading');
                        }

                     });
                  });
        }else {
              _alert(response,"",'error','OK');
        }
    })

});

$('#set-password').unbind().click(function() {
    var data = _velidation($('#reset-password-form'),'input');
    // console.log(data);
    if(data == false){
      return false;
    }

     _ajax('password/set/new','POST',data,null,function(status,response){
         if(status == 200){
        _alert(response,"",'success','OK');
            $('#verifyOTP').modal('hide')
    }
      });
});

$('#changepwd').unbind().click(function() {
    var data = _velidation($('#changepassword-form'),'input');
    console.log(data);
    if(data == false){
      return false;
    }
    _ajax('/password/change','POST',data,null,function(status,response){
          if(status == 200){
          _alert(response,"",'success','OK');
    }
    else{
        _alert(response,"",'error','OK');
    }
  });
});

$('#search').unbind().click(function() {
    var data = _velidation($('#search'),'input');
    if(data == false){
      return false;
    }
    console.log(data);
    data.location={
    latitude : $(this).attr('latitude'),
    longitude :$(this).attr('longitude'),
    }
    _ajax('/customer','POST',data,$(this),function(status,response){
      if(status == 200){
           alert('hello');
      }
    });

});
