

<!DOCTYPE html>
<html lang="en">
<head>
<title>Events</title>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="description" content="Conference project">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" type="text/css" href="styles/bootstrap4/bootstrap.min.css">
<link href="plugins/font-awesome-4.7.0/css/font-awesome.min.css" rel="stylesheet" type="text/css">
<link rel="stylesheet" type="text/css" href="plugins/OwlCarousel2-2.2.1/owl.carousel.css">
<link rel="stylesheet" type="text/css" href="plugins/OwlCarousel2-2.2.1/owl.theme.default.css">
<link rel="stylesheet" type="text/css" href="plugins/OwlCarousel2-2.2.1/animate.css">
<link rel="stylesheet" type="text/css" href="styles/events.css">
<link rel="stylesheet" type="text/css" href="styles/events_responsive.css">
</head>
<body>

<div class="super_container">

	<!-- Menu -->

	
	
	<!-- Home -->

	<div class="home">
		<div class="parallax_background parallax-window" data-parallax="scroll" data-image-src="images/events.jpg" data-speed="0.8"></div>

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
													<li class="active"><a href="#">Events</a></li>
													<li><a href="news.html">News</a></li>
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
							<div class="current_page">Events</div>
							<div class="breadcrumbs ml-auto">
								<ul>
									<li><a href="home.php">Home</a></li>
									<li>Events</li>
								</ul>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>

	<!-- Events -->

	<div class="events">
		<div class="container">
			<div class="row">
				<div class="col">


					
					<!-- Event -->
					<?php foreach ($events_array as $key => $value) { ?> 
					<div class="event">
						
						<div class="row row-lg-eq-height">
							<div class="col-lg-6 event_col">
								<div class="event_image_container">
									<div class="background_image" style="background-image:url(<?php echo $value['image']; ?>)"></div>
									<div class="date_container">
										<a href="#">
											<span class="date_content d-flex flex-column align-items-center justify-content-center">
												<div class="date_day">15</div>
												<div class="date_month">May</div>
											</span>
										</a>	
									</div>
								</div>
							</div>
							<div class="col-lg-6 event_col">
								<div class="event_content">
									<div class="event_title"><?php echo $value['title'];  ?></div>
									<div class="event_location">@ Miami Auditorium</div>
									<div class="event_text">
										<p><?php echo $value['description'];  ?></p>
									</div>
									<div class="event_speakers">
										<!-- Event Speaker -->
										<div class="event_speaker d-flex flex-row align-items-center justify-content-start">
											<div><div class="event_speaker_image"><img src="images/event_speaker_1.jpg" alt=""></div></div>
											<div class="event_speaker_content">
												<div class="event_speaker_name">Michael Smith</div>
												<div class="event_speaker_title">Marketing Specialist</div>
											</div>
										</div>
										<!-- Event Speaker -->
										<div class="event_speaker d-flex flex-row align-items-center justify-content-start">
											<div><div class="event_speaker_image"><img src="images/event_speaker_2.jpg" alt=""></div></div>
											<div class="event_speaker_content">
												<div class="event_speaker_name">Jessica Williams</div>
												<div class="event_speaker_title">Marketing Specialist</div>
											</div>
										</div>
									</div>
									<div class="event_buttons">
										<div class="button event_button event_button_1"><a href="#">Buy Tickets Now!</a></div>
										<div class="button_2 event_button event_button_2"><a href="<?php echo 'eventsingle.php?eid='. $value['eid']; ?>">Read more</a></div>
									</div>
								</div>
							</div>
							
						</div>
					   
     
					</div>
					<?php } ?> 

					<!-- Event -->
					

				</div>
			</div>
			<div class="row">
				<div class="col">
					<div class="pagination">
						<ul>
							<li class="active"><a href="#">01.</a></li>
							<li><a href="#">02.</a></li>
							<li><a href="#">03.</a></li>
						</ul>
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