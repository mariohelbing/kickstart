<?php

	error_reporting(E_ALL ^ E_NOTICE);
	include_once('app/includes/functions.php');

?>
<!DOCTYPE html>
<html lang="de">
<head>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
	<title><?php echo basename(dirname(__FILE__)) ?></title>
	<link href="app/layout/css/frontend.php" rel="stylesheet" media="screen" type="text/css" />
	<link href="app/layout/css/print.css" rel="stylesheet" media="print"  type="text/css" />
	
	<!--[if lt IE 9]>
	<script src="js/html5.js"></script>
	<![endif]-->	
	
	<meta name="description" content="" />
	<meta name="robots" content="index, follow" />
	<script type="text/javascript">document.documentElement.className += " js";</script>
</head>

<!--[if lt IE 7]><body class="ie7 ie6"><![endif]-->
<!--[if IE 7]><body class="ie7"><![endif]-->
<!--[if gt IE 7]><body><![endif]-->
<!--[if !IE]><!--><body><!-- <![endif]-->

 	<!-- Content goes here -->
	<div id="wrapper">
	
		<header id="header">
			header
		</header>
		<section id="content">
			content
		</section>
		<footer id="footer">
			footer
		</footer>	
	
	</div>

	<script type="text/javascript" src="app/js/jquery-1.8.0.min.js"></script>
	<script type="text/javascript" src="app/js/jquery-ui-1.8.23.custom.min.js"></script>
	<script type="text/javascript" src="app/js/domscript.js"></script>
	<script type="text/javascript">jQuery(dom_init);</script>
</body>
</html>