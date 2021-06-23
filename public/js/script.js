$(document).ready(function() {
  $("#loader").fadeOut("slow");
});

function _ajaxImage(url,type,data,callback){
	$.ajax({
	url:url,
	type:type,
	data:data,
	processData:false,
	dataType:'json',
	contentType:false,
	success:function(response){
            callback(200,response);
		},
		error:function(err){
            callback(err.status,err.responseText);
        }
     });
}
function _ajax(url,type,data=null,button = null,callback){
	var text = "";
	if(button){
		text = $(button).text();
	}


	$.ajax({
		url:url,
		type:type,
		data:data,
		beforeSend : function(){
			if(button){
				$(button).html(`<i class="fa fa-spin fa-spinner"></i> ${text}`);
			}
		},
		success:function(response){
            callback(200,response);

		},
		error:function(err){

            callback(err.status,err.responseText);
        },
        complete : function(){
        	if(button){
				$(button).html(`${text}`);
			}
        }
	})
}

function _alert(title,text,icon,button,input=null){
var init = {
	  title: title,
	  text: text,
	  icon: icon,
	  button: button,
	}
	if(input){
		init.content=input;
	}
	swal(init);

}


function verifyOTP(){
	alert('hello');

}

function _velidation(form,field){
	var data = {};
	var error = false;
	$.each(form.find(field),function(index,input){
		if($(input).val() == "" && $(input).attr('skip') == undefined){
			$(input).focus();
			_alert(`${$(input).attr('message')} is reqiured`,"value can't be empty",'error','OK');
			error =  true;
			return false;
		}

		if($(input).attr('type') == "email"){
			var patterns = /^[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,4}$/;
			if(!patterns.test($(input).val())){
				_alert(`Please enter valid email`,"",'error','OK');
				error =  true;
				return false;
			}
		}

		// if($(input).attr('type') == "password"){
		// 	var patterns =/^[0-9a-zA-z]{6,20}$/;
		// 	console.log('password : ',$(input).val());
		// 	if(!patterns.test($(input).val())){
		// 		_alert(`Please enter minimum 6 character `,"",'error','OK');
		// 		error =  true;
		// 		return false;
		// 	}
		// }

		if($(input).attr('type') == "phone"){
			 var patterns = /^[0-9]{10}$/;
			if(!patterns.test($(input).val())){
				_alert(`Please enter valid phone`,"",'error','OK');
				error =  true;
				return false;
			}
		}
		if($(input).attr('type') == "password"){
			 var pattern =  /^[0-9]{10}$/;
			if(!pattern.test($(input).val())){
				_alert(`Please enter valid password`,"",'error','OK');
				error =  true;
				return false;
			}
		}
    if($(input).attr('type') == "car_no"){
       var patterns = "^[a-zA-z]{2}\s[0-9]{2}\s[0-9]{4}$";
      if(!patterns.test($(input).val())){
        _alert(`Please enter valid vehical no`,"",'error','OK');
        error =  true;
        return false;
      }
    }
		data[$(input).attr('name')] = $(input).val();

	});

	if(error){
		return false;
	}
	return data;

}

function getLocation() {
  	return new Promise(function(resolve){
	  if (navigator.geolocation) {
	    	navigator.geolocation.getCurrentPosition(function(position){
	    		resolve({
					latitude : position.coords.latitude,
					longitude : position.coords.longitude
				});
	    	});
	  } else {
	    resolve({});
	  }
  	})
}


function distance(lat1, lon1, lat2, lon2, unit='K') {


	if ((lat1 == lat2) && (lon1 == lon2)) {
		return 0;
	}
	else {
		var radlat1 = Math.PI * lat1/180;
		var radlat2 = Math.PI * lat2/180;
		var theta = lon1-lon2;
		var radtheta = Math.PI * theta/180;
		var dist = Math.sin(radlat1) * Math.sin(radlat2) + Math.cos(radlat1) * Math.cos(radlat2) * Math.cos(radtheta);
		if (dist > 1) {
			dist = 1;
		}
		dist = Math.acos(dist);
		dist = dist * 180/Math.PI;
		dist = dist * 60 * 1.1515;
		if (unit=="K") { dist = dist * 1.609344 }
		if (unit=="N") { dist = dist * 0.8684 }
		return dist.toFixed(2);
	}
}
