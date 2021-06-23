
$('#daterange').daterangepicker({
    singleDatePicker: true,
    locale : {
      // format: 'DD-MM-YYYY',
      format: 'YYYY-MM-DD',
    },
    maxDate:moment()
  });
  $('#profile').change(function(e){
    var profile = e.target.files[0];
    var data = new FormData();
    data.append('profile',profile);
    _ajaxImage('/pofile/image','post',data,function(status,response){
      console.log(response)
      $('#imgShow').show();
      $('#imgShow').attr('src',response);
    });
  })
$('#profileupdate').click(function() {
    var data = _velidation($('#profileupdate-form'),'input');
    if(data == false){
      return false;
    }
      data.image = $('#imgShow').attr('src');
    _ajax('/profile/update','POST',data,$(this),function(status,response){
           if(status != 200){
                  _alert('not changed',"",'error','OK');
        }
                  _alert(response,"",'success','OK');

      });
});
