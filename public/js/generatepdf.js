$('#generatepdf').unbind().click(function() {
    _ajax('/generatepdf','get',{},$(this),function(status,response){
    });
});
