$('#addparking').click(function(){
    alert('helooo');
    socket.emit('hello','a new parking add');
    socket.emit('data',{
      
    })
  });
$('#add-parking').unbind().click(function() {
    var data = _velidation($('#add-parking-form'),'input');
    if(data == false){
      return false;
    }
    var data1 = _velidation($('#add-parking-form'),'textarea');
    if(data1 == false){
      return false;
    }
    data.description= data1.description;
    data.address= data1.address;

    var data2 = _velidation($('#add-parking-form'),'select');
      if(data2 == false){
      return false;
    }
    data.status = data2.status;

    data.latitude =  $(this).attr('latitude');
    data.longitude = $(this).attr('longitude');

    data.image = $('#imgShow').attr('src');
    console.log(data);
   _ajax('/add/parking','POST',data,$(this),function(status,response){
            if(status==200){
               // window.location.href = "/floors";
               _alert(response,"",'success','ok');
            }

    });
});
