$('#submit').unbind().click(function(){
  // alert('hello');
   var data = _velidation($('#name'),'input');
    if(data == false){
      return false;
    }
    var data1 = _velidation($('#review'),'textarea');
     if(data1 == false){
       return false;
     }
     data.review = data1.review;
     _ajax('/add/review','POST',data,$(this),function(status,response){
     	console.log(data);
     	// alert('hello');
            if(status==200){
               // window.location = "{ url('/add/parking') }";
               _alert(response,"",'success','ok');
            }
    });
});
