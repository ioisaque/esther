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

<body style="background: #FBFBFB url('../images/_blog-bg.png');">

    <?php require_once 'pages/navigation.php'; ?>
	<?=getHeaderFor('blog');?>

    <?php $post = isset($_GET['post']) ? 'posts/'. $_GET['post'].'.html' : 'posts/post-list.html'; ?>
    <?php echo file_exists($post) ? file_get_contents($post) : file_get_contents('pages/404.html'); ?>
    
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