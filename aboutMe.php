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
	<?=getHeaderFor('aboutMe');?>

    <header class="page-header" style="background-image: url(assets/images/_inner-bg.jpg);">
        <div class="container">
            <ol class="bread">
                <li>
                    <a href="index.php"><span>Home</span></a>
                </li>
                <li class="divider"><span>|</span></li>
                <li>
                    <a href="#">Me & The Project</a></li>
            </ol>
            <h1>Esther Ribeiro</h1>
        </div>
    </header>

	<div class="container">
        <div class="inner inner-two-col row">
            <div class="col-lg-12 col-md-12">
                <div class="blog-post text-page">
                    <div class="main-photo-cutted">
						<video class="main-photo full-width" alt="Esther Ribeiro" style="border-radius: 2rem;" controls>
							<source src="assets/videos/about_me.mp4" type="video/mp4">
							Your browser does not support the video tag.
						</video>

                    </div>
					<h3>Hi there, I'm Esther!</h3>
                    <p>Let me tell you a little bit about myself... I’m a passionate girl who loves do things wich help my community and nature ,last year we discovered this program and my mom decided putting me ,I tough is just a camp but after the camp it turns in a competition and I did great things,trips ,curiosity’s since something that I could enjoy in my career like be a biologist,a good influence in my community or just someone who help my neighbor be in good an beautiful shape ,I’m in 7 grade ,since I’m so young I have a great and big dreams</p>
					<hr>
                </div>
            </div>
        </div>
	</div>
	
	<?= file_get_contents('pages/share.html'); ?>

	<footer>
		<div class="container">
			<?=file_get_contents('http://cdn.isaquecosta.com.br/pages/defaults/footer.php?type=light');?>
		</div>
	</footer>
	<script type="text/javascript" src="assets/js/jquery.min.js"></script>
	<script src="https://ajax.googleapis.com/ajax/libs/jqueryui/1.12.1/jquery-ui.min.js"></script>
	<script type="text/javascript" src="assets/js/plugins.js"></script>
	<script src="assets/js/map-style.js"></script>
	<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyCTRSHf8sjMCfK9PHPJxjJkwrCIo5asIzE"></script>
	<script type="text/javascript" src="assets/js/scripts.js"></script>
	<script type="text/javascript" src="assets/js/jquery.pixlayout.min.js"></script>

</body>

</html>