<head>
	<title>We Trek Nepal</title>

	
	<!-- css -->
	<link rel="stylesheet" type="text/css" href="css/style.css">
	

	<!-- bootstrap -->
	  <meta name="viewport" content="width=device-width, initial-scale=1">
  	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">

  	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
	
	<!-- google fonts -->
	<link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,400i,600,600i,700,700i,800" rel="stylesheet">

	<!-- font awesome -->
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

	<!-- owl-carousel -->
	<script src="js/jquery.min.js"></script>
    <script src="js/owl.carousel.js"></script>
    <link rel="stylesheet" href="css/owl.carousel.min.css">
    <link rel="stylesheet" href="css/owl.theme.default.min.css">

    <!-- lightbox -->
    <link type="text/css" rel="stylesheet" href="css/featherlight.min.css" />


    <link rel="stylesheet" type="text/css" href="js/slider.js">


    <link rel="stylesheet"  href="css/lightslider.css"/>
    <script src="js/lightslider.js"></script> 

	<script>
		
		$(document).ready(function() {
	  		if ($(window).width() < 768) {
		  		$(window).scroll(function () {
		       
			      	if ($(window).scrollTop() > 90) {
			      		$('.nav_bar').addClass('navbar-fixed');
			      		
		    		}
		    		if ($(window).scrollTop() < 91) {
		     			$('.nav_bar').removeClass('navbar-fixed');
		     		
		    		}
	 	 		});
	 	 	}
	  	});
		
	</script>
	<script>
		$(document).ready(function() {
	  		if ($(window).width() > 768) {
		  		$(window).scroll(function () {
		       
			      	if ($(window).scrollTop() > 90) {
			      		$('.nav_bar').addClass('navbar-fixed');
			      		$('.head').addClass('head-hide');
		    		}
		    		if ($(window).scrollTop() < 91) {
		     			$('.nav_bar').removeClass('navbar-fixed');
		     			$('.head').removeClass('head-hide');
		     			$('.head').addClass('head-show');
		    		}
	 	 		});
	 	 	}
	  	});
	</script>


</head>

	<!-- head start -->

	<div class="head">
		<div class="container clearfix">
			<div class="row">
				<div class="head-desc col-lg-8 col-md-6 col-sm-8 col-xs-12 clearfix">
					<div>
						<a href="faq.php">FAQ</a>
					</div>
					<div>
						<a href="#">BLOG</a>
					</div>
					<div>
						<a href="#">CSR</a>
					</div>
				</div>
				<div class="head-phone col-lg-4 col-md-6 col-sm-4 col-xs-12">
					<p class="e-mail"><i class="glyphicon glyphicon-envelope"></i>hello@wetreknepal.com</p>
					<p><i class="glyphicon glyphicon-earphone"></i>+977 01 4581236</p>

				</div>

			</div>
		</div>
	</div>   


<!-- head end -->


<!-- nav bar start -->

<div class="nav_bar">
	<div class="container">
		<nav class="navbar navbar-inverse">
		  <div class="container-fluid">
		    <div class="navbar-header">
		      
		      <a class="navbar-brand" href="#"><img src="images/logo.png"></a>
		    </div>
		    <div class="collapse navbar-collapse" id="myNavbar">
		      <ul class="nav navbar-nav navbar-right">
		        <li class="active"><a href="#">Home</a></li>
		        <li><a href="#">Nepal</a></li>
		        <li><a href="#">Bhutan</a></li>
		        <li><a href="#">Tibet</a></li>
		        <li class="dropdown">
		          <a class="dropdown-toggle" data-toggle="dropdown" href="#">About us<span class="caret"></span></a>
		          <ul class="dropdown-menu">
		            <li><a href="#">Why Travel with us</a></li>
		            <li><a href="#">Meet The Team</a></li>
		            <li><a href="#">Responsible Tourism</a></li>
		            <li><a href="#">Terms and Condition</a></li>
		          </ul>
		        </li>
		        <li class="dropdown">
		          <a class="dropdown-toggle" data-toggle="dropdown" href="#">Activity<span class="caret"></span></a>
		          <ul class="dropdown-menu">
		            <li><a href="#">Trekking</a></li>
		            <li><a href="#">Tour</a></li>
		            <li><a href="#">Expedition</a></li>
		          </ul>
		        </li>
		        <li><a href="#">Wetrek Special</a></li>
		        <li><a href="#">Contact</a></li>
		      </ul>
		    </div>
		  </div>
		</nav>
	</div>
</div>

<section id="hidden-nav" class="nav-side sider-nav shower">
		
		<div class="nav-bar clearfix">
			<div id="mySidenav" class="sidenav">
				<a href="javascript:void(0)" class="closebtn" onclick="closeNav()">&times;</a>
				<ul class="sd-nav">
						<li class="active"><a href="#">Project <span class="sr-only">(current)</span></a></li>
						<li><a href="#">Studio</a></li>
						<li><a href="#">Team</a></li>
						<li><a href="#">Blog</a></li>
						<li class="dropdown">
				          <a class="dropdown-toggle" data-toggle="dropdown" href="#">About us<span class="caret"></span></a>
				          <ul class="dropdown-menu">
				            <li><a href="#">Why Travel with us</a></li>
				            <li><a href="#">Meet The Team</a></li>
				            <li><a href="#">Responsible Tourism</a></li>
				            <li><a href="#">Terms and Condition</a></li>
				          </ul>
				        </li>
						<li><a href="#">Contact</a></li>
					</ul>
			</div>

			<div class="navigation clearfix">
				<span class="nav-menu animation-target " onclick="openNav()"><img src="images/nav-image.png" align="nav"></span>
			</div>
		</div>	
	</section>
