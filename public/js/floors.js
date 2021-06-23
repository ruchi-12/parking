$("#start_date").daterangepicker({
	singleDatePicker: true,

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
$('#show-slots').unbind().click(function() {
	var data = _velidation($('#add-floors-form'),'input');
		if(data == false){
		return false;
	}
    var data1 = _velidation($('#add-floors-form'),'select');
      if(data1 == false){
      return false;
    }
		if($('#floor-select').val()=="Select floor"){
				alert('please select any floor');
		}
		data.floor = data1.floor;
	 var book = [];
   _ajax('/get/parking','POST',data,$(this),function(status,response){
		 // var book = [];
		 		book = response[1];
				console.log(book);
				var slot__ = response[0];
		    if(status == 200){
           var html = '';
         $.each(slot__,function(i,slots){
          if(book.indexOf(slots.id) == -1){
          html +=
           `<a href="/user/booking/${slots.id}" class="bookNow">`}
            html +=`<div class="slots hoverDiv"  style="`
              if(book.indexOf(slots.id) == -1){
                html += 'background:#014d7a; border: 5px solid #CD5C5C;border-radius: 10px;'
              } else {
                html += 'background:#CD5C5C;border: 5px solid #014d7a;border-radius: 10px'
              }
             html += `">
                  Rent:${slots.price}
            </div></a>`
			})
      }
      $('#slotsDisplay').html(html);
    });
});
