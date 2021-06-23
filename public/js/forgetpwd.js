$('#submit').click(function() {
    var data = _velidation($('#forgetpwd-form'),'input');
    if(data == false){
      return false;
    }
    $.ajax({
        url : '/forgetpwd',
        type : 'POST',
        success : function(response){
          window.location = "{ url('/otp') }";
        // alert('continue');
            // console.log(response);
        },
        error : function(err){
             alert('stop');
            // console.log(err);
        }
   });

});