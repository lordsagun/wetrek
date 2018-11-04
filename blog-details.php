<!DOCTYPE html>
<html>

<?php include 'includes/header.php'; ?>


<body>

	<!-- facebook box -->

	<div id="fb-root"></div>
	<script>(function(d, s, id) {
	  var js, fjs = d.getElementsByTagName(s)[0];
	  if (d.getElementById(id)) return;
	  js = d.createElement(s); js.id = id;
	  js.src = 'https://connect.facebook.net/en_US/sdk.js#xfbml=1&version=v2.12';
	  fjs.parentNode.insertBefore(js, fjs);
	}(document, 'script', 'facebook-jssdk'));</script>


	<!-- blog-detail start -->


	<<div class="blog-detail-inside">
		<div class="blog-banner">
			<div class="banner-content">
				<div class="container">
					<h1>Blog Title Here</h1>
				</div>
				
			</div>
		</div>
		<div class="row">
			<div class="container no-padding">
				<div class="col-lg-12">
					<div class="publish-detail blog-post">	
					</div>
					<div class="article-content">
						<div id="myCarousel" class="carousel slide" data-ride="carousel">
						    <!-- Indicators -->
						    <ol class="carousel-indicators">
						      <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
						      <li data-target="#myCarousel" data-slide-to="1"></li>
						      <li data-target="#myCarousel" data-slide-to="2"></li>
						      <li data-target="#myCarousel" data-slide-to="3"></li>
						    </ol>

						    <!-- Wrapper for slides -->
						    <div class="carousel-inner" role="listbox">

						      <div class="item active">
						        <img src="images/nepal.jpg" alt="Chania" width="100%">
						        <div class="carousel-caption">
						         
						        </div>
						      </div>

						      <div class="item">
						        <img src="images/nepal.jpg" alt="Chania" width="100%">
						        <div class="carousel-caption">
						         
						        </div>
						      </div>
						    
						      <div class="item">
						        <img src="images/nepal.jpg" alt="Flower" width="100%">
						        <div class="carousel-caption">
						          
						        </div>
						      </div>

						      <div class="item">
						        <img src="images/nepal.jpg" alt="Flower" width="100%">
						        <div class="carousel-caption">
						          
						        </div>
						      </div>
						  
						    </div>

						
						</div>
						<h2 class="article-heading">
							Búzios é um paraíso natural com uma
						</h2>
						<div class="article-author clearfix">
							<span>24 April 2018</span>
							<span><a href="">Maria Shara</a></span>
						</div>

						<div class="article-description">
							<p>
									Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
								tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
								quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
								consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
								cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
								proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
							</p>
							<p>
									Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
								tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
								quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
								consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
								cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
								proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
							</p>
							<p class="quotes">
								Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
								tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
								quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
								consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
							</p>
							<p>
									Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
								tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
								quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
								consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
								cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
								proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
								Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
								tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
								quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
								consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
								cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
								proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
							</p>
						</div>
						<div class="article-content-foot clearfix">
							<div class="comment">
								<a href="#leave_reply"><i class="fa fa-comment"></i>Leave a comment</a>
							</div>
							<div class="social-share">
								<div>
									<a href="" title="Share this"><i class="fa fa-facebook"></i></a>
								</div>
								<div>
									<a href="" title="Pin this"><i class="fa fa-pinterest"></i></a>
								</div>
								<div>
									<a href="" title="Tweet this"><i class="fa fa-twitter"></i></a>
								</div>
							</div>
						</div>
					</div>

					<div class="article-change">
						<div class="row article-changer">
							<div class="col-lg-6 col-md-6 col-sm-6 col-xs-6 gapper first">
								<a href="">Previous</a>
							</div>
							<div class="col-lg-6 col-md-6 col-sm-6 col-xs-6 gapper">
								<a href="">Next</a>
							</div>
						</div>
					</div>
					<div class="comment-form">
						<div id="leave_reply" class="comment-head">
							<h2>Leave a Reply</h2>
							<p>Your email address will not be published. Required fields are marked *</p>
						</div>
						<form class="form-inline" action="/action_page.php">
							<div class="form-group form-wide">
						    	<textarea placeholder="Reply..."></textarea>
						   	</div>
						    <div class="form-group form-wide">
						      <label class="sr-only" for="email">Name:</label>
						      <input type="text" class="form-control" id="name" placeholder="Name*"  name="Nname">
						    </div>				  
						    <div class="form-group form-half-wide">
						      <label class="sr-only" for="pwd">Email:</label>
						      <input type="email" class="form-control" id="email" placeholder="Email*" name="email">
						    </div>
						    <div class="form-group form-half-wide">
						      <label class="sr-only" for="pwd">Phone:</label>
						      <input type="text" class="form-control" id="phone" placeholder="Phone" name="phone">
						    </div>
						    <button type="submit" class="btn btn-success">Post Reply</button>
					  </form>
					</div>
				</div>
				<div class="col-lg-12 recent-foot">
					<div class="row">
						<div class="recent col-lg-4 col-md-4 col-sm-12 col-xs-12">
							<h2>
								Recent Posts
							</h2>
							<div class="recent-post-content-box clearfix">
								<div class="recent-post-content clearfix">
									<a href="" class="recent-post-img"><img src="images/list4.jpg"></a>
									<div>
										<span>Jan 2, 2018</span>
										<a href="">Post Heading very long one </a>
									</div>
								</div>
								<div class="recent-post-content clearfix">
									<a href="" class="recent-post-img"><img src="images/list2.jpg"></a>
									<div>
										<span>Jan 2, 2018</span>
										<a href="">Post Heading very long one </a>
									</div>
								</div>
								<div class="recent-post-content clearfix">
									<a href="" class="recent-post-img"><img src="images/list3.jpg"></a>
									<div>
										<span>Jan 2, 2018</span>
										<a href="">Post Heading very long one here </a>
									</div>
								</div>
							</div>
						</div>
						<div class="recent col-lg-4 col-md-4 col-sm-12 col-xs-12">
							<h2>
								Categories
							</h2>
							<div class="recent-post-content-box clearfix">
								<div class="recent-post-content recent-comment clearfix">
									<div>		
										<a href="">Hotels</a>
									</div>
								</div>
								<div class="recent-post-content recent-comment clearfix">
									
									<div>
										<a href="">Trekking</a>
									</div>
								</div>
								<div class="recent-post-content recent-comment clearfix">
									
									<div>
										<a href="">Flights</a>
									</div>
								</div>
								<div class="recent-post-content recent-comment clearfix">
									
									<div>
										<a href="">Guides</a>
									</div>
								</div>
								<div class="recent-post-content recent-comment clearfix">
									
									<div>
										<a href="">Miscellaneous</a>
									</div>
								</div>
								
							</div>
						</div>
						<div class="col-lg-4 col-md-4 col-sm-12 col-xs-12">
							<div class="fb-page" data-href="https://www.facebook.com/facebook" data-tabs="timeline" data-width="400" data-height="310" data-small-header="false" data-adapt-container-width="true" data-hide-cover="false" data-show-facepile="true"><blockquote cite="https://www.facebook.com/facebook" class="fb-xfbml-parse-ignore"><a href="https://www.facebook.com/facebook">Facebook</a></blockquote></div>
						</div>
						
					</div>
				</div>
			</div>
		</div>
	</div>




<!-- blog-detail end -->












<?php include 'includes/footer.php'; ?>





</body>
</html>