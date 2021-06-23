$('#btnadd').unbind().click(function(){
  // alert('hello');
   var data = _velidation($('#feature-form'),'input');
    if(data == false){
      return false;
    }
    var data1 = _velidation($('#feature-form'),'textarea');
     if(data1 == false){
       return false;
     }
     data.description = data1.description;
     _ajax('/add/feature','POST',data,$(this),function(status,response){
     	console.log(data);
     	// alert('hello');
            if(status==200){
               // window.location = "{ url('/add/parking') }";
               _alert(response,"",'success','ok');
            }

    });
});
