<!DOCTYPE html>
<html>

<?php include 'includes/header.php'; ?>


<body>


	<section class="banner-list-wr">
		<div class="banner-list">
			<img src="images/listing-banner.jpg" alt="banner" style="width: 100%;">
		</div>
		<div class="banner-title">
			<div class="container">
				<h1>Contact us</h1>
			</div>
			
		</div>
	</section>

	<section class="contact-content">
		<div class="container">
			<div class="row">
				<div class="col-lg-6 col-md-6 col-sm-12">
					<div class="contact-text">
						<h3>We Trek nepal Pvt.Ltd.</h3>
						<h4>Chaksibari Marg, Thamel, kathmandu, Nepal</h4>
						<div class="contact-details">
							<div class="contact-wr clearfix">
								<strong>Phone</strong><span>+977-1-4701860,+977-1-4701862</span>	
							</div>
							<div class="contact-wr clearfix">
								<strong>Mobile</strong><span>+977-1-9851081525 </span>	
							</div>
							<div class="contact-wr clearfix">
								<strong>Email</strong><span>Thakur@ wetreknepal.com <br>explorejumbo@gmail..com</span>
							</div>
							<div class="contact-wr clearfix">
								<strong>URL</strong><span>www.wetreknepal.com<br>www.jumboadventure.com</span>
							</div>
						</div>
					</div>
				</div>
				<div class="col-lg-6 col-md-6 col-sm-12">
					<div class="contact-form">
						<h2>
							Contact Form
						</h2>
						<form class="form-inline" action="/action_page.php">
						    <div class="form-group form-wide">
						      <label class="sr-only" for="email">Name:</label>
						      <input type="text" class="form-control" id="name" placeholder="Name" name="Nname">
						    </div>				  
						    <div class="form-group form-wide">
						      <label class="sr-only" for="pwd">Email:</label>
						      <input type="email" class="form-control" id="email" placeholder="Email" name="email">
						    </div>
						    <div class="form-group form-wide">
						      <label class="sr-only" for="pwd">Phone:</label>
						      <input type="text" class="form-control" id="phone" placeholder="Phone" name="phone">
						    </div>
						    <div class="form-group form-wide">
						      <label class="sr-only" for="pwd">Country</label>
						      <input type="text" class="form-control" id="country" placeholder="Country" name="country">
						    </div>
						    <div class="form-group form-wide">
						    	<textarea placeholder="Message"></textarea>
						   	</div>
						    <button type="submit" class="btn btn-success">Submit</button>
						  </form>
					</div>
				</div>
			</div>
			
		</div>
	</section>



<div style="width: 100%;">
	<div id="map" style="width:100%;height:600px;">
	
	</div>
</div>


<script>
	function myMap() {
	var mapOptions = {
	    center: new google.maps.LatLng(27.715190, 85.310368),
	    zoom: 10,
	    mapTypeId: google.maps.MapTypeId.HYBRID
	}
	var map = new google.maps.Map(document.getElementById("map"), mapOptions);
	}
</script>

<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyCcT-cgwxC_0F6dK831qTZaDGAe4dVhbpQ&callback=myMap"></script>












<?php include 'includes/footer.php'; ?>

</body>

</html>