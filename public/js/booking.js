$("#start_date").daterangepicker({

        timePicker: true,
        timePicker24Hour: true,
        minDate:new Date(),
        minTime:new Date(),
        locale: {
            format: 'YYYY-MM-DD H:mm'
        }
    });
$("#end_date").daterangepicker({
    singleDatePicker: true,

        timePicker: true,
        timePicker24Hour: true,
        minDate:new Date(),
        minTime:new Date(),
        locale: {
            format: 'YYYY-MM-DD H:mm'
        }
    });


$('#book_slots').unbind().click(function() {
    var data = _velidation($('#booking-form'),'input');
    var feature = [];
    $.each($("input[name='feature']:checked"), function(){            
        feature.push($(this).val());
    });
    if(data == false){
      return false;
    }
    data.feature = feature;
    console.log(data.feature);
    _ajax('/user/booking','POST',data,$(this),function(status,response){
         if(status==200){
            // _alert('Successfully booked',"",'success','OK');
            window.location.href = response;
        }
          else{
            _alert(response,"",'error','OK');
         }
    });

});
