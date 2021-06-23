$('#userSearch').on('keyup',function(){
    $value=$(this).val();
    console.log($value);
    _ajax('/search/user','post',{search:$value},null,function(status,response){
       if(status == 200){
           var html = '';
         $.each(response,function(i,users){

          html +=
            `<tr>
          <td>${users.name}</td>
          <td>${users.email}</td>
          <td>${users.phone}</td>
          <td>${users.birthdate}</td>
          <td><a href="delete/user/${users.id}"><i class="far fa-trash-alt"></i></a></td>
          </tr>`
         })
      }
      $('#user').html(html);/*redirect user.blade*/
          $("#modal1").hide();
          $("#modal").show();

      if($('#userSearch').val() == ""){
          $("#modal1").show();
          $("#modal").hide();
          }
});
})
$('#SortUser').on('change',function(e){
    $value=$(this).val();
    _ajax('/sort/user','post',{Sort:$value},null,function(status,response){
       if(status == 200){
           var html = '';
         $.each(response,function(i,users){

          html +=
            `<tr>
          <td>${users.name}</td>
          <td>${users.email}</td>
           <td>${users.phone}</td>
          <td>${users.birthdate}</td>
          <td><a href="delete/user/${users.id}"><i class="far fa-trash-alt"></i></a></td>
          </tr>`
         })
      }
      $('#user').html(html);
      /*redirect user.blade*/
          $("#modal1").hide();
          $("#modal").show();


      if($('#Sort').val() == ""){
          $("#modal1").show();
          $("#modal").hide();
          }
});
})
$('#vendorSearch').on('keyup',function(){
    $value=$(this).val();

    console.log($value);
    _ajax('/vendor','post',{search:$value},null,function(status,response){
       if(status == 200){
           var html = '';
         $.each(response,function(i,vendor){
          html +=
            `<tr>
          <td>${vendor.name}</td>
          <td>${vendor.email}</td>
           <td>${vendor.phone}</td>
          <td>${vendor.birthdate}</td>
          <td><a href="delete/user/${vendor.id}"><i class="far fa-trash-alt"></i></a></td>
           `
         })
      }
      $('#vendor').html(html);
       $("#modal1").hide();
          $("#modal").show();
      if($('#vendorSearch').val() == ""){
          $("#modal1").show();
          $("#modal").hide();
          }
});
})
$('#SortVendor').on('change',function(e){
    $value=$(this).val();
    _ajax('/sort/vendor','post',{Sort:$value},null,function(status,response){
       if(status == 200){
           var html = '';
         $.each(response,function(i,vendor){

          html +=
            `<tr>
          <td>${vendor.name}</td>
          <td>${vendor.email}</td>
           <td>${vendor.phone}</td>
          <td>${vendor.birthdate}</td>
          <td><a href="delete/user/${vendor.id}"><i class="far fa-trash-alt"></i></a></td>
          </tr>`
         })
      }
      $('#vendor').html(html);
      /*redirect user.blade*/
          $("#modal1").hide();
          $("#modal").show();


      if($('#Sort').val() == ""){
          $("#modal1").show();
          $("#modal").hide();
          }
});
})
$('#parkingSearch').on('keyup',function(){
    $value=$(this).val();

    _ajax('/search/parking','post',{search:$value},null,function(status,response){
       if(status == 200){
           var html = '';
         $.each(response,function(i,parking){

          html +=
            `<tr>
          <td>${parking.vendor_id}</td>
            <td>${parking.title}</td>
            <td><img src="${parking.image}"></td>
            <td>${parking.floor}</td>

              <td><a href="delete/user/${parking.id}"><i class="far fa-trash-alt"></i></a>
            </td>
           `
         })
       }
       $('#parking').html(html);/*redirect user.blade*/
           $("#modal1").hide();
           $("#modal").show();

       if($('#parkingSearch').val() == ""){
           $("#modal1").show();
           $("#modal").hide();
           }
 });
 })

$('#SortParking').on('change',function(e){
    $value=$(this).val();
    _ajax('/sort/parking','post',{Sort:$value},null,function(status,response){
       if(status == 200){
           var html = '';
         $.each(response,function(i,parking){
            html +=
            `<tr>
          <td>${parking.vendor_id}</td>
            <td>${parking.title}</td>

            <td><img src="${parking.image}"></td>
            <td>${parking.floor}</td>

              <td><a href="delete/user/${parking.id}"><i class="far fa-trash-alt"></i></a>
            </td>
           `
         })

      }
      $('#parking').html(html);
      /*redirect user.blade*/
          $("#modal1").hide();
          $("#modal").show();


      if($('#Sort').val() == ""){
          $("#modal1").show();
          $("#modal").hide();
          }
});
})
$('#OrderSearch').on('keyup',function(){
    $value=$(this).val();

    _ajax('/search/orders','post',{search:$value},null,function(status,response){
       if(status == 200){
           var html = '';
         $.each(response,function(i,booking){

          html +=
            `  <tr>
                <td>${booking.users_id}</td>
                <td>${booking.parking_id}</td>
                <td>${booking.slot_id}</td>
                <td>${booking.start_date}</td>
                <td>${booking.end_date}</td>

                <td>
              </tr>
           `
         })
       }
       $('#booking').html(html);/*redirect user.blade*/
           $("#modal1").hide();
           $("#modal").show();

       if($('#bookingSearch').val() == ""){
           $("#modal1").show();
           $("#modal").hide();
           }
 });
 })

$('#SortOrder').on('change',function(e){
    $value=$(this).val();
    _ajax('/sort/orders','post',{Sort:$value},null,function(status,response){
       if(status == 200){
           var html = '';
         $.each(response,function(i,booking){
            html +=
            ` <tr>
                <td>${booking.users_id}</td>
                <td>${booking.parking_id}</td>
                <td>${booking.slot_id}</td>
                <td>${booking.start_date}</td>
                <td>${booking.end_date}</td>

                <td>
              </tr>
           `
         })

      }
      $('#booking').html(html);
      /*redirect user.blade*/
          $("#modal1").hide();
          $("#modal").show();


      if($('#Sort').val() == ""){
          $("#modal1").show();
          $("#modal").hide();
          }
});
})
$('#contactSearch').on('keyup',function(){
    $value=$(this).val();
    console.log($value);
    _ajax('/search/contact','post',{search:$value},null,function(status,response){
       if(status == 200){
           var html = '';
         $.each(response,function(i,contact){

          html +=
            `<tr>
          <td>${users.name}</td>
          <td>${users.email}</td>
          <td>${users.phone}</td>
          <td>${users.message}</td>
          <td><a href="delete/contact/${users.id}"><i class="far fa-trash-alt"></i></a></td>
          </tr>`
         })
      }
      $('#contact').html(html);/*redirect user.blade*/
          $("#modal1").hide();
          $("#modal").show();

      if($('#userContact').val() == ""){
          $("#modal1").show();
          $("#modal").hide();
          }
});
})
$('#SortContact').on('change',function(e){
    $value=$(this).val();
    _ajax('/sort/contact','post',{Sort:$value},null,function(status,response){
       if(status == 200){
           var html = '';
         $.each(response,function(i,contact){

          html +=
            `<tr>
          <td>${users.name}</td>
          <td>${users.email}</td>
           <td>${users.phone}</td>
          <td>${users.message}</td>
          <td><a href="delete/contact/${users.id}"><i class="far fa-trash-alt"></i></a></td>
          </tr>`
         })
      }
      $('#contact').html(html);
      /*redirect user.blade*/
          $("#modal1").hide();
          $("#modal").show();


      if($('#Sort').val() == ""){
          $("#modal1").show();
          $("#modal").hide();
          }
});
})
