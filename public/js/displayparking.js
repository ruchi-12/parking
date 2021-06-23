alert('hello');
$('#searchParking').on('keyup',function(){
    $value=$(this).val();
    console.log($value);
    _ajax('vendor/search/parking','post',{search:$value},null,function(status,response){
       if(status == 200){
           var html = '';
         $.each(response,function(i,parking){

          html +=
            `<tr>
						<td>${parking->id}</td>
						<td>${parking->title}</td>
						<td>${parking->description}</td>
						<td>${parking->floor}</td>

						<td ><img src="${parking->image}" height="100px" width="100px"></td>
												<td>
												<center>
						<a class="font" href="delete/${parking->id}">  <i class="far fa-trash-alt fa-fw"></i></a>
						</center>
						</td>
						<td>
						<center>
						<a  class="font" href="update/parking/${paking->id}"><i class="far fa-edit fa-fw"></i></a>
						</center>
						</td>
					 </tr>`
         })
      }
      $('#serchP').html(html);/*redirect user.blade*/
          $("#modal1").hide();
          $("#modal").show();

      if($('#searchParking').val() == ""){
          $("#modal1").show();
          $("#modal").hide();
          }
});
})
