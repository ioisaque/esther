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
	<?=getHeaderFor('gallery');?>

    <header class="page-header" style="background-image: url(assets/images/_inner-bg.jpg);">
        <div class="container">
            <ol class="bread">
                <li>
                    <a href="index.html"><span>Home</span></a>
                </li>
                <li class="divider"><span>|</span></li>
                <li>
                    <span>Gallery</span>
                </li>
            </ol>
            <h1>Gallery</h1>
        </div>
    </header>

    <div class="inner gallery-page gallery-2">
        <div class="container">
            <div class="row">

			<?php $page = isset($_GET['page']) ? $_GET['page'] : 1; ?>

			<?php if ($page == 1): ?>
			<!-- PAGE 01 START -->

				<!-- ROW BEGIN-->
                <div class="col-lg-4 col-md-4 col-sm-6 col-ms-6">
                    <div class="item matchHeight" style="height: 247px;">
                        <a href="assets/images/_gallery-1.jpg" class="swipebox photo"><img src="assets/images/_gallery-1.jpg" class="full-width " alt="Gallery"><span class="fa fa-search"></span></a>
                    </div>
                </div>
                <div class="col-lg-4 col-md-4 col-sm-6 col-ms-6">
                    <div class="item matchHeight" style="height: 247px;">
                        <a href="assets/images/_gallery-2.jpg" class="swipebox photo"><img src="assets/images/_gallery-2.jpg" class="full-width " alt="Gallery"><span class="fa fa-search"></span></a>
                    </div>
                </div>
                <div class="col-lg-4 col-md-4 col-sm-6 col-ms-6">
                    <div class="item matchHeight" style="height: 247px;">
                        <a href="assets/images/_gallery-3.jpg" class="swipebox photo"><img src="assets/images/_gallery-3.jpg" class="full-width " alt="Gallery"><span class="fa fa-search"></span></a>
                    </div>
                </div>

				<!-- ROW BEGIN-->
                <div class="col-lg-4 col-md-4 col-sm-6 col-ms-6">
                    <div class="item matchHeight" style="height: 247px;">
                        <a href="assets/images/_gallery-14.jpg" class="swipebox photo"><img src="assets/images/_gallery-14.jpg" class="full-width " alt="Gallery"><span class="fa fa-search"></span></a>
                    </div>
                </div>
                <div class="col-lg-4 col-md-4 col-sm-6 col-ms-6">
                    <div class="item matchHeight" style="height: 247px;">
                        <a href="assets/images/_gallery-13.jpg" class="swipebox photo"><img src="assets/images/_gallery-13.jpg" class="full-width " alt="Gallery"><span class="fa fa-search"></span></a>
                    </div>
                </div>
                <div class="col-lg-4 col-md-4 col-sm-6 col-ms-6">
                    <div class="item matchHeight" style="height: 247px;">
                        <a href="assets/images/_gallery-4.jpg" class="swipebox photo"><img src="assets/images/_gallery-4.jpg" class="full-width " alt="Gallery"><span class="fa fa-search"></span></a>
                    </div>
                </div>

				<!-- ROW BEGIN-->
                <div class="col-lg-4 col-md-4 col-sm-6 col-ms-6">
                    <div class="item matchHeight" style="height: 247px;">
                        <a href="assets/images/_gallery-7.jpg" class="swipebox photo"><img src="assets/images/_gallery-7.jpg" class="full-width " alt="Gallery"><span class="fa fa-search"></span></a>
                    </div>
                </div>
                <div class="col-lg-4 col-md-4 col-sm-6 col-ms-6">
                    <div class="item matchHeight" style="height: 247px;">
                        <a href="assets/images/_gallery-8.jpg" class="swipebox photo"><img src="assets/images/_gallery-8.jpg" class="full-width " alt="Gallery"><span class="fa fa-search"></span></a>
                    </div>
                </div>
                <div class="col-lg-4 col-md-4 col-sm-6 col-ms-6">
                    <div class="item matchHeight" style="height: 247px;">
                        <a href="assets/images/_gallery-9.jpg" class="swipebox photo"><img src="assets/images/_gallery-9.jpg" class="full-width " alt="Gallery"><span class="fa fa-search"></span></a>
                    </div>
                </div>
			<!-- PAGE 01 END -->
			<?php endif; ?>
			<?php if ($page == 2): ?>
			<!-- PAGE 02 START -->

				<!-- ROW BEGIN-->
                <div class="col-lg-4 col-md-4 col-sm-6 col-ms-6">
                    <div class="item matchHeight" style="height: 247px;">
                        <a href="assets/images/_gallery-5.jpg" class="swipebox photo"><img src="assets/images/_gallery-5.jpg" class="full-width " alt="Gallery"><span class="fa fa-search"></span></a>
                    </div>
                </div>
                <div class="col-lg-4 col-md-4 col-sm-6 col-ms-6">
                    <div class="item matchHeight" style="height: 247px;">
                        <a href="assets/images/_gallery-15.jpg" class="swipebox photo"><img src="assets/images/_gallery-15.jpg" class="full-width " alt="Gallery"><span class="fa fa-search"></span></a>
                    </div>
                </div>
                <div class="col-lg-4 col-md-4 col-sm-6 col-ms-6">
                    <div class="item matchHeight" style="height: 247px;">
                        <a href="assets/images/_gallery-6.jpg" class="swipebox photo"><img src="assets/images/_gallery-6.jpg" class="full-width " alt="Gallery"><span class="fa fa-search"></span></a>
                    </div>
                </div>

				<!-- ROW BEGIN-->
                <div class="col-lg-4 col-md-4 col-sm-6 col-ms-6">
                    <div class="item matchHeight" style="height: 247px;">
                        <a href="assets/images/_gallery-10.jpg" class="swipebox photo"><img src="assets/images/_gallery-10.jpg" class="full-width " alt="Gallery"><span class="fa fa-search"></span></a>
                    </div>
                </div>
                <div class="col-lg-4 col-md-4 col-sm-6 col-ms-6">
                    <div class="item matchHeight" style="height: 247px;">
                        <a href="assets/images/_gallery-11.jpg" class="swipebox photo"><img src="assets/images/_gallery-11.jpg" class="full-width " alt="Gallery"><span class="fa fa-search"></span></a>
                    </div>
                </div>
                <div class="col-lg-4 col-md-4 col-sm-6 col-ms-6">
                    <div class="item matchHeight" style="height: 247px;">
                        <a href="assets/images/_gallery-12.jpg" class="swipebox photo"><img src="assets/images/_gallery-12.jpg" class="full-width " alt="Gallery"><span class="fa fa-search"></span></a>
                    </div>
                </div>

				<!-- ROW BEGIN-->
                <div class="col-lg-4 col-md-4 col-sm-6 col-ms-6">
                    <div class="item matchHeight" style="height: 247px;">
                        <a href="assets/images/_catalog-1.jpg" class="swipebox photo"><img src="assets/images/_catalog-1.jpg" class="full-width " alt="Gallery"><span class="fa fa-search"></span></a>
                    </div>
                </div>
                <div class="col-lg-4 col-md-4 col-sm-6 col-ms-6">
                    <div class="item matchHeight" style="height: 247px;">
                        <a href="assets/images/_catalog-2.jpg" class="swipebox photo"><img src="assets/images/_catalog-2.jpg" class="full-width " alt="Gallery"><span class="fa fa-search"></span></a>
                    </div>
                </div>
                <div class="col-lg-4 col-md-4 col-sm-6 col-ms-6">
                    <div class="item matchHeight" style="height: 247px;">
                        <a href="assets/images/_catalog-3.jpg" class="swipebox photo"><img src="assets/images/_catalog-3.jpg" class="full-width " alt="Gallery"><span class="fa fa-search"></span></a>
                    </div>
                </div>
			<!-- PAGE 02 END -->
			<?php endif; ?>
			<?php if ($page == 3): ?>
			<!-- PAGE 03 START -->

				<!-- ROW BEGIN-->
                <div class="col-lg-4 col-md-4 col-sm-6 col-ms-6">
                    <div class="item matchHeight" style="height: 247px;">
                        <a href="assets/images/_gallery-16.jpg" class="swipebox photo"><img src="assets/images/_gallery-16.jpg" class="full-width " alt="Gallery"><span class="fa fa-search"></span></a>
                    </div>
                </div>
                <div class="col-lg-4 col-md-4 col-sm-6 col-ms-6">
                    <div class="item matchHeight" style="height: 247px;">
                        <a href="assets/images/_gallery-17.jpg" class="swipebox photo"><img src="assets/images/_gallery-17.jpg" class="full-width " alt="Gallery"><span class="fa fa-search"></span></a>
                    </div>
                </div>
                <div class="col-lg-4 col-md-4 col-sm-6 col-ms-6">
                    <div class="item matchHeight" style="height: 247px;">
                        <a href="assets/images/_gallery-18.jpg" class="swipebox photo"><img src="assets/images/_gallery-18.jpg" class="full-width " alt="Gallery"><span class="fa fa-search"></span></a>
                    </div>
                </div>

				<!-- ROW BEGIN-->
                <div class="col-lg-4 col-md-4 col-sm-6 col-ms-6">
                    <div class="item matchHeight" style="height: 247px;">
                        <a href="assets/images/_gallery-19.jpg" class="swipebox photo"><img src="assets/images/_gallery-19.jpg" class="full-width " alt="Gallery"><span class="fa fa-search"></span></a>
                    </div>
                </div>
                <div class="col-lg-4 col-md-4 col-sm-6 col-ms-6">
                    <div class="item matchHeight" style="height: 247px;">
                        <a href="assets/images/_gallery-20.jpg" class="swipebox photo"><img src="assets/images/_gallery-20.jpg" class="full-width " alt="Gallery"><span class="fa fa-search"></span></a>
                    </div>
                </div>
                <div class="col-lg-4 col-md-4 col-sm-6 col-ms-6">
                    <div class="item matchHeight" style="height: 247px;">
                        <a href="assets/images/_gallery-21.jpg" class="swipebox photo"><img src="assets/images/_gallery-21.jpg" class="full-width " alt="Gallery"><span class="fa fa-search"></span></a>
                    </div>
                </div>

				<!-- ROW BEGIN-->
                <div class="col-lg-4 col-md-4 col-sm-6 col-ms-6">
                    <div class="item matchHeight" style="height: 247px;">
                        <a href="assets/images/_gallery-22.jpg" class="swipebox photo"><img src="assets/images/_gallery-22.jpg" class="full-width " alt="Gallery"><span class="fa fa-search"></span></a>
                    </div>
                </div>
                <div class="col-lg-4 col-md-4 col-sm-6 col-ms-6">
                    <div class="item matchHeight" style="height: 247px;">
                        <a href="assets/images/_gallery-23.jpg" class="swipebox photo"><img src="assets/images/_gallery-23.jpg" class="full-width " alt="Gallery"><span class="fa fa-search"></span></a>
                    </div>
                </div>
                <div class="col-lg-4 col-md-4 col-sm-6 col-ms-6">
                    <div class="item matchHeight" style="height: 247px;">
                        <a href="assets/images/_gallery-24.jpg" class="swipebox photo"><img src="assets/images/_gallery-24.jpg" class="full-width " alt="Gallery"><span class="fa fa-search"></span></a>
                    </div>
                </div>
			<!-- PAGE 03 END -->
			<?php endif; ?>
			<?php if ($page == 4): ?>
			<!-- PAGE 04 START -->

				<!-- ROW BEGIN-->
                <div class="col-lg-4 col-md-4 col-sm-6 col-ms-6">
                    <div class="item matchHeight" style="height: 247px;">
                        <a href="assets/images/_gallery-25.jpg" class="swipebox photo"><img src="assets/images/_gallery-25.jpg" class="full-width " alt="Gallery"><span class="fa fa-search"></span></a>
                    </div>
                </div>
                <div class="col-lg-4 col-md-4 col-sm-6 col-ms-6">
                    <div class="item matchHeight" style="height: 247px;">
                        <a href="assets/images/_gallery-26.jpg" class="swipebox photo"><img src="assets/images/_gallery-26.jpg" class="full-width " alt="Gallery"><span class="fa fa-search"></span></a>
                    </div>
                </div>
                <div class="col-lg-4 col-md-4 col-sm-6 col-ms-6">
                    <div class="item matchHeight" style="height: 247px;">
                        <a href="assets/images/_gallery-27.jpg" class="swipebox photo"><img src="assets/images/_gallery-27.jpg" class="full-width " alt="Gallery"><span class="fa fa-search"></span></a>
                    </div>
                </div>

				<!-- ROW BEGIN-->
                <div class="col-lg-4 col-md-4 col-sm-6 col-ms-6">
                    <div class="item matchHeight" style="height: 247px;">
                        <a href="assets/images/_gallery-28.jpg" class="swipebox photo"><img src="assets/images/_gallery-28.jpg" class="full-width " alt="Gallery"><span class="fa fa-search"></span></a>
                    </div>
                </div>
                <div class="col-lg-4 col-md-4 col-sm-6 col-ms-6">
                    <div class="item matchHeight" style="height: 247px;">
                        <a href="assets/images/_gallery-29.jpg" class="swipebox photo"><img src="assets/images/_gallery-29.jpg" class="full-width " alt="Gallery"><span class="fa fa-search"></span></a>
                    </div>
                </div>
                <div class="col-lg-4 col-md-4 col-sm-6 col-ms-6">
                    <div class="item matchHeight" style="height: 247px;">
                        <a href="assets/images/_gallery-30.jpg" class="swipebox photo"><img src="assets/images/_gallery-30.jpg" class="full-width " alt="Gallery"><span class="fa fa-search"></span></a>
                    </div>
                </div>

				<!-- ROW BEGIN-->
                <div class="col-lg-4 col-md-4 col-sm-6 col-ms-6">
                    <div class="item matchHeight" style="height: 247px;">
                        <a href="assets/images/_gallery-31.jpg" class="swipebox photo"><img src="assets/images/_gallery-31.jpg" class="full-width " alt="Gallery"><span class="fa fa-search"></span></a>
                    </div>
                </div>
                <div class="col-lg-4 col-md-4 col-sm-6 col-ms-6">
                    <div class="item matchHeight" style="height: 247px;">
                        <a href="assets/images/_gallery-34.jpg" class="swipebox photo"><img src="assets/images/_gallery-34.jpg" class="full-width " alt="Gallery"><span class="fa fa-search"></span></a>
                    </div>
                </div>
                <div class="col-lg-4 col-md-4 col-sm-6 col-ms-6">
                    <div class="item matchHeight" style="height: 247px;">
                        <a href="assets/images/_gallery-35.jpg" class="swipebox photo"><img src="assets/images/_gallery-35.jpg" class="full-width " alt="Gallery"><span class="fa fa-search"></span></a>
                    </div>
                </div>
			<!-- PAGE 04 END -->
            <?php endif; ?>
            
			<?php if ($page == 5): ?>
			<!-- PAGE 04 START -->

				<!-- ROW BEGIN-->
                <div class="col-lg-4 col-md-4 col-sm-6 col-ms-6">
                    <div class="item matchHeight" style="height: 247px;">
                        <a href="assets/images/_gallery-36.jpg" class="swipebox photo"><img src="assets/images/_gallery-36.jpg" class="full-width " alt="Gallery"><span class="fa fa-search"></span></a>
                    </div>
                </div>
                <div class="col-lg-4 col-md-4 col-sm-6 col-ms-6">
                    <div class="item matchHeight" style="height: 247px;">
                        <a href="assets/images/_gallery-37.jpg" class="swipebox photo"><img src="assets/images/_gallery-37.jpg" class="full-width " alt="Gallery"><span class="fa fa-search"></span></a>
                    </div>
                </div>
                <div class="col-lg-4 col-md-4 col-sm-6 col-ms-6">
                    <div class="item matchHeight" style="height: 247px;">
                        <a href="assets/images/_gallery-38.jpg" class="swipebox photo"><img src="assets/images/_gallery-38.jpg" class="full-width " alt="Gallery"><span class="fa fa-search"></span></a>
                    </div>
                </div>
			<!-- PAGE 05 END -->
			<?php endif; ?>

            </div>
            <div class="paging-navigation navigation">
                <hr>
                <div class="pagination">
					<?php if ($page == 1): ?>
						<a href="?page=1" class="arrow-left prev disabled fa fa-chevron-left"></a>
						<a href="?page=1" class="page-numbers current">1</a>
						<a href="?page=2" class="page-numbers">2</a>
						<a href="?page=3" class="page-numbers">3</a>
                        <a href="?page=4" class="page-numbers">4</a>
                        <a href="?page=5" class="page-numbers">5</a>
						<a href="?page=2" class="arrow-right next fa fa-chevron-right"></a>
					<?php endif; ?>
					<?php if ($page == 2): ?>
						<a href="?page=1" class="arrow-left prev fa fa-chevron-left"></a>
						<a href="?page=1" class="page-numbers">1</a>
						<a href="?page=2" class="page-numbers current">2</a>
						<a href="?page=3" class="page-numbers">3</a>
                        <a href="?page=4" class="page-numbers">4</a>
                        <a href="?page=5" class="page-numbers">5</a>
						<a href="?page=3" class="arrow-right next fa fa-chevron-right"></a>
					<?php endif; ?>
					<?php if ($page == 3): ?>
						<a href="?page=2" class="arrow-left prev fa fa-chevron-left"></a>
						<a href="?page=1" class="page-numbers">1</a>
						<a href="?page=2" class="page-numbers">2</a>
						<a href="?page=3" class="page-numbers current">3</a>
                        <a href="?page=4" class="page-numbers">4</a>
                        <a href="?page=5" class="page-numbers">5</a>
						<a href="?page=4" class="arrow-right next fa fa-chevron-right"></a>
					<?php endif; ?>
					<?php if ($page == 4): ?>
						<a href="?page=3" class="arrow-left prev fa fa-chevron-left"></a>
						<a href="?page=1" class="page-numbers">1</a>
						<a href="?page=2" class="page-numbers">2</a>
						<a href="?page=3" class="page-numbers">3</a>
                        <a href="?page=4" class="page-numbers current">4</a>
                        <a href="?page=5" class="page-numbers">5</a>
						<a href="?page=5" class="arrow-right next fa fa-chevron-right"></a>
					<?php endif; ?>
					<?php if ($page == 5): ?>
						<a href="?page=4" class="arrow-left prev fa fa-chevron-left"></a>
						<a href="?page=1" class="page-numbers">1</a>
						<a href="?page=2" class="page-numbers">2</a>
						<a href="?page=3" class="page-numbers">3</a>
						<a href="?page=4" class="page-numbers">4</a>
						<a href="?page=5" class="page-numbers current">5</a>
						<a href="?page=5" class="arrow-right next disabled fa fa-chevron-right"></a>
					<?php endif; ?>
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