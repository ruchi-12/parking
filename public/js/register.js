$('#registerbtn').click(function() {
    var data = _velidation($('#register-form'),'input');
    if(data == false){
      return false;
    }
    console.log(data);

    $.ajax({
        headers: {
          'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
        },
        url : '/register',
        type : 'POST',
        data : data,
        success : function(response){
            console.log(response);
            _alert(`Successfully create account`,"",'success','OK');
        },
        error : function(err){
                console.log(err);
                _alert(`Failed to create account`,"",'error','OK');
        }
   });

});
