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
    <!-- Place favicon.ico and apple-touch-icon.png in the root directory --> 
    <link rel="icon" href='favicon.ico'>
    <link href='http://fonts.googleapis.com/css?family=PT+Sans:700|Open+Sans:400,700' rel='stylesheet' type='text/css'>

    <?php wp_head(); ?>
    
</head>
    <body>
        <!--[if lt IE 7]>
            <p class="browsehappy">You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade your browser</a> to improve your experience.</p>
        <![endif]-->
		<header>
			<div id="logo"><a href="http://www.howtogardner.com">How to Gardner</a></div>
			<nav>
				<ul>
					<li><a class="<?php if ($section == 'about') {echo 'on';} ?>" href="<?php echo 'http://www.howtogardner.com/about.php'; ?>">About</a></li>
					<li><a class="<?php if ($section == 'projects') {echo 'on';} ?>" href="<?php echo 'http://www.howtogardner.com/projects.php'; ?>">Projects</a></li>
					<li><a class="<?php if ($section == 'contact') {echo 'on';} ?>" href="<?php echo 'http://www.howtogardner.com/contact.php'; ?>">Contact</a></li>
					<li><a class="<?php if ($section == 'blog') {echo 'on';} ?>" href="<?php echo 'http://www.blog.howtogardner.com'; ?>">Blog</a></li>
				</ul>
			</nav>
		</header>
