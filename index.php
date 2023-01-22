<!DOCTYPE html>
<html lang="en" class="no-js">

<head>
	<!-- HEAD DEFAULTS - START -->

	<!-- META DEFAULT -->
	<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

	<meta name="robots" content="index, follow" />
	<meta name="author" content="Isaque Costa" />

	<!-- META CLIENT -->
	<meta name="description" content="Isaque Costa - Desenvolvedor Web" />
	<meta name="keywords"
		content="Designer, site, website, meu site, novo site, como criar um site, responsivo, desenvolvimento, desenvolvimento de sites, aplicativos, android, iOS, iPhone, apple">

	<!-- CLIENT TITLE -->
	<title>Esther's Stewardship Project</title>

	<!-- DEFAULT FAVICONS -->
	<?php $icon = file_get_contents('http://cdn.isaquecosta.com.br/pages/defaults/favicon.php'); ?>

	<link rel="shortcut icon" href="<?=$icon;?>">
	<link rel="apple-touch-icon" href="<?=$icon;?>">
	<link rel="apple-touch-icon" sizes="76x76" href="<?=$icon;?>">
	<link rel="apple-touch-icon" sizes="120x120" href="<?=$icon;?>">
	<link rel="apple-touch-icon" sizes="152x152" href="<?=$icon;?>">
	<!-- END OF DEFAULT CONFIGS -->

	<!-- HEAD DEFAULTS - END -->

	<?=file_get_contents('http://cdn.isaquecosta.com.br/pages/defaults/slimScroll.php');?>

	<link href="assets/css/bootstrap-grid.css" rel="stylesheet">
	<link href="assets/css/font-awesome.css" rel="stylesheet">
	<link href="assets/css/swiper.css" rel="stylesheet">
	<link href="assets/css/swipebox.css" rel="stylesheet">
	<link href="assets/css/zoomslider.css" rel="stylesheet">
	<link href="assets/css/style.css" rel="stylesheet">
	<link rel="stylesheet" href="https://ajax.googleapis.com/ajax/libs/jqueryui/1.12.1/themes/smoothness/jquery-ui.css">

	<link href="https://fonts.googleapis.com/css?family=Fira+Sans+Condensed:700,800%7COpen+Sans:400,600,700"
		rel="stylesheet">

	<script type="text/javascript" src="assets/js/modernizr-2.6.2.min.js"></script>

</head>

<body>

	<?php require_once 'pages/navigation.php'; ?>
	<?=getHeaderFor('home');?>


	<section id="slider-full" class="slider-full zs-enabled" data-zs-bullets="true" data-zs-speed="22000"
		data-zs-interval="10000" data-zs-switchspeed="400"
		data-zs-src="assets/images/_slider-2.jpg"
		data-zs-overlay="false">
		<div class="zs-slideshow">
			<div class="zs-slides">
				<div class="zs-slide zs-slide-0 active"
					style="background-image: url(assets/images/_slider-2.jpg); opacity: 1; transition: transform 22000ms ease-out 0s, opacity 800ms ease 0s; transform: scale(1.2, 1.2); z-index: 2;">
				</div>
			</div>
		</div>
		<div class="container" style="z-index: 2;">
			<h1><span class="green" data-sr-id="2"
					style="visibility: visible; transform: translateX(0px) scale(1); opacity: 1; transition: all 0.3s ease 0s;">GIVE BACK</span>
				<span data-sr-id="3"
					style="visibility: visible; transform: translateX(0px) scale(1); opacity: 1; transition: all 0.3s ease 0s;">TO THE</span>
				<span data-sr-id="4"
					style="visibility: visible; transform: translateX(0px) scale(1); opacity: 1; transition: all 0.3s ease 0s;">WORLD!</span>
			</h1>
		</div>
	</section>

	<div id="get-discount">
		<div class="container">
			<div class="row">
				<div class="col-xs-12 inner">
					<div class="row">
						<div class="col-lg-3 col-md-4 percent">HELP</div>
						<div class="col-lg-6 col-md-5 txt">
							<span class="white">Our planet needs YOU</span>
							<span class="black">Learn how with me!</span>
						</div>
						<div class="col-lg-3 col-md-3">
							<a href="" class="btn btn-white btn-md">Scroll Down</a>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
	<section id="services">
		<div class="container">
			<h2 class="center corners"><span class="black">Few things that</span> YOU <span class="black">could </span> DO</h2>

			<div class="row items swiper-container swiper-container-horizontal" id="services-slider">
				<div class="swiper-wrapper" >
					<div class="col-md-3 col-sm-4 col-ms-6 col-xs-12 swiper-slide swiper-slide-active" style="width: 292.5px;">
						<div class="icon"><img src="assets/images/_service-2.png" alt="Service"></div>
						<h4>Plant Flowers</h4>
						<p>It's healthy to the planet and beautiful to the eyes. ;)</p>
					</div>
					<div class="col-md-3 col-sm-4 col-ms-6 col-xs-12 swiper-slide swiper-slide-next" style="width: 292.5px;">
						<div class="icon"><img src="assets/images/_service-3.png" alt="Service"></div>
						<h4>Compost Bin </h4>
						<p>You can do one like <a href="blog.php?post=compostbin">mine compost bin</a>.</p>
					</div>
					<div class="col-md-3 col-sm-4 col-ms-6 col-xs-12 swiper-slide" style="width: 292.5px;">
						<div class="icon"><img src="assets/images/_service-4.png" alt="Service"></div>
						<h4>Plant Tree</h4>
						<p>This is one of the best ways to improve the health of the planet and yours!</p>
					</div>
					<div class="col-md-3 col-sm-4 col-ms-6 col-xs-12 swiper-slide" style="width: 292.5px;">
						<div class="icon"><img src="assets/images/_service-5.png" alt="Service"></div>
						<h4>Save Water</h4>
						<p>Be quick in the shower, always shut the water tap while brushing your teeth...  </p>
					</div>
				</div>
			</div>
		</div>
	</section>

	<section id="special-offer">
		<div class="container">
			<div class="item">
				<h3>Compost bin</h3>
				<h2 class="no-bg">Build Yours</h2>
				<p>Follow the link bellow to see a video of me building mine!</p>
				<a href="blog.php?post=compostbin" class="btn btn-green btn-white-hover black btn-xs" style="position: absolute; bottom: 40px;">Check out my Video</a>
				<img src="assets/images/recycle.png" alt="Special" class="large">
			</div>
		</div>
	</section>

	<div id="countUp">
		<div class="row">
			<div class="col-md-3 col-sm-6 col-ms-6 center-flex">
				<span class="countNum" id="countUp-1">2721</span>
				<p>Kg of Oxigen generated by a single tree</p> <!-- New York Times -->
			</div>
			<div class="col-md-3 col-sm-6 col-ms-6 center-flex">
				<span class="countNum" id="countUp-4">160000000000</span>
				<p>dollars of food wasted in the US only last year</p> <!-- USDA.gov -->
			</div>
			<div class="col-md-3 col-sm-6 col-ms-6 center-flex">
				<span class="countNum" id="countUp-2">365</span>
				<p>days of Oxigen for 2 people, from a single tree</p> <!-- New York Times -->
			</div>
			<div class="col-md-3 col-sm-6 col-ms-6 center-flex">
				<span class="countNum" id="countUp-3">560</span>
				<p>Lt of water are "wasted" washing your car for 30 minutes</p> <!-- globo.com -->
			</div>
		</div>
	</div>
	<section id="packages" class="parallax" style="background-image: url(assets/images/_service-bg.png);">
		<div class="container">
			<h2 class="center no-bg"><i class="fa fa-arrow-up"></i> <span class="white">We can </span> improve <span class="white">those numbers </span> <i class="fa fa-arrow-up"></i></h2>

			<a href="aboutTheProject.php" class="btn btn-white-green btn-dark-hover black" style="width: 30%; display: block; margin: 30px auto;">Check out my Video</a>
			<!-- <h4 class="white">As pointed out in these counters above, the world has giving us so much... and we are not giving back, we are not returning the favor... but we SHOULD.</h4> -->
		</div>
	</section>
	<section id="catalog">
		<div class="container">
			<h2 class="center"><span class="black">My</span> Garden</h2>
			<p style="width: 70%; margin: 0 auto; margin-bottom: 45px;">When I decided my stewardship project I was thinking where I could use the soil from my decomposing bean and my mom always want a nice garden so I decided do a new garden for her. My mom boss was doing a cleanup on her garden and gave us many off the things we have here like roses bushes, morning glory, wood box bushes...</p>
			<div class="row items">
				<a href="#" class="col-md-3 col-sm-6 col-ms-6">
					<img src="assets/images/_catalog-1.jpg" alt="Catalog">
					<h4>Aren't they cute?</h4>
				</a>
				<a href="#" class="col-md-3 col-sm-6 col-ms-6">
					<img src="assets/images/_catalog-2.jpg" alt="Catalog">
					<h4>Proven winners</h4>
				</a>
				<a href="#" class="col-md-3 col-sm-6 col-ms-6">
					<img src="assets/images/_catalog-3.jpg" alt="Catalog">
					<h4>Beautiful Marigolds!</h4>
				</a>
				<a href="#" class="col-md-3 col-sm-6 col-ms-6">
					<img src="assets/images/_catalog-4.jpg" alt="Catalog">
					<h4>Little Owl and bricks</h4>
				</a>
			</div>
			<a href="gallery.php" class="align-center btn btn-green btn-xs btn-md-mob">see my gallery</a>
		</div>
	</section>

	<!-- <section id="projects">
		<div class="container">
			<h2><span class="black">Completed</span> Projects</h2>

			<div class="btns slider-filter">
				<a href="#" class="btn btn-xs btn-white-green btn-active" data-filter="">All</a>
				<a href="#" class="btn btn-xs btn-white-green" data-filter="1">Design</a>
				<a href="#" class="btn btn-xs btn-white-green" data-filter="2">Gardering</a>
				<a href="#" class="btn btn-xs btn-white-green" data-filter="3">Flowers planting</a>
				<a href="#" class="btn btn-xs btn-white-green" data-filter="4">Sowing grass</a>
			</div>

			<div class="row items">
				<div class="swiper-container slider-filter-container swiper-container-horizontal" id="project-slider">
					<div class="swiper-wrapper">
						<div class="col-md-4 col-ms-6 swiper-slide filter-item filter-type-2 swiper-slide-active"
							style="width: 400px;">
							<div class="item">
								<img src="assets/images/_project-1.jpg" class="full-width" alt="Project">
								<div class="info">
									<div class="overlay">
										<h3>Gardening<br> of Private Cottage</h3>
										<div>
											<p>Quisque commodo sit amet eros et maximus. Nullam sed vehicula ante. </p>
											<p>Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia Curae; Integer
												rutrum malesuada fermentum. </p>
										</div>
									</div>
									<a href="#" class="btn btn-green btn-white-hover black btn-xs">view</a>
								</div>
							</div>
						</div>
						<div class="col-md-4 col-ms-6 swiper-slide filter-item filter-type-3 swiper-slide-next"
							style="width: 400px;">
							<div class="item">
								<img src="assets/images/_project-2.jpg" class="full-width" alt="Project">
								<div class="info">
									<div class="overlay">
										<h3>Landscape Design<br> of Wooden House</h3>
										<div>
											<p>Quisque commodo sit amet eros et maximus. Nullam sed vehicula ante. </p>
											<p>Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia Curae; Integer
												rutrum malesuada fermentum. </p>
										</div>
									</div>
									<a href="#" class="btn btn-green btn-white-hover black btn-xs">view</a>
								</div>
							</div>
						</div>
						<div class="col-md-4 col-ms-6 swiper-slide filter-item filter-type-4" style="width: 400px;">
							<div class="item">
								<img src="assets/images/_project-3.jpg" class="full-width" alt="Project">
								<div class="info">
									<div class="overlay">
										<h3>Design and Gardening<br> of Private Cottage</h3>
										<div>
											<p>Quisque commodo sit amet eros et maximus. Nullam sed vehicula ante. </p>
											<p>Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia Curae; Integer
												rutrum malesuada fermentum. </p>
										</div>
									</div>
									<a href="#" class="btn btn-green btn-white-hover black btn-xs">view</a>
								</div>
							</div>
						</div>
						<div class="col-md-4 col-ms-6 swiper-slide filter-item filter-type-3" style="width: 400px;">
							<div class="item">
								<img src="assets/images/_project-1.jpg" class="full-width" alt="Project">
								<div class="info">
									<div class="overlay">
										<h3>Gardening<br> of Private Cottage</h3>
										<div>
											<p>Quisque commodo sit amet eros et maximus. Nullam sed vehicula ante. </p>
											<p>Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia Curae; Integer
												rutrum malesuada fermentum. </p>
										</div>
									</div>
									<a href="#" class="btn btn-green btn-white-hover black btn-xs">view</a>
								</div>
							</div>
						</div>
						<div class="col-md-4 col-ms-6 swiper-slide filter-item filter-type-4" style="width: 400px;">
							<div class="item">
								<img src="assets/images/_project-2.jpg" class="full-width" alt="Project">
								<div class="info">
									<div class="overlay">
										<h3>Landscape Design<br> of Wooden House</h3>
										<div>
											<p>Quisque commodo sit amet eros et maximus. Nullam sed vehicula ante. </p>
											<p>Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia Curae; Integer
												rutrum malesuada fermentum. </p>
										</div>
									</div>
									<a href="#" class="btn btn-green btn-white-hover black btn-xs">view</a>
								</div>
							</div>
						</div>
						<div class="col-md-4 col-ms-6 swiper-slide filter-item filter-type-1" style="width: 400px;">
							<div class="item">
								<img src="assets/images/_project-3.jpg" class="full-width" alt="Project">
								<div class="info">
									<div class="overlay">
										<h3>Design and Gardening<br> of Private Cottage</h3>
										<div>
											<p>Quisque commodo sit amet eros et maximus. Nullam sed vehicula ante. </p>
											<p>Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia Curae; Integer
												rutrum malesuada fermentum. </p>
										</div>
									</div>
									<a href="#" class="btn btn-green btn-white-hover black btn-xs">view</a>
								</div>
							</div>
						</div>
						<div class="col-md-4 col-ms-6 swiper-slide filter-item filter-type-3" style="width: 400px;">
							<div class="item">
								<img src="assets/images/_project-1.jpg" class="full-width" alt="Project">
								<div class="info">
									<div class="overlay">
										<h3>Gardening<br> of Private Cottage</h3>
										<div>
											<p>Quisque commodo sit amet eros et maximus. Nullam sed vehicula ante. </p>
											<p>Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia Curae; Integer
												rutrum malesuada fermentum. </p>
										</div>
									</div>
									<a href="#" class="btn btn-green btn-white-hover black btn-xs">view</a>
								</div>
							</div>
						</div>
						<div class="col-md-4 col-ms-6 swiper-slide filter-item filter-type-1" style="width: 400px;">
							<div class="item">
								<img src="assets/images/_project-2.jpg" class="full-width" alt="Project">
								<div class="info">
									<div class="overlay">
										<h3>Landscape Design<br> of Wooden House</h3>
										<div>
											<p>Quisque commodo sit amet eros et maximus. Nullam sed vehicula ante. </p>
											<p>Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia Curae; Integer
												rutrum malesuada fermentum. </p>
										</div>
									</div>
									<a href="#" class="btn btn-green btn-white-hover black btn-xs">view</a>
								</div>
							</div>
						</div>
						<div class="col-md-4 col-ms-6 swiper-slide filter-item filter-type-3" style="width: 400px;">
							<div class="item">
								<img src="assets/images/_project-3.jpg" class="full-width" alt="Project">
								<div class="info">
									<div class="overlay">
										<h3>Design and Gardening<br> of Private Cottage</h3>
										<div>
											<p>Quisque commodo sit amet eros et maximus. Nullam sed vehicula ante. </p>
											<p>Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia Curae; Integer
												rutrum malesuada fermentum. </p>
										</div>
									</div>
									<a href="#" class="btn btn-green btn-white-hover black btn-xs">view</a>
								</div>
							</div>
						</div>
						<div class="col-md-4 col-ms-6 swiper-slide filter-item filter-type-2" style="width: 400px;">
							<div class="item">
								<img src="assets/images/_project-1.jpg" class="full-width" alt="Project">
								<div class="info">
									<div class="overlay">
										<h3>Gardening<br> of Private Cottage</h3>
										<div>
											<p>Quisque commodo sit amet eros et maximus. Nullam sed vehicula ante. </p>
											<p>Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia Curae; Integer
												rutrum malesuada fermentum. </p>
										</div>
									</div>
									<a href="#" class="btn btn-green btn-white-hover black btn-xs">view</a>
								</div>
							</div>
						</div>
						<div class="col-md-4 col-ms-6 swiper-slide filter-item filter-type-2" style="width: 400px;">
							<div class="item">
								<img src="assets/images/_project-2.jpg" class="full-width" alt="Project">
								<div class="info">
									<div class="overlay">
										<h3>Landscape Design<br> of Wooden House</h3>
										<div>
											<p>Quisque commodo sit amet eros et maximus. Nullam sed vehicula ante. </p>
											<p>Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia Curae; Integer
												rutrum malesuada fermentum. </p>
										</div>
									</div>
									<a href="#" class="btn btn-green btn-white-hover black btn-xs">view</a>
								</div>
							</div>
						</div>
						<div class="col-md-4 col-ms-6 swiper-slide filter-item filter-type-4" style="width: 400px;">
							<div class="item">
								<img src="assets/images/_project-3.jpg" class="full-width" alt="Project">
								<div class="info">
									<div class="overlay">
										<h3>Design and Gardening<br> of Private Cottage</h3>
										<div>
											<p>Quisque commodo sit amet eros et maximus. Nullam sed vehicula ante. </p>
											<p>Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia Curae; Integer
												rutrum malesuada fermentum. </p>
										</div>
									</div>
									<a href="#" class="btn btn-green btn-white-hover black btn-xs">view</a>
								</div>
							</div>
						</div>
						<div class="col-md-4 col-ms-6 swiper-slide filter-item filter-type-1" style="width: 400px;">
							<div class="item">
								<img src="assets/images/_project-1.jpg" class="full-width" alt="Project">
								<div class="info">
									<div class="overlay">
										<h3>Gardening<br> of Private Cottage</h3>
										<div>
											<p>Quisque commodo sit amet eros et maximus. Nullam sed vehicula ante. </p>
											<p>Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia Curae; Integer
												rutrum malesuada fermentum. </p>
										</div>
									</div>
									<a href="#" class="btn btn-green btn-white-hover black btn-xs">view</a>
								</div>
							</div>
						</div>
						<div class="col-md-4 col-ms-6 swiper-slide filter-item filter-type-2" style="width: 400px;">
							<div class="item">
								<img src="assets/images/_project-2.jpg" class="full-width" alt="Project">
								<div class="info">
									<div class="overlay">
										<h3>Landscape Design<br> of Wooden House</h3>
										<div>
											<p>Quisque commodo sit amet eros et maximus. Nullam sed vehicula ante. </p>
											<p>Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia Curae; Integer
												rutrum malesuada fermentum. </p>
										</div>
									</div>
									<a href="#" class="btn btn-green btn-white-hover black btn-xs">view</a>
								</div>
							</div>
						</div>
						<div class="col-md-4 col-ms-6 swiper-slide filter-item filter-type-1" style="width: 400px;">
							<div class="item">
								<img src="assets/images/_project-3.jpg" class="full-width" alt="Project">
								<div class="info">
									<div class="overlay">
										<h3>Design and Gardening<br> of Private Cottage</h3>
										<div>
											<p>Quisque commodo sit amet eros et maximus. Nullam sed vehicula ante. </p>
											<p>Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia Curae; Integer
												rutrum malesuada fermentum. </p>
										</div>
									</div>
									<a href="#" class="btn btn-green btn-white-hover black btn-xs">view</a>
								</div>
							</div>
						</div>
						<div class="col-md-4 col-ms-6 swiper-slide filter-item filter-type-3" style="width: 400px;">
							<div class="item">
								<img src="assets/images/_project-1.jpg" class="full-width" alt="Project">
								<div class="info">
									<div class="overlay">
										<h3>Gardening<br> of Private Cottage</h3>
										<div>
											<p>Quisque commodo sit amet eros et maximus. Nullam sed vehicula ante. </p>
											<p>Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia Curae; Integer
												rutrum malesuada fermentum. </p>
										</div>
									</div>
									<a href="#" class="btn btn-green btn-white-hover black btn-xs">view</a>
								</div>
							</div>
						</div>
						<div class="col-md-4 col-ms-6 swiper-slide filter-item filter-type-4" style="width: 400px;">
							<div class="item">
								<img src="assets/images/_project-2.jpg" class="full-width" alt="Project">
								<div class="info">
									<div class="overlay">
										<h3>Landscape Design<br> of Wooden House</h3>
										<div>
											<p>Quisque commodo sit amet eros et maximus. Nullam sed vehicula ante. </p>
											<p>Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia Curae; Integer
												rutrum malesuada fermentum. </p>
										</div>
									</div>
									<a href="#" class="btn btn-green btn-white-hover black btn-xs">view</a>
								</div>
							</div>
						</div>
						<div class="col-md-4 col-ms-6 swiper-slide filter-item filter-type-3" style="width: 400px;">
							<div class="item">
								<img src="assets/images/_project-3.jpg" class="full-width" alt="Project">
								<div class="info">
									<div class="overlay">
										<h3>Design and Gardening<br> of Private Cottage</h3>
										<div>
											<p>Quisque commodo sit amet eros et maximus. Nullam sed vehicula ante. </p>
											<p>Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia Curae; Integer
												rutrum malesuada fermentum. </p>
										</div>
									</div>
									<a href="#" class="btn btn-green btn-white-hover black btn-xs">view</a>
								</div>
							</div>
						</div>
					</div>
					<div class="navigation">
						<a href="#" class="arrow-left fa fa-chevron-left swiper-button-disabled"></a>
						<a href="#" class="arrow-right fa fa-chevron-right"></a>
					</div>
				</div>
			</div>
		</div>
	</section> -->

	<section id="blog-main">
		<div class="container">
			<h2><span class="black">Latest</span> Blog Posts</h2>

			<div class="blog">
				<div class="row">
					<div class="col-lg-4 col-md-4 col-sm-6 a-a-a">
						<div class="item matchHeight" style="height: 480px;">
							<a href="blog.php?post=seaturtles" class="photo"><img src="assets/images/_gallery-32.jpg" class="full-width"
									alt="Blog"></a>
							<div class="description">
								<a href="blog.php?post=seaturtles" class="header">
									<h4>Protecting the Sea Turtles</h4>
								</a>
								<p class="text">
									Here is an idea for help keeping these adorable creatures. </p>
							</div>
							<div class="blog-info">
								<div class="row">
									<div class="col-lg-6 col-sm-12  col-xs-6">
										<a href="blog.php?post=seaturtles" class="date">23 May '19</a>
									</div>
									<div class="col-lg-6 col-sm-12 col-xs-6 right">
										<ul>
											<li class="icon-fav"><a href="#"><span class="fa fa-eye"></span>16</a></li>
											<li class="icon-comments"><a href="#"><span class="fa fa-commenting-o"></span>14</a></li>
										</ul>
									</div>
								</div>
							</div>
						</div>
					</div>
					<div class="col-lg-4 col-md-4 col-sm-6 a-a-a">
						<div class="item matchHeight" style="height: 480px;">
							<a href="blog.php?post=babybook" class="photo"><img src="assets/images/_gallery-33.jpg" class="full-width"
									alt="Blog"></a>
							<div class="description">
								<a href="blog.php?post=babybook" class="header">
									<h4>My Reclycled Baby Book</h4>
								</a>
								<p class="text">
									Check out my almost interely reclycled baby book, using card board and some other fun stuff. </p>
							</div>
							<div class="blog-info">
								<div class="row">
									<div class="col-lg-6 col-sm-12  col-xs-6">
										<a href="blog.php?post=babybook" class="date">23 May '19</a>
									</div>
									<div class="col-lg-6 col-sm-12 col-xs-6 right">
										<ul>
											<li class="icon-fav"><a href="#"><span class="fa fa-eye"></span>16</a></li>
											<li class="icon-comments"><a href="#"><span class="fa fa-commenting-o"></span>14</a></li>
										</ul>
									</div>
								</div>
							</div>
						</div>
					</div>
					<div class="col-lg-4 col-md-4 col-sm-6 a-a-a">
						<div class="item matchHeight" style="height: 480px;">
							<a href="blog.php?post=compostbin" class="photo"><img src="assets/images/_gallery-16.jpg" class="full-width"
									alt="Blog"></a>
							<div class="description">
								<a href="blog.php?post=compostbin" class="header">
									<h4>Building my Compost Bin</h4>
								</a>
								<p class="text">
									Follow me trough the day I build my first compost bin. </p>
							</div>
							<div class="blog-info">
								<div class="row">
									<div class="col-lg-6 col-sm-12  col-xs-6">
										<a href="blog.php?post=compostbin" class="date">23 May '19</a>
									</div>
									<div class="col-lg-6 col-sm-12 col-xs-6 right">
										<ul>
											<li class="icon-fav"><a href="#"><span class="fa fa-eye"></span>16</a></li>
											<li class="icon-comments"><a href="#"><span class="fa fa-commenting-o"></span>14</a></li>
										</ul>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
			<div class="btn-more"><a href="blog.php" class="btn btn-green btn-xs">see more</a></div>
		</div>
	</section>

	<section id="design-project">
		<div class="container">
			<div class="row">
				<div class="col-md-6 col-sm-12">
					<div class=" block-left matchHeight" style="height: 360px;">
						<h2 class="no-bg"><span class="white">Beautify your House</span><br> + Help the World</h2>
						<p>This is how our front door looks like now... much more charming look and eco friendly!</p>
					</div>
					<div class="divider" data-sr-id="11"
						style="; visibility: visible;  -webkit-transform: translateY(130px) scale(0.01); opacity: 1;transform: translateY(130px) scale(0.01); opacity: 1;">
					</div>
				</div>
				<div class="col-md-6 col-sm-12">
					<div class=" block-right matchHeight" style="height: 360px;"></div>
				</div>
			</div>
		</div>
	</section>

	<?= file_get_contents('pages/share.html'); ?>

	<footer>
		<div class="container">
			<?=file_get_contents('http://cdn.isaquecosta.com.br/pages/defaults/footer.php?type=light');?>
		</div>
	</footer>
	<script type="text/javascript" src="assets/js/jquery.min.js"></script>
	<script src="https://ajax.googleapis.com/ajax/libs/jqueryui/1.12.1/jquery-ui.min.js"></script>
	<script type="text/javascript" src="assets/js/plugins.js"></script>
	<script type="text/javascript" src="assets/js/scripts.js"></script>
	<script type="text/javascript" src="assets/js/jquery.pixlayout.min.js"></script>

</body>

</html>