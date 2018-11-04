<!DOCTYPE html>
<html>

<?php include 'includes/header.php'; ?>

		
	<script>
		
		$(document).ready(function() {
	  		if ($(window).width() > 1000) {
		  		$(window).scroll(function () {
		       
			      	if ($(window).scrollTop() > 300) {
			      		$('.filter-contain').addClass('filter-whole-fixed');
			      		
		    		}
		    		if ($(window).scrollTop() > 801) {
		     			$('.filter-contain').removeClass('filter-whole-fixed');
		     		
		    		}
		    		if ($(window).scrollTop() < 301) {
		     			$('.filter-contain').removeClass('filter-whole-fixed');
		     		
		    		}
	 	 		});
	 	 	}
	  	});
		
	</script>	


<body>


	<section class="banner-list-wr">
		<div class="banner-list">
			<img src="images/listing-banner.jpg" alt="banner" style="width: 100%;">
		</div>
		<div class="banner-title">
			<div class="container">
				<h1>Trip Listing</h1>
			</div>
			
		</div>
	</section>


	<section class="listing-wr">
		<div class="container">
			<div class="row">
				<div class="flex-container">
					<div class="col-lg-3 col-md-3 col-sm-12">
						<div class="filter-contain">
							<div class="filter-head clearfix">
								<h3>Filters</h3>
								<span><a href="">Clear</a></span>
							</div>
							<div class="flex-container">
								<div class="filter-body">
									<label>
										<span>Destination</span>
										<select>
											<option>Nepal</option>
											<option>Nepal</option>
											<option>Nepal</option>
										</select>
									</label>
									<label>
										<span>Activities</span>
										<select>
											<option>Nepal</option>
											<option>Nepal</option>
											<option>Nepal</option>
										</select>
									</label>
									<label>
										<span>Region</span>
										<select>
											<option>Nepal</option>
											<option>Nepal</option>
											<option>Nepal</option>
										</select>
									</label>
									<label>
										<span>Departure dates</span>
										<div class="dates-wr clearfix">
											<div class="dates-contain">
												<input type="date" placeholder="Start Date">
												<i class="fa fa-calendar" aria-hidden="true"></i>
											</div>
											<strong><i class="fa fa-arrow-right"></i></strong>
											<div class="dates-contain">
												<input type="date" placeholder="End Date">
												<i class="fa fa-calendar" aria-hidden="true"></i>
											</div>
										</div>	
									</label>					
									<label>
										<span>Difficulty Level</span>
										<select>
											<option>Nepal</option>
											<option>Nepal</option>
											<option>Nepal</option>
										</select>
									</label>
									<label class="range-slider">
										<span>Price Range</span>
										<div id="hidden-class-price" class="slidecontainer">
										  	<input type="range" min="0" max="1200" value="0" class="slider" id="myRange">
										  	<div class="price-range">
										  		<strong class="min">0</strong>
										  		<p>$<span id="demo" class="price-quote"></span></p>
										  		<strong class="max">1200</strong>
										  	</div> 	
										</div>
									</label>
									<label class="range-slider">
										<span>Duration Days</span>
										<div id="hidden-class-price" class="slidecontainer">
										  	<input type="range" min="0" max="12" value="0" class="slider" id="myRange2">
										  	<div class="price-range">
										  		<strong class="min">0</strong>
										  		<p>Day(s)<span id="demo2" class="price-quote"></span></p>
										  		<strong class="max">12</strong>
										  	</div> 	
										</div>
									</label>
								</div>
							</div>
						</div>
					</div>
					<div class="col-lg-9 col-md-9 col-sm-12">
						<div class="list-head clearfix">
							<div class="col-md-6 col-sm-16"><strong>Displaying results 1-9 of 543</strong></div>
							<div class="col-md-6 col-sm-16">
								<label>
									<span>Sort by:</span>
									<select>
										<option>Option1</option>
										<option>Option1</option>
										<option>Option1</option>
										<option>Option1</option>
									</select>
								</label>
							</div>
						</div>
						<div class="flex-container">
							<div class="col-lg-4 col-md-4 col-sm-12 list-contain">
								<div class="list-contains">
								<div class="list-img-wr">
										<a href="" class="image-wr"><img src="images/list1.jpg" alt="list"></a>
										<div class="rating clearfix">
											<img src="images/star.png" alt="star">
											<img src="images/star.png" alt="star">
											<img src="images/star.png" alt="star">
											<img src="images/star.png" alt="star">
										</div>
									</div>
									<div class="list-content-wr">
										<div class="list-content">
											<div class="inner-head clearfix">
												<span>Nepal</span>
												<span>Trekking</span>
												<span>Upper Mustang</span>
											</div>
											<div class="list-mid-body">
												<h3>Everest Base Camp</h3>
												<p>
													It is a long established fact that a reader will be distracted by the readable content
												</p>
											</div>
											<div class="list-foot clearfix">
												<strong>20 Days</strong>
												<span>$1400</span>
											</div>
										</div> 
										<div class="list-detail clearfix">
											<div class="trip-diff">
												<img src="images/meter.png" alt="meter">
												<span>Easy</span>
											</div>
											<a href="#" class="details">View Details</a>
										</div>
									</div>
								</div>
							</div>
							<div class="col-lg-4 col-md-4 col-sm-12 list-contain">
								<div class="list-contains">
									<div class="list-img-wr">
										<a href="" class="image-wr"><img src="images/list8.jpg" alt="list"></a>
										<div class="rating clearfix">
											<img src="images/star.png" alt="star">
											<img src="images/star.png" alt="star">
											<img src="images/star.png" alt="star">
											<img src="images/star.png" alt="star">
										</div>
									</div>
									<div class="list-content-wr">
										<div class="list-content">
											<div class="inner-head clearfix">
												<span>Nepal</span>
												<span>Trekking</span>
												<span>Upper Mustang</span>
											</div>
											<div class="list-mid-body">
												<h3>Everest Base Camp</h3>
												<p>
													It is a long established fact that a reader will be distracted by the readable content
												</p>
											</div>
											<div class="list-foot clearfix">
												<strong>20 Days</strong>
												<span>$1400</span>
											</div>
										</div> 
										<div class="list-detail clearfix">
											<div class="trip-diff">
												<img src="images/meter.png" alt="meter">
												<span>Easy</span>
											</div>
											<a href="#" class="details">View Details</a>
										</div>
									</div>
								</div>
								
							</div>
							<div class="col-lg-4 col-md-4 col-sm-12 list-contain">
								<div class="list-contains">
									<div class="list-img-wr">
										<a href="" class="image-wr"><img src="images/list3.jpg" alt="list"></a>
										<div class="rating clearfix">
											<img src="images/star.png" alt="star">
											<img src="images/star.png" alt="star">
											<img src="images/star.png" alt="star">
											<img src="images/star.png" alt="star">
										</div>
									</div>
									<div class="list-content-wr">
										<div class="list-content">
											<div class="inner-head clearfix">
												<span>Nepal</span>
												<span>Trekking</span>
												<span>Upper Mustang</span>
											</div>
											<div class="list-mid-body">
												<h3>Everest Base Camp</h3>
												<p>
													It is a long established fact that a reader will be distracted by the readable content
												</p>
											</div>
											<div class="list-foot clearfix">
												<strong>20 Days</strong>
												<span>$1400</span>
											</div>
										</div> 
										<div class="list-detail clearfix">
											<div class="trip-diff">
												<img src="images/meter.png" alt="meter">
												<span>Easy</span>
											</div>
											<a href="#" class="details">View Details</a>
										</div>
									</div>
								</div>
							</div>
							<div class="col-lg-4 col-md-4 col-sm-12 list-contain">
								<div class="list-contains">
									<div class="list-img-wr">
										<a href="" class="image-wr"><img src="images/list1.jpg" alt="list"></a>
										<div class="rating clearfix">
											<img src="images/star.png" alt="star">
											<img src="images/star.png" alt="star">
											<img src="images/star.png" alt="star">
											<img src="images/star.png" alt="star">
										</div>
									</div>
									<div class="list-content-wr">
										<div class="list-content">
											<div class="inner-head clearfix">
												<span>Nepal</span>
												<span>Trekking</span>
												<span>Upper Mustang</span>
											</div>
											<div class="list-mid-body">
												<h3>Everest Base Camp</h3>
												<p>
													It is a long established fact that a reader will be distracted by the readable content
												</p>
											</div>
											<div class="list-foot clearfix">
												<strong>20 Days</strong>
												<span>$1400</span>
											</div>
										</div> 
										<div class="list-detail clearfix">
											<div class="trip-diff">
												<img src="images/meter.png" alt="meter">
												<span>Easy</span>
											</div>
											<a href="#" class="details">View Details</a>
										</div>
									</div>
								</div>
							</div>
							<div class="col-lg-4 col-md-4 col-sm-12 list-contain">
								<div class="list-contains">
									<div class="list-img-wr">
										<a href="" class="image-wr"><img src="images/listing5.jpg" alt="list"></a>
										<div class="rating clearfix">
											<img src="images/star.png" alt="star">
											<img src="images/star.png" alt="star">
											<img src="images/star.png" alt="star">
											<img src="images/star.png" alt="star">
										</div>
									</div>
									<div class="list-content-wr">
										<div class="list-content">
											<div class="inner-head clearfix">
												<span>Nepal</span>
												<span>Trekking</span>
												<span>Upper Mustang</span>
											</div>
											<div class="list-mid-body">
												<h3>Everest Base Camp</h3>
												<p>
													It is a long established fact that a reader will be distracted by the readable content
												</p>
											</div>
											<div class="list-foot clearfix">
												<strong>20 Days</strong>
												<span>$1400</span>
											</div>
										</div> 
										<div class="list-detail clearfix">
											<div class="trip-diff">
												<img src="images/meter.png" alt="meter">
												<span>Easy</span>
											</div>
											<a href="#" class="details">View Details</a>
										</div>
									</div>
								</div>
							</div>
							<div class="col-lg-4 col-md-4 col-sm-12 list-contain">
								<div class="list-contains">
									<div class="list-img-wr">
										<a href="" class="image-wr"><img src="images/list1.jpg" alt="list"></a>
										<div class="rating clearfix">
											<img src="images/star.png" alt="star">
											<img src="images/star.png" alt="star">
											<img src="images/star.png" alt="star">
											<img src="images/star.png" alt="star">
										</div>
									</div>
									<div class="list-content-wr">
										<div class="list-content">
											<div class="inner-head clearfix">
												<span>Nepal</span>
												<span>Trekking</span>
												<span>Upper Mustang</span>
											</div>
											<div class="list-mid-body">
												<h3>Everest Base Camp</h3>
												<p>
													It is a long established fact that a reader will be distracted by the readable content
												</p>
											</div>
											<div class="list-foot clearfix">
												<strong>20 Days</strong>
												<span>$1400</span>
											</div>
										</div> 
										<div class="list-detail clearfix">
											<div class="trip-diff">
												<img src="images/meter.png" alt="meter">
												<span>Easy</span>
											</div>
											<a href="#" class="details">View Details</a>
										</div>
									</div>
								</div>
							</div>
						</div>
						<div class="page-number">
							<div class="page-wr clearfix">
								<span class="active"><a href="">1</a></span>
								<span><a href="">2</a></span>
								<span><a href="">3</a></span>
								<a href="" class="next">Next<i class="fa fa-arrow-right" aria-hidden="true"></i></a>
							</div>
							
						</div>
					</div>
				</div>
			</div>
		</div>
	</section>




<!-- range slider -->


	<script>
		var slider = document.getElementById("myRange");
		var output = document.getElementById("demo");
		output.innerHTML = slider.value;

		slider.oninput = function() {
		  output.innerHTML = this.value;
		}
		</script>
		<script>
		var slider2 = document.getElementById("myRange2");
		var output2 = document.getElementById("demo2");
		output2.innerHTML = slider2.value;

		slider2.oninput = function() {
		  output2.innerHTML = this.value;
		}
	</script>


<?php include 'includes/footer.php'; ?>

</body>

</html>