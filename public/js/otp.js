$('#otpbtn').click(function() {
    var data = _velidation($('#otp-form'),'input');
    if(data == false){
      return false;
    }
    $.ajax({
        url : '/otp',
        type : 'POST',
        data : data,
        success : function(response){
             window.location = "{ url('/forgetpassword') }";
            // alert('continue');
            // console.log(response);
        },
        error : function(err){
             alert('stop');
            // console.log(err);
        }
   });

});