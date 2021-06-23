
$('#update-parking').unbind().click(function() {
    var data = _velidation($('#update-parking-form'),'input');
    if(data == false){
      return false;
    }
    var data1 = _velidation($('#update-parking-form'),'textarea');
    if(data1 == false){
      return false;
    }
    data.description= data1.description;

    var data2 = _velidation($('#update-parking-form'),'select');
      if(data2 == false){
      return false;
    }
    data.status = data2.status;

    data.latitude =  $(this).attr('latitude')
    data.longitude = $(this).attr('longitude');

    data.image = $('#imgShow').attr('src');
    console.log(data);
   _ajax('/update/parking','POST',data,$(this),function(status,response){
            if(status==200){
               // window.location = "{ url('/add/parking') }";
               _alert(response,"",'success','ok');
            }

    });
})
