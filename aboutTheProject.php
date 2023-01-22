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
	<?=getHeaderFor('aboutTheProject');?>

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
            <h1>Give back to the World</h1>
        </div>
    </header>

	<div class="container">
        <div class="inner inner-two-col row">
            <div class="col-lg-12 col-md-12">
                <div class="blog-post text-page">
                    <div class="main-photo-cutted">
						<video class="main-photo full-width" alt="Esther Ribeiro" style="border-radius: 2rem;" controls>
							<source src="assets/videos/about_the_project.mp4" type="video/mp4">
							Your browser does not support the video tag.
						</video>

                    </div>
					<h3>My Stewardship Project</h3>
                    <p>My Stewardship Project is to preserve the planet by trying to stop littering. This type of littering  is “Food Waste” and how it can affect the world. My project title was “Give Back To The World” I started out as building a compost bin. And informing the people about the problem of littering and how the compost bin can help with food waste. In the months I have been taking of the compost bin, turning garbage into fresh soil for my family’s garden. This is just using worms, and food waste. To make this all-natural compost dirt, I started in October and ended in May. But it is worth it. Because now I am stopping littering just from one compost bin. My experience was enjoyable, because I was doing something I loved to do which is help our planet. I learned that there was no need for fancy  dirt bought at home depot. Why waste all that money, when you could use banana peels, apple cores, vegetable peels, and worms to make your plants grow in a more healthy way. Worms are the most important because they decompose the dead plants to become soil. These little decomposers don’t just decompose dead animals. Banana Peels are important because they have a lot of nutrients in the skin of the banana. But these materials don’t cost nothing because they’re either in your garbage disposal or in backyard under the soil. I’m also helping the watershed because some food waste does get swept into the watershed and it can pollute our water storage. I don’t want that and neither do you. The watershed distribute water to all river and lakes, or the rivers and lakes get polluted and then the polluted water runs through the watershed and distribute that water to oceans. And if the watershed distribute dirty water what will happen to the animals that live near these rivers and lakes and oceans. If they drink or inhale the water they can get sick and die. If they don’t drink or inhale the water they can die of dehydration, or die by simply just holding their breath.. Either way it is bad for the animals. And the same thing goes for us. It is bad for all life that needs water. If we use the compost bin we can also plant our own gardens. We can make our own produce, and we don’t have have to buy the produce at the store that comes in plastic packages. If we buy the fruit and vegetables at the store we are actually supporting the problem of pollution in the watershed. But if we plant our food, we can lower the rate of pollution. And when we go to the store we will only need to buy the processed things, such as; cereal, ice cream, and etc. Both of these problems of food waste and pollution is bad, and we need to solve this. If we use the compost bin for planting our own garden we are solving both of these problem one garden at a time, one compost bin at a time. So Let’s Give Back To World! Also I would like continue be active with those things I have learned with finding our way. I believe this is part to be a good citizen and be a good influence where I lived, my community and off course the world, let’s spread our ideas.</p>
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