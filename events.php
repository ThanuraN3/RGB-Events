<!DOCTYPE html>
<html lang="en">

	<head>

		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
		<meta http-equiv="x-ua-compatible" content="ie=edge">

		<title>Harmoni - Event List</title>
		<link rel="shortcut icon" href="assets/images/favicon.png">

		<!-- fraimwork - css include -->
		<link rel="stylesheet" type="text/css" href="assets/css/bootstrap.min.css">

		<!-- icon css include -->
		<link rel="stylesheet" type="text/css" href="assets/css/fontawesome-all.css">
		<link rel="stylesheet" type="text/css" href="assets/css/flaticon.css">

		<!-- carousel css include -->
		<link rel="stylesheet" type="text/css" href="assets/css/slick.css">
		<link rel="stylesheet" type="text/css" href="assets/css/slick-theme.css">
		<link rel="stylesheet" type="text/css" href="assets/css/animate.css">
		<link rel="stylesheet" type="text/css" href="assets/css/owl.carousel.min.css">
		<link rel="stylesheet" type="text/css" href="assets/css/owl.theme.default.min.css">

		<!-- others css include -->
		<link rel="stylesheet" type="text/css" href="assets/css/magnific-popup.css">
		<link rel="stylesheet" type="text/css" href="assets/css/jquery.mCustomScrollbar.min.css">
		<link rel="stylesheet" type="text/css" href="assets/css/calendar.css">

		<!-- custom css include -->
		<link rel="stylesheet" type="text/css" href="assets/css/style.css">
		

	</head>


	<body class="default-header-p">




		
		<!-- backtotop - start -->
		<div id="thetop" class="thetop"></div>
		<div class='backtotop'>
			<a href="#thetop" class='scroll'>
				<i class="fas fa-angle-double-up"></i>
			</a>
		</div>
		<!-- backtotop - end -->

		<!-- preloader - start -->
		<div id="preloader"></div>
		<!-- preloader - end -->

        <?php include('header.php') ?>

		<!-- breadcrumb-section - start
		================================================== -->
		<section id="breadcrumb-section" class="breadcrumb-section clearfix">
			<div class="jarallax" style="background-image: url(assets/images/new/slide-1.jpg);">
				<div class="overlay-black">
					<div class="container">
						<div class="row justify-content-center">
							<div class="col-lg-6 col-md-12 col-sm-12">

								<!-- breadcrumb-title - start -->
								<div class="breadcrumb-title text-center mb-50">
									<span class="sub-title">RGB events</span>
									<h2 class="big-title">RGB <strong>event</strong></h2>
								</div>
								<!-- breadcrumb-title - end -->

								<!-- breadcrumb-list - start -->
								<div class="breadcrumb-list">
									<ul>
										<li class="breadcrumb-item"><a href="index-1.html" class="breadcrumb-link">Home</a></li>
										<li class="breadcrumb-item active" aria-current="page">event listing</li>
									</ul>
								</div>
								<!-- breadcrumb-list - end -->

							</div>
						</div>
					</div>
				</div>
			</div>
		</section>
		<!-- breadcrumb-section - end
		================================================== -->





		<!-- event-search-section - start
		================================================== -->
		<section id="event-search-section" class="event-search-section clearfix" style="background-image: url(assets/images/special-offer-bg.jpg);">
			<div class="container">
				<div class="row">

					<!-- section-title - start -->
					<div class="col-lg-4 col-md-12 col-sm-12">
						<div class="section-title">
							<small class="sub-title">Find best event on Harmoni</small>
							<h2 class="big-title">event <strong>Search</strong></h2>
						</div>
					</div>
					<!-- section-title - end -->

					<!-- search-form - start -->
					<div class="col-lg-8 col-md-12 col-sm-12">
						<div class="search-form form-wrapper">
							<form action="#!">

								<ul>
									<li>
										<span class="title">event keyword</span>
										<div class="form-item">
											<input type="search" placeholder="Event name,location,etc">
										</div>
									</li>
									<li>
										<span class="title">event category</span>
										<select id="event-category-select">
											<option selected="">Conference</option>
											<option value="1">Option 1</option>
											<option value="2">Option 2</option>
											<option value="3">Option 3</option>
										</select>
									</li>
									<li>
										<button type="submit" class="submit-btn">search event now</button>
									</li>
								</ul>
								
							</form>
						</div>
					</div>
					<!-- search-form - end -->
					
				</div>
			</div>
		</section>
		<!-- event-search-section - end
		================================================== -->





		<!-- event-section - start
		================================================== -->
		<section id="event-section" class="event-section bg-gray-light sec-ptb-100 clearfix">
			<div class="container">
				<div class="row justify-content-center">

					<!-- - start -->
					<div class="col-lg-9 col-md-12 col-sm-12">

						<div class="search-result-form">
							<form action="#!">
								<ul>

									<li>
										<span class="result-text">5 Search results from 20 events</span>
									</li>
									<li>
										<label for="year-select">Years:</label>
										<select id="year-select">
											<option selected="">2018</option>
											<option value="1">2019</option>
											<option value="2">2020</option>
											<option value="3">2021</option>
										</select>
									</li>
									<li>
										<label for="munth-select">Months:</label>
										<select id="munth-select">
											<option selected="">June</option>
											<option value="1">July</option>
											<option value="2">August</option>
										</select>
									</li>

								</ul>
							</form>

							<ul class="nav event-layout-btngroup">
								<li><a class="active" data-toggle="tab" href="#list-style"><i class="fas fa-th-list"></i></a></li>
								<li><a data-toggle="tab" href="#grid-style"><i class="fas fa-th"></i></a></li>
							</ul>
						</div>

						<div class="tab-content">
							<div id="list-style" class="tab-pane fade in active show">

								<!-- event-item - start -->
								<div class="event-list-item clearfix">

									<!-- event-image - start -->
									<div class="event-image">
										<div class="post-date">
											<span class="date">26</span>
											<small class="month">june</small>
										</div>
										<img src="assets/images/events/Awards-2.jpg" alt="Image_not_found">
									</div>
									<!-- event-image - end -->

									<!-- event-content - start -->
									<div class="event-content">
										<div class="event-title mb-15">
											<h3 class="title">
												<strong>Award Ceremonies</strong>
											</h3>
										</div>
										<p class="discription-text mb-30">
											Lorem ipsum dollor site amet the best  consectuer diam nerdistin adipiscing elites sed diam nonummy nibh the ebest uismod delgas tincidunt ut laoreet dolore magna...
										</p>
										<div class="event-info-list ul-li clearfix">
											<ul>
												<li>
													<a href="#!" class="tickets-details-btn">
														View details
													</a>
												</li>
											</ul>
										</div>
									</div>
									<!-- event-content - end -->

								</div>
								<!-- event-item - end -->

								<!-- event-item - start -->
								<div class="event-list-item clearfix">

									<!-- event-image - start -->
									<div class="event-image">
										<div class="post-date">
											<span class="date">26</span>
											<small class="month">june</small>
										</div>
										<img src="assets/images/events/Product-Launch.jpg" alt="Image_not_found">
									</div>
									<!-- event-image - end -->

									<!-- event-content - start -->
									<div class="event-content">
										<div class="event-title mb-15">
											<h3 class="title">
												<strong>Product Launch</strong>
											</h3>
										</div>
										<p class="discription-text mb-30">
											Lorem ipsum dollor site amet the best  consectuer diam nerdistin adipiscing elites sed diam nonummy nibh the ebest uismod delgas tincidunt ut laoreet dolore magna...
										</p>
										<div class="event-info-list ul-li clearfix">
											<ul>
												<li>
													<a href="#!" class="tickets-details-btn">
														view details
													</a>
												</li>
											</ul>
										</div>
									</div>
									<!-- event-content - end -->

								</div>
								<!-- event-item - end -->

								<!-- event-item - start -->
								<div class="event-list-item clearfix">

									<!-- event-image - start -->
									<div class="event-image">
										<div class="post-date">
											<span class="date">26</span>
											<small class="month">june</small>
										</div>
										<img src="assets/images/events/exhibition.jpg" alt="Image_not_found">
									</div>
									<!-- event-image - end -->

									<!-- event-content - start -->
									<div class="event-content">
										<div class="event-title mb-15">
											<h3 class="title">
												<strong>Exhibitions</strong>
											</h3>
										</div>
										<p class="discription-text mb-30">
											Lorem ipsum dollor site amet the best  consectuer diam nerdistin adipiscing elites sed diam nonummy nibh the ebest uismod delgas tincidunt ut laoreet dolore magna...
										</p>
										<div class="event-info-list ul-li clearfix">
											<ul>
												<li>
													<a href="#!" class="tickets-details-btn">
														view details
													</a>
												</li>
											</ul>
										</div>
									</div>
									<!-- event-content - end -->

								</div>
								<!-- event-item - end -->

								<!-- event-item - start -->
								<div class="event-list-item clearfix">

									<!-- event-image - start -->
									<div class="event-image">
										<div class="post-date">
											<span class="date">26</span>
											<small class="month">june</small>
										</div>
										<img src="assets/images/events/Conference.jpg" alt="Image_not_found">
									</div>
									<!-- event-image - end -->

									<!-- event-content - start -->
									<div class="event-content">
										<div class="event-title mb-15">
											<h3 class="title">
												<strong>Dealer Convention</strong>
											</h3>
										</div>
										<p class="discription-text mb-30">
											Lorem ipsum dollor site amet the best  consectuer diam nerdistin adipiscing elites sed diam nonummy nibh the ebest uismod delgas tincidunt ut laoreet dolore magna...
										</p>
										<div class="event-info-list ul-li clearfix">
											<ul>
												<li>
													<a href="#!" class="tickets-details-btn">
														view details
													</a>
												</li>
											</ul>
										</div>
									</div>
									<!-- event-content - end -->

								</div>
								<!-- event-item - end -->
                                <!-- event-item - start -->
								    <div class="event-list-item clearfix">

									<!-- event-image - start -->
									<div class="event-image">
										<div class="post-date">
											<span class="date">26</span>
											<small class="month">june</small>
										</div>
										<img src="assets/images/event/event-5.jpg" alt="Image_not_found">
									</div>
									<!-- event-image - end -->

									<!-- event-content - start -->
									<div class="event-content">
										<div class="event-title mb-15">
											<h3 class="title">
												<strong>Opening Ceremonies</strong>
											</h3>
										</div>
										<p class="discription-text mb-30">
											Lorem ipsum dollor site amet the best  consectuer diam nerdistin adipiscing elites sed diam nonummy nibh the ebest uismod delgas tincidunt ut laoreet dolore magna...
										</p>
										<div class="event-info-list ul-li clearfix">
											<ul>
												<li>
													<a href="#!" class="tickets-details-btn">
														view details
													</a>
												</li>
											</ul>
										</div>
									</div>
									<!-- event-content - end -->

								</div>
								<!-- event-item - end -->
                                
                                <!-- event-item - start -->
								    <div class="event-list-item clearfix">

                                        <!-- event-image - start -->
                                        <div class="event-image">
                                            <div class="post-date">
                                                <span class="date">26</span>
                                                <small class="month">june</small>
                                            </div>
                                            <img src="assets/images/events/Conference.jpg" alt="Image_not_found">
                                        </div>
                                        <!-- event-image - end -->

                                        <!-- event-content - start -->
                                        <div class="event-content">
                                            <div class="event-title mb-15">
                                                <h3 class="title">
                                                    <strong>Press Conferences</strong>
                                                </h3>
                                            </div>
                                            <p class="discription-text mb-30">
                                                Lorem ipsum dollor site amet the best  consectuer diam nerdistin adipiscing elites sed diam nonummy nibh the ebest uismod delgas tincidunt ut laoreet dolore magna...
                                            </p>
                                            <div class="event-info-list ul-li clearfix">
                                                <ul>
                                                    <li>
                                                        <a href="#!" class="tickets-details-btn">
                                                            view details
                                                        </a>
                                                    </li>
                                                </ul>
                                            </div>
                                        </div>
                                        <!-- event-content - end -->

                                        </div>
                                        <!-- event-item - end -->

                                            <!-- event-item - start -->
								            <div class="event-list-item clearfix">

                                                <!-- event-image - start -->
                                                <div class="event-image">
                                                    <div class="post-date">
                                                        <span class="date">26</span>
                                                        <small class="month">june</small>
                                                    </div>
                                                    <img src="assets/images/events/Conference.jpg" alt="Image_not_found">
                                                </div>
                                                <!-- event-image - end -->

                                                <!-- event-content - start -->
                                                <div class="event-content">
                                                    <div class="event-title mb-15">
                                                        <h3 class="title">
                                                            <strong>Sport Events</strong>
                                                        </h3>
                                                    </div>
                                                    <p class="discription-text mb-30">
                                                        Lorem ipsum dollor site amet the best  consectuer diam nerdistin adipiscing elites sed diam nonummy nibh the ebest uismod delgas tincidunt ut laoreet dolore magna...
                                                    </p>
                                                    <div class="event-info-list ul-li clearfix">
                                                        <ul>
                                                            <li>
                                                                <a href="#!" class="tickets-details-btn">
                                                                    view details
                                                                </a>
                                                            </li>
                                                        </ul>
                                                    </div>
                                                </div>
                                                <!-- event-content - end -->

                                            </div>
                                            <!-- event-item - end -->

                                            <!-- event-item - start -->
								            <div class="event-list-item clearfix">

                                                            <!-- event-image - start -->
                                                            <div class="event-image">
                                                                <div class="post-date">
                                                                    <span class="date">26</span>
                                                                    <small class="month">june</small>
                                                                </div>
                                                                <img src="assets/images/events/Conference.jpg" alt="Image_not_found">
                                                            </div>
                                                            <!-- event-image - end -->

                                                            <!-- event-content - start -->
                                                            <div class="event-content">
                                                                <div class="event-title mb-15">
                                                                    <h3 class="title">
                                                                        <strong>Fashion show</strong>
                                                                    </h3>
                                                                </div>
                                                                <p class="discription-text mb-30">
                                                                    Lorem ipsum dollor site amet the best  consectuer diam nerdistin adipiscing elites sed diam nonummy nibh the ebest uismod delgas tincidunt ut laoreet dolore magna...
                                                                </p>
                                                                <div class="event-info-list ul-li clearfix">
                                                                    <ul>
                                                                        <li>
                                                                            <a href="#!" class="tickets-details-btn">
                                                                                view details
                                                                            </a>
                                                                        </li>
                                                                    </ul>
                                                                </div>
                                                            </div>
                                                            <!-- event-content - end -->

                                                            </div>
                                                            <!-- event-item - end -->

                                                            <!-- event-item - start -->
                                                              <div class="event-list-item clearfix">

                                                                    <!-- event-image - start -->
                                                                    <div class="event-image">
                                                                        <div class="post-date">
                                                                            <span class="date">26</span>
                                                                            <small class="month">june</small>
                                                                        </div>
                                                                        <img src="assets/images/events/Conference.jpg" alt="Image_not_found">
                                                                    </div>
                                                                    <!-- event-image - end -->

                                                                    <!-- event-content - start -->
                                                                    <div class="event-content">
                                                                        <div class="event-title mb-15">
                                                                            <h3 class="title">
                                                                                <strong>Brand Activations & Promotions</strong>
                                                                            </h3>
                                                                        </div>
                                                                        <p class="discription-text mb-30">
                                                                            Lorem ipsum dollor site amet the best  consectuer diam nerdistin adipiscing elites sed diam nonummy nibh the ebest uismod delgas tincidunt ut laoreet dolore magna...
                                                                        </p>
                                                                        <div class="event-info-list ul-li clearfix">
                                                                            <ul>
                                                                                <li>
                                                                                    <a href="#!" class="tickets-details-btn">
                                                                                        view details
                                                                                    </a>
                                                                                </li>
                                                                            </ul>
                                                                        </div>
                                                                    </div>
                                                                    <!-- event-content - end -->

                                                                    </div>
                                                                    <!-- event-item - end -->


                                                        <!-- event-item - start -->
                                                        <div class="event-list-item clearfix">

                                                        <!-- event-image - start -->
                                                        <div class="event-image">
                                                            <div class="post-date">
                                                                <span class="date">26</span>
                                                                <small class="month">june</small>
                                                            </div>
                                                            <img src="assets/images/events/Conference.jpg" alt="Image_not_found">
                                                        </div>
                                                        <!-- event-image - end -->

                                                        <!-- event-content - start -->
                                                        <div class="event-content">
                                                            <div class="event-title mb-15">
                                                                <h3 class="title">
                                                                    <strong>Public and Private Events</strong>
                                                                </h3>
                                                            </div>
                                                            <p class="discription-text mb-30">
                                                                Lorem ipsum dollor site amet the best  consectuer diam nerdistin adipiscing elites sed diam nonummy nibh the ebest uismod delgas tincidunt ut laoreet dolore magna...
                                                            </p>
                                                            <div class="event-info-list ul-li clearfix">
                                                                <ul>
                                                                    <li>
                                                                        <a href="#!" class="tickets-details-btn">
                                                                            view details
                                                                        </a>
                                                                    </li>
                                                                </ul>
                                                            </div>
                                                        </div>
                                                        <!-- event-content - end -->

                                                        </div>
                                                        <!-- event-item - end -->

                                                        <!-- event-item - start -->
                                                        <div class="event-list-item clearfix">

                                                        <!-- event-image - start -->
                                                        <div class="event-image">
                                                            <div class="post-date">
                                                                <span class="date">26</span>
                                                                <small class="month">june</small>
                                                            </div>
                                                            <img src="assets/images/events/Conference.jpg" alt="Image_not_found">
                                                        </div>
                                                        <!-- event-image - end -->

                                                        <!-- event-content - start -->
                                                        <div class="event-content">
                                                            <div class="event-title mb-15">
                                                                <h3 class="title">
                                                                    <strong>Seminas</strong>
                                                                </h3>
                                                            </div>
                                                            <p class="discription-text mb-30">
                                                                Lorem ipsum dollor site amet the best  consectuer diam nerdistin adipiscing elites sed diam nonummy nibh the ebest uismod delgas tincidunt ut laoreet dolore magna...
                                                            </p>
                                                            <div class="event-info-list ul-li clearfix">
                                                                <ul>
                                                                    <li>
                                                                        <a href="#!" class="tickets-details-btn">
                                                                            view details
                                                                        </a>
                                                                    </li>
                                                                </ul>
                                                            </div>
                                                        </div>
                                                        <!-- event-content - end -->

                                                        </div>
                                                        <!-- event-item - end -->

                                                        <!-- event-item - start -->
                                                        <div class="event-list-item clearfix">

                                                        <!-- event-image - start -->
                                                        <div class="event-image">
                                                            <div class="post-date">
                                                                <span class="date">26</span>
                                                                <small class="month">june</small>
                                                            </div>
                                                            <img src="assets/images/events/Conference.jpg" alt="Image_not_found">
                                                        </div>
                                                        <!-- event-image - end -->

                                                        <!-- event-content - start -->
                                                        <div class="event-content">
                                                            <div class="event-title mb-15">
                                                                <h3 class="title">
                                                                    <strong>Conference and meetings</strong>
                                                                </h3>
                                                            </div>
                                                            <p class="discription-text mb-30">
                                                                Lorem ipsum dollor site amet the best  consectuer diam nerdistin adipiscing elites sed diam nonummy nibh the ebest uismod delgas tincidunt ut laoreet dolore magna...
                                                            </p>
                                                            <div class="event-info-list ul-li clearfix">
                                                                <ul>
                                                                    <li>
                                                                        <a href="#!" class="tickets-details-btn">
                                                                            view details
                                                                        </a>
                                                                    </li>
                                                                </ul>
                                                            </div>
                                                        </div>
                                                        <!-- event-content - end -->

                                                        </div>
                                                        <!-- event-item - end -->

                                                        <!-- event-item - start -->
                                                        <div class="event-list-item clearfix">

                                                        <!-- event-image - start -->
                                                        <div class="event-image">
                                                            <div class="post-date">
                                                                <span class="date">26</span>
                                                                <small class="month">june</small>
                                                            </div>
                                                            <img src="assets/images/events/Conference.jpg" alt="Image_not_found">
                                                        </div>
                                                        <!-- event-image - end -->

                                                        <!-- event-content - start -->
                                                        <div class="event-content">
                                                            <div class="event-title mb-15">
                                                                <h3 class="title">
                                                                    <strong>Outbound Training</strong>
                                                                </h3>
                                                            </div>
                                                            <p class="discription-text mb-30">
                                                                Lorem ipsum dollor site amet the best  consectuer diam nerdistin adipiscing elites sed diam nonummy nibh the ebest uismod delgas tincidunt ut laoreet dolore magna...
                                                            </p>
                                                            <div class="event-info-list ul-li clearfix">
                                                                <ul>
                                                                    <li>
                                                                        <a href="#!" class="tickets-details-btn">
                                                                            view details
                                                                        </a>
                                                                    </li>
                                                                </ul>
                                                            </div>
                                                        </div>
                                                        <!-- event-content - end -->

                                                        </div>
                                                        <!-- event-item - end -->


                                            <!-- event-item - end -->

								<!-- <div class="pagination ul-li clearfix">
									<ul>
										<li class="page-item prev-item">
											<a class="page-link" href="#!">Prev</a>
										</li>
										<li class="page-item"><a class="page-link" href="#!">01</a></li>
										<li class="page-item active"><a class="page-link" href="#!">02</a></li>
										<li class="page-item"><a class="page-link" href="#!">03</a></li>
										<li class="page-item"><a class="page-link" href="#!">04</a></li>
										<li class="page-item"><a class="page-link" href="#!">05</a></li>
										<li class="page-item next-item">
											<a class="page-link" href="#!">Next</a>
										</li>
									</ul>
								</div> -->

							</div>

							<div id="grid-style" class="tab-pane fade">
								<div class="row justify-content-center">

									<!-- event-grid-item - start -->
									<div class="col-lg-6 col-md-6 col-sm-12">
										<div class="event-grid-item">
											<!-- event-image - start -->
											<div class="event-image">
												<div class="post-date">
													<span class="date">26</span>
													<small class="month">june</small>
												</div>
												<img src="assets/images/events/Awards.jpg" alt="Image_not_found">
											</div>
											<!-- event-image - end -->

											<!-- event-content - start -->
											<div class="event-content">
												<div class="event-title mb-30">
													<h3 class="title">
														Awards Ceremonies
													</h3>
													
												</div>
												<a href="#!" class="tickets-details-btn">
													view details
												</a>
											</div>
											<!-- event-content - end -->
										</div>
									</div>
									<!-- event-grid-item - end -->

									<!-- event-grid-item - start -->
									<div class="col-lg-6 col-md-6 col-sm-12">
										<div class="event-grid-item">
											<!-- event-image - start -->
											<div class="event-image">
												<div class="post-date">
													<span class="date">26</span>
													<small class="month">june</small>
												</div>
												<img src="assets/images/event/2.event-grid.jpg" alt="Image_not_found">
											</div>
											<!-- event-image - end -->

											<!-- event-content - start -->
											<div class="event-content">
												<div class="event-title mb-30">
													<h3 class="title">
														Product Launch
													</h3>
													
												</div>
												<a href="#!" class="tickets-details-btn">
													View details
												</a>
											</div>
											<!-- event-content - end -->
										</div>
									</div>
									<!-- event-grid-item - end -->

									<!-- event-grid-item - start -->
									<div class="col-lg-6 col-md-6 col-sm-12">
										<div class="event-grid-item">
											<!-- event-image - start -->
											<div class="event-image">
												<div class="post-date">
													<span class="date">26</span>
													<small class="month">june</small>
												</div>
												<img src="assets/images/event/1.event-grid.jpg" alt="Image_not_found">
											</div>
											<!-- event-image - end -->

											<!-- event-content - start -->
											<div class="event-content">
												<div class="event-title mb-30">
													<h3 class="title">
														Exhibition
													</h3>
												</div>
												<a href="#!" class="tickets-details-btn">
													View details
												</a>
											</div>
											<!-- event-content - end -->
										</div>
									</div>
									<!-- event-grid-item - end -->

									<!-- event-grid-item - start -->
									<div class="col-lg-6 col-md-6 col-sm-12">
										<div class="event-grid-item">
											<!-- event-image - start -->
											<div class="event-image">
												<div class="post-date">
													<span class="date">26</span>
													<small class="month">june</small>
												</div>
												<img src="assets/images/event/2.event-grid.jpg" alt="Image_not_found">
											</div>
											<!-- event-image - end -->

											<!-- event-content - start -->
											<div class="event-content">
												<div class="event-title mb-30">
													<h3 class="title">
														Dealer Conventions
													</h3>
												</div>
												<a href="#!" class="tickets-details-btn">
													View details
												</a>
											</div>
											<!-- event-content - end -->
										</div>
									</div>
									<!-- event-grid-item - end -->

									<!-- event-grid-item - start -->
									<div class="col-lg-6 col-md-6 col-sm-12">
										<div class="event-grid-item">
											<!-- event-image - start -->
											<div class="event-image">
												<div class="post-date">
													<span class="date">26</span>
													<small class="month">june</small>
												</div>
												<img src="assets/images/event/1.event-grid.jpg" alt="Image_not_found">
											</div>
											<!-- event-image - end -->

											<!-- event-content - start -->
											<div class="event-content">
												<div class="event-title mb-30">
													<h3 class="title">
														Opening Ceremonies
													</h3>
												</div>
												<a href="#!" class="tickets-details-btn">
													View details
												</a>
											</div>
											<!-- event-content - end -->
										</div>
									</div>
									<!-- event-grid-item - end -->

									<!-- event-grid-item - start -->
									<div class="col-lg-6 col-md-6 col-sm-12">
										<div class="event-grid-item">
											<!-- event-image - start -->
											<div class="event-image">
												<div class="post-date">
													<span class="date">26</span>
													<small class="month">june</small>
												</div>
												<img src="assets/images/event/2.event-grid.jpg" alt="Image_not_found">
											</div>
											<!-- event-image - end -->

											<!-- event-content - start -->
											<div class="event-content">
												<div class="event-title mb-30">
													<h3 class="title">
														Press Conferences
													</h3>
												</div>
												<a href="#!" class="tickets-details-btn">
													View details
												</a>
											</div>
											<!-- event-content - end -->
										</div>
									</div>
									<!-- event-grid-item - end -->

                                    <!-- event-grid-item - start -->
									<div class="col-lg-6 col-md-6 col-sm-12">
										<div class="event-grid-item">
											<!-- event-image - start -->
											<div class="event-image">
												<div class="post-date">
													<span class="date">26</span>
													<small class="month">june</small>
												</div>
												<img src="assets/images/event/2.event-grid.jpg" alt="Image_not_found">
											</div>
											<!-- event-image - end -->

											<!-- event-content - start -->
											<div class="event-content">
												<div class="event-title mb-30">
													<h3 class="title">
														Sport Events
													</h3>
												</div>
												<a href="#!" class="tickets-details-btn">
													View details
												</a>
											</div>
											<!-- event-content - end -->
										</div>
									</div>
									<!-- event-grid-item - end -->

                                    <!-- event-grid-item - start -->
									<div class="col-lg-6 col-md-6 col-sm-12">
										<div class="event-grid-item">
											<!-- event-image - start -->
											<div class="event-image">
												<div class="post-date">
													<span class="date">26</span>
													<small class="month">june</small>
												</div>
												<img src="assets/images/event/2.event-grid.jpg" alt="Image_not_found">
											</div>
											<!-- event-image - end -->

											<!-- event-content - start -->
											<div class="event-content">
												<div class="event-title mb-30">
													<h3 class="title">
														Fashion Show
													</h3>
												</div>
												<a href="#!" class="tickets-details-btn">
													View details
												</a>
											</div>
											<!-- event-content - end -->
										</div>
									</div>
									<!-- event-grid-item - end -->

                                    <!-- event-grid-item - start -->
									<div class="col-lg-6 col-md-6 col-sm-12">
										<div class="event-grid-item">
											<!-- event-image - start -->
											<div class="event-image">
												<div class="post-date">
													<span class="date">26</span>
													<small class="month">june</small>
												</div>
												<img src="assets/images/event/2.event-grid.jpg" alt="Image_not_found">
											</div>
											<!-- event-image - end -->

											<!-- event-content - start -->
											<div class="event-content">
												<div class="event-title mb-30">
													<h3 class="title">
														Brand Activations & Promotions
													</h3>
												</div>
												<a href="#!" class="tickets-details-btn">
													View details
												</a>
											</div>
											<!-- event-content - end -->
										</div>
									</div>
									<!-- event-grid-item - end -->

                                    <!-- event-grid-item - start -->
									<div class="col-lg-6 col-md-6 col-sm-12">
										<div class="event-grid-item">
											<!-- event-image - start -->
											<div class="event-image">
												<div class="post-date">
													<span class="date">26</span>
													<small class="month">june</small>
												</div>
												<img src="assets/images/event/2.event-grid.jpg" alt="Image_not_found">
											</div>
											<!-- event-image - end -->

											<!-- event-content - start -->
											<div class="event-content">
												<div class="event-title mb-30">
													<h3 class="title">
														Public and Private Events
													</h3>
												</div>
												<a href="#!" class="tickets-details-btn">
													View details
												</a>
											</div>
											<!-- event-content - end -->
										</div>
									</div>
									<!-- event-grid-item - end -->

                                    <!-- event-grid-item - start -->
									<div class="col-lg-6 col-md-6 col-sm-12">
										<div class="event-grid-item">
											<!-- event-image - start -->
											<div class="event-image">
												<div class="post-date">
													<span class="date">26</span>
													<small class="month">june</small>
												</div>
												<img src="assets/images/event/2.event-grid.jpg" alt="Image_not_found">
											</div>
											<!-- event-image - end -->

											<!-- event-content - start -->
											<div class="event-content">
												<div class="event-title mb-30">
													<h3 class="title">
														Seminas
													</h3>
												</div>
												<a href="#!" class="tickets-details-btn">
													View details
												</a>
											</div>
											<!-- event-content - end -->
										</div>
									</div>
									<!-- event-grid-item - end -->

                                    <!-- event-grid-item - start -->
									<div class="col-lg-6 col-md-6 col-sm-12">
										<div class="event-grid-item">
											<!-- event-image - start -->
											<div class="event-image">
												<div class="post-date">
													<span class="date">26</span>
													<small class="month">june</small>
												</div>
												<img src="assets/images/event/2.event-grid.jpg" alt="Image_not_found">
											</div>
											<!-- event-image - end -->

											<!-- event-content - start -->
											<div class="event-content">
												<div class="event-title mb-30">
													<h3 class="title">
														Conference and Meetings
													</h3>
												</div>
												<a href="#!" class="tickets-details-btn">
													View details
												</a>
											</div>
											<!-- event-content - end -->
										</div>
									</div>
									<!-- event-grid-item - end -->

                                    <!-- event-grid-item - start -->
									<div class="col-lg-6 col-md-6 col-sm-12">
										<div class="event-grid-item">
											<!-- event-image - start -->
											<div class="event-image">
												<div class="post-date">
													<span class="date">26</span>
													<small class="month">june</small>
												</div>
												<img src="assets/images/event/2.event-grid.jpg" alt="Image_not_found">
											</div>
											<!-- event-image - end -->

											<!-- event-content - start -->
											<div class="event-content">
												<div class="event-title mb-30">
													<h3 class="title">
														Outbound Training
													</h3>
												</div>
												<a href="#!" class="tickets-details-btn">
													View details
												</a>
											</div>
											<!-- event-content - end -->
										</div>
									</div>
									<!-- event-grid-item - end -->
								</div>
							</div>
						</div>

					</div>
					<!-- - end -->
					
				</div>
			</div>
		</section>
		<!-- event-section - end
		================================================== -->

        <?php include('footer.php') ?>

		<!-- fraimwork - jquery include -->
		<script src="assets/js/jquery-3.3.1.min.js"></script>
		<script src="assets/js/popper.min.js"></script>
		<script src="assets/js/bootstrap.min.js"></script>

		<!-- carousel jquery include -->
		<script src="assets/js/slick.min.js"></script>
		<script src="assets/js/owl.carousel.min.js"></script>

		<!-- map jquery include -->
		<script src="assets/js/gmap3.min.js"></script>
		<script src="http://maps.google.com/maps/api/js?key=AIzaSyC61_QVqt9LAhwFdlQmsNwi5aUJy9B2SyA"></script>

		<!-- calendar jquery include -->
		<script src="assets/js/atc.min.js"></script>

		<!-- others jquery include -->
		<script src="assets/js/jquery.magnific-popup.min.js"></script>
		<script src="assets/js/isotope.pkgd.min.js"></script>
		<script src="assets/js/jarallax.min.js"></script>
		<script src="assets/js/jquery.mCustomScrollbar.concat.min.js"></script>

		<!-- gallery img loaded - jqury include -->
		<script src="assets/js/imagesloaded.pkgd.min.js"></script>

		<!-- multy count down - jqury include -->
		<script src="assets/js/jquery.countdown.js"></script>

		<!-- custom jquery include -->
		<script src="assets/js/custom.js"></script>





	</body>
</html>