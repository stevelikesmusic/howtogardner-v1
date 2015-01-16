<!DOCTYPE html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7"> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8"> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9"> <![endif]-->
<!--[if gt IE 8]><!--> <html class="no-js"> <!--<![endif]-->
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <title><?php echo $pageTitle; ?></title>
        <meta name="author" content="Steve Gardner">
        <meta name="viewport" content="width=device-width, initial-scale=1">
		<link rel="icon" href="favicon.ico">
        <!-- Place favicon.ico and apple-touch-icon.png in the root directory -->

        <link rel="stylesheet" href="css/normalize.css">
		<link href='http://fonts.googleapis.com/css?family=PT+Sans:700|Open+Sans:400,700' rel='stylesheet' type='text/css'>
		<link rel="stylesheet" type="text/css" href="css/flaticon.css">
        <link rel="stylesheet" href="css/new.css">
        <script src="js/vendor/modernizr-2.6.2.min.js"></script>
    </head>
    <body>
        <!--[if lt IE 7]>
            <p class="browsehappy">You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade your browser</a> to improve your experience.</p>
        <![endif]-->
		<header>
			<div id="logo"><a href="<?php echo BASE_URL; ?>">How to Gardner</a></div>
			<nav>
				<ul>
					<li><a class="<?php if ($section == 'about') {echo 'on';} ?>" href="<?php echo BASE_URL . 'about.php'; ?>">About</a></li>
					<li><a class="<?php if ($section == 'projects') {echo 'on';} ?>" href="<?php echo BASE_URL . 'projects.php'; ?>">Projects</a></li>
					<li><a class="<?php if ($section == 'contact') {echo 'on';} ?>" href="<?php echo BASE_URL . 'contact.php'; ?>">Contact</a></li>
					<li><a class="<?php if ($section == 'blog') {echo 'on';} ?>" href="#">Blog</a></li>
				</ul>
			</nav>
		</header>
