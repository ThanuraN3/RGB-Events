<?php include('head.php') ?>

	<body class="default-header-p">
		<div id="thetop" class="thetop"></div>
		<div class='backtotop'>
			<a href="#thetop" class='scroll'>
				<i class="fas fa-angle-double-up"></i>
			</a>
		</div>




        <?php include('header.php') ?>

		<!-- breadcrumb-section - start
		================================================== -->
		<section id="breadcrumb-section" class="breadcrumb-section clearfix">
			<div class="jarallax" style="background-image: url(<?php echo BASE_URL; ?>assets/images/breadcrumb/0.breadcrumb-bg.jpg);">
				<div class="overlay-black">
					<div class="container">
						<div class="row justify-content-center">
							<div class="col-lg-6 col-md-12 col-sm-12">

								<div class="breadcrumb-title text-center mb-50">
									<span class="sub-title">contact us now</span>
									<h2 class="big-title">keep <strong>in touch</strong></h2>
								</div>

								<div class="breadcrumb-list">
									<ul>
										<li class="breadcrumb-item"><a href="index.php" class="breadcrumb-link">Home</a></li>
										<li class="breadcrumb-item active" aria-current="page">contact us</li>
									</ul>
								</div>


							</div>
						</div>
					</div>
				</div>
			</div>
		</section>
		<!-- breadcrumb-section - end
		================================================== -->





		<!-- contact-section - start
		================================================== -->
		<section id="contact-section" class="contact-section sec-ptb-100 clearfix">
			<div class="container">

				<div class="section-title mb-50">
					<small class="sub-title">contact us</small>
					<h2 class="big-title">Keep in touch <strong>with RGB Events</strong></h2>
				</div>
			
				<div class="contact-form form-wrapper text-center">
					<form action="contact.php" method="post">
						<div class="row">

							<div class="col-lg-6 col-md-6 col-sm-12">
								<div class="form-item">
									<input type="text" placeholder="Your Name" required>
								</div>
							</div>

							<div class="col-lg-6 col-md-6 col-sm-12">
								<div class="form-item">
									<input type="email" placeholder="Email Address" required>
								</div>
							</div>

							<div class="col-lg-6 col-md-6 col-sm-12">
								<div class="form-item">
									<input type="text" placeholder="Your Country" required>
								</div>
							</div>

							<div class="col-lg-6 col-md-6 col-sm-12">
								<div class="form-item">
									<input type="tel" placeholder="Phone Number" required>
								</div>
							</div>

							<div class="col-lg-12 col-md-12 col-sm-12">
								<textarea placeholder="Your Message" required></textarea>
								<button type="submit" class="custom-btn">send mail</button>
							</div>
							
						</div>
					</form>
				</div>


			</div>
		</section>
		<!-- contact-section - end
		================================================== -->

<!-- upcomming-event-section2 - start
		================================================== -->
		<section id="upcomming-event-section2" class="upcomming-event-section2 sec-ptb-100 clearfix">

			<div class="container">

				<div class="section-title mb-50">
					<span class="line-style"></span>
					<small class="sub-title">keep in touch</small>
					<h2 class="big-title"><strong>Contact</strong> Directory</h2>
				</div>

			</div>

			<div class="comming-event-item">
				<div class="container">
					<div class="row justify-content-start">

						<div class="col-lg-6 col-md-12 col-sm-12">
							<div class="event-content">

							
								<div class="event-title">
									<h3 class="title-text"><strong>DUBAI</strong></h3>
									
								</div>
								
                                <div class="event-title">
                                <span class="subb">Address:</span>
								<p class="black-color mb-30">
									Zeyed Anaye. The  Green Community, Westgate Entrance- Green Community Villege, Dubai, UAE
								</p>
                                </div>
                                <div class="event-title">
                                <span class="subb">Phone:</span>
								<p class="black-color mb-30">
									+971 12 34 56 789
								</p>
                                </div>
                                <div class="event-title">
                                <span class="subb">Email:</span>
								<p class="black-color mb-30">
									Dubai@rgbevents.com
								</p>
                                </div>

								<div class="text-left">
									<a href="#!" class="custom-btn">Contact Now</a>
								</div>
								
							</div>
						</div>

					</div>
				</div>
				<div class="event-image">
					<div class="big-image">		
						<img src="<?php echo BASE_URL; ?>assets/images/event/1.upcoming-big.jpg" alt="Image_not_found">
					</div>
				</div>
			</div>

		</section>
		<!-- upcomming-event-section2 - end
		================================================== -->

<!-- upcomming-event-section2 - start
		================================================== -->
		<section id="upcomming-event-section2" class="upcomming-event-section2 sec-ptb-100 clearfix">

			<div class="comming-event-item">
				<div class="container">
					<div class="row justify-content-start">

						<div class="col-lg-6 col-md-12 col-sm-12">
							<div class="event-content">

								<div class="event-title">
									<h3 class="title-text"><strong>SRI LANKA</strong></h3>
									
								</div>
						
                                <div class="event-title">
                                <span class="subb">Address:</span>
								<p class="black-color mb-30">
									no. 118/5 Canal Road, Off Hill Street, Dehiwala, Sri Lanka.
								</p>
                                </div>
                                <div class="event-title">
                                <span class="subb">Phone:</span>
								<p class="black-color mb-30">
									+94 12 345 6789
								</p>
                                </div>
                                <div class="event-title">
                                <span class="subb">Email:</span>
								<p class="black-color mb-30">
									Srilanka@rgbevents.com
								</p>
                                </div>

								<div class="text-left">
									<a href="#!" class="custom-btn">Contact Now</a>
								</div>
								
							</div>
						</div>

					</div>
				</div>
				<div class="event-image">
					<div class="big-image">		
						<img src="<?php echo BASE_URL; ?>assets/images/event/1.upcoming-big.jpg" alt="Image_not_found">
					</div>
				</div>
			</div>

		</section>
		<!-- upcomming-event-section2 - end-->
		<br>
		<?php include('offers.php') ?>

        <?php include('footer.php') ?>

		<script src="<?php echo BASE_URL; ?>assets/js/jquery-3.3.1.min.js"></script>
		<script src="<?php echo BASE_URL; ?>assets/js/popper.min.js"></script>
		<script src="<?php echo BASE_URL; ?>assets/js/bootstrap.min.js"></script>

		<script src="<?php echo BASE_URL; ?>assets/js/slick.min.js"></script>
		<script src="<?php echo BASE_URL; ?>assets/js/owl.carousel.min.js"></script>


		<script src="<?php echo BASE_URL; ?>assets/js/gmap3.min.js"></script>
		<script src="http://maps.google.com/maps/api/js?key=AIzaSyC61_QVqt9LAhwFdlQmsNwi5aUJy9B2SyA"></script>

		<script src="<?php echo BASE_URL; ?>assets/js/atc.min.js"></script>


		<script src="<?php echo BASE_URL; ?>assets/js/jquery.magnific-popup.min.js"></script>
		<script src="<?php echo BASE_URL; ?>assets/js/isotope.pkgd.min.js"></script>
		<script src="<?php echo BASE_URL; ?>assets/js/jarallax.min.js"></script>
		<script src="<?php echo BASE_URL; ?>assets/js/jquery.mCustomScrollbar.concat.min.js"></script>


		<script src="<?php echo BASE_URL; ?>assets/js/imagesloaded.pkgd.min.js"></script>


		<script src="<?php echo BASE_URL; ?>assets/js/jquery.countdown.js"></script>


		<script src="<?php echo BASE_URL; ?>assets/js/custom.js"></script>

	</body>
</html>