var getParking = function(search = null){

	getLocation()
	.then(function(p){

		if(search){
			p.search = search;
		}
		/*  AJAX */
		_ajax('/parking/get','POST',p,null,function(status,response){
		if(status == 200){
				var html = '';


				$.each(response,function(i,parking){
					html += `<div class="portfolio card mix_all  data-cat=" card"="" style="display: inline-block; opacity: 1;">
						<div class="portfolio-wrapper" >
							<a href="get/parking/${parking.id}"class="b-link-stripe b-animate-go  thickbox">
					     	<img src="${parking.image}" class="img-parking" alt=""><div class="b-wrapper"><div class="atc"><p>Book Now</p></div><div class="clearfix"></div><h2 class="b-animate b-from-left    b-delay03 "><img src="images/icon-eye.png" class="img-responsive go" alt=""></h2>
						  	</div></a>
							<div class="title">
								<div class="colors">
								<h6>${parking.title}</h6>
								<p><small>${parking.address}</small>
								</p><br>
								<p><small> ${distance(p.latitude,p.longitude,parking.latitude,parking.longitude)} KM from your location </small></p>
								</div>
								<div class="clearfix"></div>
							</div>

							<a class="submit" href="/parking/details/${parking.id}">View More</a>

							<a class="book-now" href="get/parking/${parking.id}">Book Now</a>
		                </div>
					</div>`
				})
			}
			$('#portfoliolist').html(html);
		})
	})
}
$(document).ready(function(){
	getParking();

})

$('#searchParking').keyup(function(){
	getParking($(this).val());
})
