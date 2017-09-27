<!doctype html>
<html class="no-js" lang="">
<head>
	<meta charset="utf-8">
	<meta name="description" content="">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Resepku</title>

	<link rel="apple-touch-icon" href="<?php echo base_url(); ?>assets/apple-touch-icon.png">
    <!-- Place favicon.ico in the root directory -->
    
    <link rel="stylesheet" href="<?php echo base_url(); ?>assets/styles/main.css">
    <script src="<?php echo base_url(); ?>assets/scripts/vendor/modernizr.js"></script>
</head>
<body>
<!--[if lt IE 10]>
<p class="browserupgrade">You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade your browser</a> to improve your experience.</p>
<![endif]-->

<div id="header">
	<div class="container">
		<header>
			<a href="index.html" id="logo" class="pull-left">
				<img src="<?php echo base_url(); ?>assets/images/logo.png" alt="" width="130" href="80">
			</a>
			<nav class="pull-right fwb fz12 visible-lg">
				<a href="signin.html" class="ttu">
					SIGN IN
				</a>
				<span class="mr5 ml5 fwn">|</span>
				<a href="signup.html" class="ttu">
					REGISTER
				</a>
			</nav>
			<nav class="pull-right hidden-lg">
				<div class="nav-xs-trigger">
					<i class="fa fa-bars"></i>
				</div>
				<div class="nav-xs-panel">
					<a href="page.html" class="nav-xs-item db" toggle-modal="modal-login">Sign in</a>
					<a href="page.html" class="nav-xs-item db" toggle-modal="modal-register">Register</a>
				</div>
				<div class="nav-xs-overlay">&nbsp;</div>
			</nav>
		</header>
	</div>
</div>