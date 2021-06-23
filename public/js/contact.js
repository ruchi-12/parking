$('#send').unbind().click(function() {
    var data = _velidation($('#contact-form'),'input');
    if(data == false){
      return false;
    }
    var data1 = _velidation($('#contact-form'),'textarea');
    if(data1 == false){
      return false;
    }
    data.message = data1.message;
    console.log(data);
    _ajax('/contact/info','POST',data,$(this),function(status,response){
      if(status == 200){
        _alert(response,"",'success','OK');
      }
});
})
