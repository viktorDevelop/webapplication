<!DOCTYPE html>
<!--[if lt IE 7]><html lang="ru" class="lt-ie9 lt-ie8 lt-ie7"><![endif]-->
<!--[if IE 7]><html lang="ru" class="lt-ie9 lt-ie8"><![endif]-->
<!--[if IE 8]><html lang="ru" class="lt-ie9"><![endif]-->
<!--[if gt IE 8]><!-->
<html lang="ru">
<!--<![endif]-->
<head>
	<meta charset="utf-8" />
	<title><?=$PageData['title'];?></title>
	<meta name="description" content="<?=$PageData['description'];?>" />
	<meta name="keywords" content="<?=$PageData['keyword'];?>" />
	<meta http-equiv="X-UA-Compatible" content="IE=edge" />
	<meta name="viewport" content="width=device-width, initial-scale=1.0" />
	<link rel="shortcut icon" href="favicon.png" />
	<link rel="stylesheet" href="<?=URL?>/public/libs/bootstrap/bootstrap-grid-3.3.1.min.css" />
	<link rel="stylesheet" href="<?=URL?>/public/libs/font-awesome-4.2.0/css/font-awesome.min.css" />
	<link rel="stylesheet" href="<?=URL?>/public/libs/fancybox/jquery.fancybox.css" />
	<link rel="stylesheet" href="<?=URL?>/public/libs/owl-carousel/owl.carousel.css" />
	<link rel="stylesheet" href="<?=URL?>/public/libs/countdown/jquery.countdown.css" />
	<link rel="stylesheet" href="<?=URL?>/public/css/fonts.css" />
	<link rel="stylesheet" href="<?=URL?>/public/css/main.css" />
	<link rel="stylesheet" href="<?=URL?>/public/css/media.css" />
</head>
<body>
 
	<header class="top_header">
		<div class="header_topline">
			<div class="container">
				<div class="col-md-12">
					<div class="row">
						<button class="auth_buttons hidden-md hidden-lg hidden-sm"><i class="fa fa-user"></i></button>
						<div class="top_links">
							<a href="">Вход</a> / 
							<a href="">Регистрация</a>
						</div>
						<div class="soc_buttons">
							<a href=""><i class="fa fa-vk"></i></a>
							<a href=""><i class="fa fa-facebook-square"></i></a>
							<a href=""><i class="fa fa-twitter"></i></a>
						</div>
					</div>
				</div>
			</div>
		</div>
		<div class="container">
			<div class="col-md-12">
				<div class="row">
					<a class="logo">moDesign</a>
					<nav class="maian_mnu clearfix">
						<button class="main_mnu_button hidden-md hidden-lg"><i class="fa fa-bars"></i></button>
						<ul>
							<li class="active"><a href="<?=URL;?>" >Главная</a></li>

							 <?foreach($TopMenu as $item):?>
								<li  ><a href="<?=URL?>category/<?=$item['title_url'];?>"  ><?=$item['title'];?></a></li>
							 <?endforeach;?>
						</ul>
						<div class="top_contacts"><i class="fa fa-mobile"></i> 8-800-200-600</div>
					</nav>
					<h1>Центр разработки  приложений</h1>
				 
				</div>
			</div>
		</div>
	</header>
	<section class="order">
		<div class="container">
			<div class="row">
				<div class="col-md-7">
					<div class="sell_descr">Самые лучшие приложения для вашего телефона</div>
				</div>
				<div class="col-md-5">
					<div class="sell_right">
						<a href="#callback" class="button fancybox">Заказать разработку</a>
					</div>
				</div>
			</div>
		</div>
	</section>
	<section class="main_content">
		<div class="container">
			<div class="row">
			 <?=$view;?>
				<div class="col-md-4">
					<aside class="right_aside">
						<ul>
							<?foreach($asideMenu as $item):?>
								<li><a href="<?=URL?>category/<?=$item['title_url'];?>"><?=$item['title'];?></a></li>
							 <?endforeach;?>
						</ul>
					</aside>
				</div>
			</div>
		</div>
	</section>
	<div class="hidden">
		<form id="callback" class="pop_form">
			<h3>Заказать разработку</h3>
			<input type="text" name="name" placeholder="Ваше имя..." required />
			<input type="text" name="phone" placeholder="Ваше телефон..." required />
			<button class="button" type="submit">Заказать</button>
		</form>
	</div>
	<!--[if lt IE 9]>
	<script src="libs/html5shiv/es5-shim.min.js"></script>
	<script src="libs/html5shiv/html5shiv.min.js"></script>
	<script src="libs/html5shiv/html5shiv-printshiv.min.js"></script>
	<script src="libs/respond/respond.min.js"></script>
	<![endif]-->
	<script src="<?=URL?>/public/libs/jquery/jquery-1.11.1.min.js"></script>
	<script src="<?=URL?>/public/libs/jquery-mousewheel/jquery.mousewheel.min.js"></script>
	<script src="<?=URL?>/public/libs/fancybox/jquery.fancybox.pack.js"></script>
	<script src="<?=URL?>/public/libs/waypoints/waypoints-1.6.2.min.js"></script>
	<script src="<?=URL?>/public/libs/scrollto/jquery.scrollTo.min.js"></script>
	<script src="<?=URL?>/public/libs/owl-carousel/owl.carousel.min.js"></script>
	<script src="<?=URL?>/public/libs/countdown/jquery.plugin.js"></script>
	<script src="<?=URL?>/public/libs/countdown/jquery.countdown.min.js"></script>
	<script src="<?=URL?>/public/libs/countdown/jquery.countdown-ru.js"></script>
	<script src="<?=URL?>/public/libs/landing-nav/navigation.js"></script>
	<script src="<?=URL?>/public/js/common.js"></script>
 
</body>
</html>