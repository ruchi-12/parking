alert('hello');
$('#searchOrder').on('keyup',function(){
    $value=$(this).val();
    console.log($value);
    _ajax('vendor/search/orders','post',{search:$value},null,function(status,response){
       if(status == 200){
           var html = '';
         $.each(response,function(i,orders){

          html +=
            ` <tr>
             <td>${orders.users_id}</td>
             <td>${orders.slot_id}</td>
             <td>${orders.start_date}</td>
             <td>${orders.end_date}</td>
             <td>${orders.paidamount}</td>`
             if(orders.status == 0){
            html += `<td><img src="/images/pending2.png" height="20px" width="20px"></td>`}

                if(orders.status == 1){
                html += `<td><img src="/images/success2.png" height="20px" width="20px"></td>`}

          html +=   `<td>
             <a class="font" href="delete/vendor/order/${orders.id}}"><i class="far fa-trash-alt fa-fw"></i></a>
             </td>
            </tr>`
        })
      }

      $('#searchOrders').html(html);/*redirect user.blade*/
          $("#modal1").hide();
          $("#modal").show();

      if($('#searchOrder').val() == ""){
          $("#modal1").show();
          $("#modal").hide();
          }

});
})
