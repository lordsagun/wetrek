<!-- extra details start -->

	<section class="extra-details">
		<div class="container">
			<div class="col-lg-3 col-md-3 col-sm-6 col-xs-12">
				<h3>ASSOCIATED WITH</h3>
				<div class="partners clearfix">
					<a href=""><img src="images/assoc1.png" alt="associated"></a>
					<a href=""><img src="images/assoc2.png" alt="associated"></a>
					<a href=""><img src="images/assoc3.png" alt="associated"></a>
					<a href=""><img src="images/assoc4.png" alt="associated"></a>
				</div>
			</div>
			<div class="col-lg-3 col-md-3 col-sm-6 col-xs-12">
				<h3>WE ACCEPT</h3>
				<div class="partners card card-img clearfix">
					<a href=""><img src="images/card1.png" alt="associated"></a>
					<a href=""><img src="images/card2.png" alt="associated"></a>
				</div>
			</div>
			<div class="col-lg-3 col-md-3 col-sm-6 col-xs-12">
				<h3>NEWSLETTER</h3>
				<div class="partners card news-letter-contain">
					<p>
						Please enter your email address using the fields
						below to receive all of the latest news and offers!
					</p>
					<div class="newsletter-wr clearfix">
						<input type="text" placeholder="Subscribe to our Newsletter">
						<button>Send</button>
					</div>
				</div>
			</div>
			<div class="col-lg-3 col-md-3 col-sm-6 col-xs-12">
				<h3>E BROCHURE</h3>
				<div class="partners card br-img clearfix">
					<a href="#"><img src="images/brochure2.jpg" alt="brochure"></a>
				</div>
			</div>
		</div>
	</section>


	<!-- extra details end -->



<footer>
	<div class="container">
		<div class="row footer-top">
			<div class="col-lg-4 col-md-3 col-sm-3">
				<p class="address">
					<span>Chaksibari Marg , Thamel</span>
					<span>kathmandu , Nepal  </span>
					<span>Phone : +977-1-4701860,</span>
					<span>+977-1-4701862</span>
					<span>Mobile : +977-1-9851081525</span>
					<a href=#>Email : Thakur@ wetreknepal.com</a>
					<a href="#">explorejumbo@gmail.com</a>
				</p>
			</div>
			<div class="col-lg-8 col-md-9 col-sm-9 footer-detail clearfix">
				<div class="flex-container">
					<div class="col-lg-3 col-md-3 col-sm-3 col-xs-4">
						<ul class="footer-menu">
							<li><a href="#">About us</a></li>
							<li><a href="">CSR</a></li>
							<li><a href="">Blog</a></li>
							<li><a href="">Booking Form</a></li>
							<li><a href="">Contact</a></li>
						</ul>
					</div>
					<div class="col-lg-3 col-md-3 col-sm-3 col-xs-4">
						<ul>
							<li><a href="javascript:void(0)" class="list-head">Activity</a></li>
							<li><a href="">Tour</a></li>
							<li><a href="">Trekking</a></li>
							<li><a href="">Peak Climbing</a></li>
							<li><a href="">Expedition</a></li>
						</ul>
					</div>
					<div class="col-lg-3 col-md-3 col-sm-3 col-xs-4">
						<ul>
							<li><a href="javascript:void(0)" class="list-head">Destination</a></li>
							<li><a href="">Nepal</a></li>
							<li><a href="">Bhutan</a></li>
							<li><a href="">Tibet</a></li>
							<li><a href="">India</a></li>
						</ul>
					</div>
					<div class="col-lg-3 col-md-3 col-sm-3 col-xs-4">
						<ul>
							<li><a href="javascript:void(0)" class="list-head">Special Package</a></li>
							<li><a href="">Everest Base Camp</a></li>
							<li><a href="">Annapurna Base Camp</a></li>
							<li><a href="">Mustand Road Trip</a></li>
							<li><a href="">Langtang Road Trip</a></li>
						</ul>
					</div>
				</div>
			</div>
		</div>
	</div>
	<section class="footer-foot clearfix">
		<div class="container">
			<div class="image-wr">
				<a href="#" class="image-wrap footer-logo"><img src="images/logo.png" class="logo"></a>
			</div>
			<div class="social-wrapper">
				<div class="social">
					<a href="image-box"><img src="images/facebook.png" alt="facebook"></a>
					<a href="image-box"><img src="images/twitter.png" alt="twitter"></a>
					<a href="image-box"><img src="images/linked.png" alt="linked"></a>
					<a href="image-box"><img src="images/pinterest.png" alt="pinterest"></a>
					<a href="image-box"><img src="images/behance.png" alt="behance"></a>
					<a href="image-box"><img src="images/gplus.png" alt="gplus"></a>
				</div>
				<div class="clearfix">
					<span>© Copyright 2017 Earthbound </span>
					<span> All rights reserved </span>
					<span> Website by: Genius Designs</span>
				</div>
			</div>
		</div>
	</section>
</footer>




<script>
		function openNav() {
			if(window.innerWidth>676){
		    	document.getElementById("mySidenav").style.width = "30%";
			}
			else{
				document.getElementById("mySidenav").style.width = "80%";
			}
		}

		function closeNav() {
		    document.getElementById("mySidenav").style.width = "0";
		}
	</script>




	<script>
		$(document).ready(function() {
	  		if(window.innerWidth<1025){

		  		$(window).scroll(function () {
		       	
			      	if ($(window).scrollTop() > 100) {
			      	
			      	$('.nav_bar').addClass('nav-bar-hider')
			      	$('.head').addClass('nav-bar-hider')
		    	}
		    		if ($(window).scrollTop() < 101) {
		     		 
		     		 $('.nav_bar').removeClass('nav-bar-hider')
			      	$('.head').removeClass('nav-bar-hider')
		    	}

		 	 });
		  }
	});

	</script>
	<script>
		$(document).ready(function() {
	  		if(window.innerWidth>1025){
	  			$('.navigation').addClass('btn-hider')
	  		 }
	  		 else{
	  		 	$('.navigation').addClass('shower')
	  		 }
	});
	</script>