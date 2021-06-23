$('#submit').click(function() {
    var data = _velidation($('#forgetpassword-form'),'input');
    if(data == false){
      return false;
    }
    $.ajax({
        url : '/forgetpassword',
        type : 'POST',
        success : function(response){
            alert('success');
            // console.log(response);
        },
        error : function(err){
             alert('stop');
            // console.log(err);
        }
   });

});