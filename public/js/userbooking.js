alert('stop');
$('#book_slots').click(function() {
    var data = _velidation($('#user-booking-form'),'input');
    console.log(data);
    if(data == false){
      return false;
    }
    _ajax('/userbooking','POST',data,$(this),function(status,response){
         if(status==200){
            _alert(`Booking Successfully`,"",'success','OK');
         }
         else{
            _alert(response,"",'error','OK');
         }
    });

});
