<!DOCTYPE html>
<html lang="en">
<head>
<title>Blog</title>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="description" content="Conference project">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" type="text/css" href="styles/bootstrap4/bootstrap.min.css">
<link href="plugins/font-awesome-4.7.0/css/font-awesome.min.css" rel="stylesheet" type="text/css">
<link rel="stylesheet" type="text/css" href="plugins/OwlCarousel2-2.2.1/owl.carousel.css">
<link rel="stylesheet" type="text/css" href="plugins/OwlCarousel2-2.2.1/owl.theme.default.css">
<link rel="stylesheet" type="text/css" href="plugins/OwlCarousel2-2.2.1/animate.css">
<link rel="stylesheet" type="text/css" href="styles/news.css">
<link rel="stylesheet" type="text/css" href="styles/news_responsive.css">
</head>
<body>

<div class="super_container">

	<!-- Menu -->

	
	<!-- Home -->

	<div class="home">
		<div class="parallax_background parallax-window" data-parallax="scroll" data-image-src="images/news.jpg" data-speed="0.8"></div>

		<!-- Header -->
		<?php include 'header.php'; ?>

		<!-- <header class="header" id="header">
			<div>
				<div class="header_top">
					<div class="container">
						<div class="row">
							<div class="col">
								<div class="header_top_content d-flex flex-row align-items-center justify-content-start">
									<div>
										<a href="#">
											<div class="logo_container d-flex flex-row align-items-start justify-content-start">
												<div class="logo_image"><div><img src="images/logo.png" alt=""></div></div>
												<div class="logo_content">
													<div id="logo_text" class="logo_text logo_text_not_ie">The Conference</div>
													<div class="logo_sub">August 25, 2018 - Miami Marina Bay</div>
												</div>
											</div>
										</a>	
									</div>
									<div class="header_social ml-auto">
										<ul>
											<li><a href="#"><i class="fa fa-pinterest" aria-hidden="true"></i></a></li>
											<li><a href="#"><i class="fa fa-facebook" aria-hidden="true"></i></a></li>
											<li><a href="#"><i class="fa fa-twitter" aria-hidden="true"></i></a></li>
											<li><a href="#"><i class="fa fa-dribbble" aria-hidden="true"></i></a></li>
											<li><a href="#"><i class="fa fa-behance" aria-hidden="true"></i></a></li>
											<li><a href="#"><i class="fa fa-linkedin" aria-hidden="true"></i></a></li>
										</ul>
									</div>
									<div class="hamburger ml-auto"><i class="fa fa-bars" aria-hidden="true"></i></div>
								</div>
							</div>
						</div>
					</div>
				</div>
				<div class="header_nav" id="header_nav_pin">
					<div class="header_nav_inner">
						<div class="header_nav_container">
							<div class="container">
								<div class="row">
									<div class="col">
										<div class="header_nav_content d-flex flex-row align-items-center justify-content-start">
											<nav class="main_nav">
												<ul>
													<li><a href="index.html">Home</a></li>
													<li><a href="#">About Us</a></li>
													<li><a href="speakers.html">Speakers</a></li>
													<li><a href="events.html">Events</a></li>
													<li class="active"><a href="#">News</a></li>
													<li><a href="contact.html">Contact</a></li>
												</ul>
											</nav>
											<div class="header_extra ml-auto">
												<div class="header_search"><i class="fa fa-search" aria-hidden="true"></i></div>
												<div class="button header_button"><a href="#">Buy Tickets Now!</a></div>
											</div>
										</div>
									</div>
								</div>
							</div>
						</div>
						<div class="search_container">
							<div class="container">
								<div class="row">
									<div class="col">
										<div class="search_content d-flex flex-row align-items-center justify-content-end">
											<form action="#" id="search_container_form" class="search_container_form">
												<input type="text" class="search_container_input" placeholder="Search" required="required">
												<button class="search_container_button"><i class="fa fa-search" aria-hidden="true"></i></button>
											</form>
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>	
			</div>
		</header> -->

		<div class="home_content_container">
			<div class="container">
				<div class="row">
					<div class="col">
						<div class="home_content d-flex flex-row align-items-end justify-content-start">
							<div class="current_page">Blog</div>
							<div class="breadcrumbs ml-auto">
								<ul>
									<li><a href="home.php">Home</a></li>
									<li>Blog</li>
								</ul>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>

	<!-- News -->

	<div class="news">
		<div class="container">
			<div class="row">
				<div class="col-lg-8">
					
					<div class="news_items">

						<!-- News Item -->
						<?php foreach ($blogs as $key => $value) { ?>
						<div class="news_item">
							<div class="news_image_container">
								<div class="news_image"><img src="<?php echo $value['image']; ?>" alt=""></div>
								<div class="date_container">
									<a href="#">
										<span class="date_content d-flex flex-column align-items-center justify-content-center">
											<div class="date_day">15</div>
											<div class="date_month">May</div>
										</span>
									</a>	
								</div>
							</div>
							<div class="news_body">
								<div class="news_title"><a href="<?php echo 'blogsingle.php?bid='. $value['bid']; ?>"><?php echo $value['title']; ?></a></div>
								<div class="news_info">
									<ul>
										<!-- News Author -->
										<li>
											<div class="news_author_image"><img src="images/news_author_1.jpg" alt=""></div>
											<span>by <a href="#"><?php echo $value['author']; ?></a></span>
										</li>
										<!-- Tags -->
										<li><span>in <a href="events.php">Events</a></span></li>
										<!-- Comments -->
										<li><a href="#">3 Comments</a></li>
									</ul>
								</div>
								<div class="news_text">
									<p><?php echo $value['description']; ?></p>
								</div>
								<div class="button news_button"><a href="<?php echo 'blogsingle.php?bid='. $value['bid']; ?>">Read More</a></div>
							</div>
						</div>
					<?php } ?>

						

						<!-- Pagination -->
						<div class="pagination">
							<ul>
								<li class="active"><a href="#">01.</a></li>
								<li><a href="#">02.</a></li>
								<li><a href="#">03.</a></li>
							</ul>
						</div>
					</div>

				</div>

				<!-- Sidebar -->
				<div class="col-lg-4">
					<div class="sidebar">
						<div class="tickets">
							<div class="background_image" style="background-image:url(images/tickets.jpg)"></div>
							<div class="tickets_inner text-center">
								<div class="tickets_title">Buy Tickets</div>
								<div class="tickets_text">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Perferendis id expl icabo. Esum dolor sit amet, consect etur adipisi cing elit. Perferendis id explica bo.</div>
								<div class="tickets_next"><a href="#">See Next Event</a></div>
								<div class="button tickets_button"><a href="#">Buy Tickets Now!</a></div>
							</div>
						</div>
						<div class="sidebar_categories">
							<div class="sidebar_categories_title">Categories</div>
							<ul class="categories_list">
								<li><a href="#">The Speakers</a></li>
								<li><a href="#">Tips & Tricks</a></li>
								<li><a href="#">Events & Lifestyle</a></li>
								<li><a href="#">Marketing</a></li>
								<li><a href="#">Uncategorized</a></li>
							</ul>
						</div>
						<div class="latest_posts">
							<div class="latest_posts_title">Latest Posts</div>
							<div class="latest_container">

								<!-- Latest -->
								<div class="latest d-flex flex-row align-items-start justify-content-start">
									<div><div class="latest_image"><img src="images/latest_1.jpg" alt=""></div></div>
									<div class="latest_content">
										<div class="latest_title"><a href="#">A big discovery in science</a></div>
										<div class="latest_date">April 02, 2017</div>
									</div>
								</div>

								<!-- Latest -->
								<div class="latest d-flex flex-row align-items-start justify-content-start">
									<div><div class="latest_image"><img src="images/latest_2.jpg" alt=""></div></div>
									<div class="latest_content">
										<div class="latest_title"><a href="#">Marketing for everybody</a></div>
										<div class="latest_date">April 02, 2017</div>
									</div>
								</div>

								<!-- Latest -->
								<div class="latest d-flex flex-row align-items-start justify-content-start">
									<div><div class="latest_image"><img src="images/latest_3.jpg" alt=""></div></div>
									<div class="latest_content">
										<div class="latest_title"><a href="#">New ways to improve ypurself</a></div>
										<div class="latest_date">April 02, 2017</div>
									</div>
								</div>

							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>

	<!-- Call to action -->

	<div class="cta">
		<div class="parallax_background parallax-window" data-parallax="scroll" data-image-src="images/cta_1.jpg" data-speed="0.8"></div>
		<div class="container">
			<div class="row">
				<div class="col">
					<div class="cta_content text-center">
						<div class="cta_title">Get your tickets now!</div>
						<div class="button cta_button"><a href="#">Find out more</a></div>
					</div>
				</div>
			</div>
		</div>
	</div>

	<!-- Footer -->

<?php include 'footer.php'; ?>