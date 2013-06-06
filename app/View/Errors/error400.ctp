<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="utf-8">
		<title>Wizm 404! - A Responsive Error Theme Page For You</title>
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<meta name="keywords" content="some keywords that best describe your business">
		<meta name="description" content="a short description of your company">
		<meta name="author" content="Wizm 404!">

		<!-- Mobile Specific Metas
		================================================== -->
		<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
		<!-- ================================================== -->
		
		<?php
			echo $this->Html->css('bootstrap.css');
			echo $this->Html->css('bootstrap-responsive.css');
			echo $this->Html->css('layout.css');
			echo $this->Html->css('background.css');
			
			echo $this->Html->script('jquery-1.8.3.min.js');
			echo $this->Html->script('cssLoader.js');
		?>

	</head>
	<body>

		<div class="bgdarkpattern"></div>
		<div class="container">
			<div class="row">
				<header class="span12">
					<div class="logo light">
						<p class="ouch">OUCH!</p>
						<h1 class="headers">sorry the page you are looking for does not exist.</h1>
						<h4 class="txt">you can explore our site back to the navigation below.</h4>
					</div>
				</header>
			</div>
			<div class="row">
				<nav class="span12">
					<div class="navigation light">
						<a class="link"  href="http://iktrust.co.nz/">Home</a> <div class="slash">/</div>
						<a class="link"  href="http://www.iktrust-traders.com/"> IK Trust Cabinet</a> <div class="slash">/</div>
						<a class="link"  href="http://support.iktrust.com/">Contact Us</a>
					</div>
				</nav>
			</div>
			<div class="row">
				<div class="span6">
					<hr class="invisible">
					<hr class="invisible">
				</div>
			</div>
			<div class="row">
				<div class="span10">
					<div class="copy light"><strong>&copy;</strong> Copyright 2012. <a class="link"  href="http://iktrust.co.nz/">IK Trust Capital Market Corporation Limited.</a></div>
				</div>
			</div>
		</div>
		
	</body>
</html>