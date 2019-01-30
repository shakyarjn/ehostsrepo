<?php

 session_start();
  include 'index.php';


?>


<!-- Header -->

		<header class="header" id="header">
			<div>
				<div class="header_top">
					<div class="container">
						<div class="row">
							<div class="col">
								<div class="header_top_content d-flex flex-row align-items-center justify-content-start">
									<div>
										<a href="home.php">
											<div class="logo_container d-flex flex-row align-items-start justify-content-start">
												<div class="logo_image"><div><img src="images/logo.png" alt=""></div></div>
												<div class="logo_content">
													<div id="logo_text" class="logo_text logo_text_not_ie">Event Hosts</div>
													<div class="logo_sub">Since 1999</div>
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
													<li><a href="home.php">Home</a></li>
													<li><a href="about.php">About Us</a></li>
													<li><a href="speakers.php">Speakers</a></li>
													<li><a href="events.php">Events</a></li>
													<li><a href="blog.php">Blog</a></li>
													<li><a href="contact.php">Contact</a></li>
													<!-- Login | Logout State -->
													<?php if(isset($_SESSION['status']) && isset($_SESSION['user'])) {?>
          

  
													
           										  <li>
             									  <a data-toggle="modal" data-target="#myModalDashboard" href="">Welcome  <?php echo $_SESSION['user']['uName'];?></a>
           										  </li>

           										 <li>
              									 <a data-toggle="modal" data-target="#myModalLogout" href="">Logout</a>
            									 </li>
												<?php }
												else{ ?>
         										 <li>
            									  <a data-toggle="modal" data-target="#myModal" href="">Login</a>       
              
          										</li>

            <li class="nav-item">
              <a class="nav-link" data-toggle="modal" data-target="#myModalRegister" href="">Register</a>
            </li>
<?php }?>          
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
		</header>


		<!-- Login  Form -->
<div class="modal fade" id="myModal" role="dialog">
       <?php include "login.php";?>      
</div>  

<!-- Registration Form -->
 <div class="modal fade" id="myModalRegister" role="dialog">
       <?php include "registration.php";?>      
</div>

<!-- Dashboard -->
 <div class="modal fade" id="myModalDashboard" role="dialog">
       <?php include "dashboard.php";?>      
</div>

<!-- Signout -->
 <div class="modal fade" id="myModalLogout" role="dialog">
  <?php include "logout.php"; ?>
      
</div>
