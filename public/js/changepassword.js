$('#submit').click(function() {
    var data = _velidation($('#changepassword-form'),'input');
    if(data == false){
      return false;
    }
    $.ajax({
        url : '/changepassword',
        type : 'POST',
        data : data,
        success : function(response){
            // console.log(response);
        },
        error : function(err){
             alert('stop');
            // console.log(err);
        }
   });
});