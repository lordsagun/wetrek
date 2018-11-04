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
				<h1>Booking Form</h1>
			</div>
		</div>
	</section>


	<section class="booking-form-wr">
		<div class="container">
			<div class="head-info">
				<h2>Everest Base Camp-<span>12 Days</span></h2>
				<h4>Please fill in the form below</h4>
			</div>
			<form class="booking-form personal clearfix">
				<label class="number">
					<input type="number" placeholder="No of people">
				</label>
				<h3>Personal Information</h3>
				<label>
					<input type="text" placeholder="First Name">
				</label>
				<label>
					<input type="text" placeholder="Last Name">
				</label>
				<label>
					<input type="email" placeholder="Email Address">
				</label>
				<label>
					<input type="text" placeholder="Mobile Number">
				</label>
				<label>
					<input type="date" placeholder="Date of birth">
				</label>
				<label>
					<input type="text" placeholder="Telephone">
				</label>
			</form>
			<form class="booking-form further clearfix">
				<h3>Further Information</h3>
				<label class="dates-contain">
					<input type="date" placeholder="Arrival Date">
					<i class="fa fa-calendar" aria-hidden="true"></i>
				</label>
				<label class="dates-contain">
					<input type="date" placeholder="Departure Date">
					<i class="fa fa-calendar" aria-hidden="true"></i>
				</label>
				<label>
					<input type="text" placeholder="Flight Number">
				</label>
				<label>
					<input type="text" placeholder="Flight Time">
				</label>
				<label>
					<input type="text" placeholder="Passport Number">
				</label>
				<label>
					<select>
						<option>Country</option>
						<option>Nepal</option>
						<option>India</option>
						<option>Bhutan</option>
					</select>
				</label>
				<label class="text-area">
					<textarea placeholder="Other Information"></textarea>
				</label>
				<label class="book-terms clearfix">
					<input type="checkbox" name=""><span>I agree terms and condition</span>
				</label>
				<button type="submit" class="btn btn-success">Submit</button>
			</form>
		</div>
	</section>












<?php include 'includes/footer.php'; ?>

</body>

</html>