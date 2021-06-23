$('#change-pwd').unbind().click(function() {
    var data = _velidation($('#admin-change-pwd'),'input');
    if(data == false){
      return false;
    }
    _ajax('/adminchangepwd','POST',data,$(this),function(status,response){
      if(status == 200){
          _alert(response,"",'success','OK');
      }
      else{
          _alert(response,"",'error','OK');

      }
    });

});
