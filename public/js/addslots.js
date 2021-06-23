$('#add-slots').unbind().click(function() {
    var data = _velidation($('#add-slots-form'),'input');
    if(data == false){
      return false;
    }
    var data2 = _velidation($('#add-slots-form'),'select');
      if(data2 == false){
      return false;
    }
    data.floor = data2.floor;
    console.log(data);
   _ajax('/add/slots','POST',data,$(this),function(status,response){
            if(status != 200){
              _alert('slots',"",'error','ok');
            }
            _alert(response,"",'success','ok');
             

    });
})
