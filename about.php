<?php
ini_set('display_errors', 0);
error_reporting(E_ALL);

if (isset($_GET['page']) && $_GET['page'] !== '') {

    $page = basename($_GET['page']); // security
    $file = __DIR__ . '/' . $page . '.php';

    if (file_exists($file)) {
        include $file;
        exit;
    }

}
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" 
"http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <title>FileIce LLC</title>    
    <link rel="shortcut icon" type="image/ico" href="images/favicon.ico" />
    
    <!-- CSS Files -->
    <link href="css/reset.css" rel="stylesheet" type="text/css" media="all" />
    <link href="css/stylesheet.css" rel="stylesheet" type="text/css" media="all" />
    <!--[if lte IE 6]>
    <link href="css/ie.css" rel="stylesheet" type="text/css" media="screen" /><![endif]-->
    <!--[if lte IE 7]>
    <link href="css/ie.css" rel="stylesheet" type="text/css" media="screen" /><![endif]-->
    
	<!-- Javascript -->
    <script type="text/javascript" src="js/jquery.js"></script>
    <script type="text/javascript" src="js/jquery.cycle.all.min.js"></script>
    <script type="text/javascript" src="js/global.js"></script>
	<script type="text/javascript" src="js/cufon-yui.js"></script>
	<script type="text/javascript" src="js/myradpro.font.js"></script>
	<script type="text/javascript" charset="utf-8">
	Cufon.replace('h1:not(.clean)')('h2:not(.clean)')('h3:not(.clean)')('h4:not(.clean)')('div.menu li');
	</script>
</head><head>
<script type="text/javascript" src="js/jquery.idTabs.min.js"></script>    
</head>

<body>
<div id="wrapper">	
	<div id="bodywrapper">
<div id="head">
	<h6 id="logo"><a href="index.php"><img width="186" height="106" src="images/1x1transparent.png"/></a></h6>
	<div id="navigation-wrapper">
        <ul id="navigation">
            <li><a href="index.php">Home</a></li>
            <li><a href="about.php"><font color="white" style="font-size:15px;">&raquo; </font>About</a></li>
            <li><a href="contact.php">Contact</a></li>
            <li><a href="blog.php">Blog</a></li>
			<li><a href="forums/">Forums</a></li>
        </ul>
				<ul id="fast-links">
        	<li><a href="register.php">Register</a></li> 
			<li><a>|</a></li> 
            <li><a href="members.php">Login</a></li>
        </ul>
			</div>
</div>

	<div id="promo-container">
		<h1>About</h1>
        <div class="right">	
			<h3>
				<ul id="sub-menu">
					<li class="current"><a href="about.php?page=overview">Overview</a></li>
					<li><a href="about.php?page=features">Features</a></li>
					<li><a href="about.php?page=faq">FAQ</a></li>
				</ul>
			</h3>
		</div>
    </div>
			<div id="left-column" class="content">
		<h2>What makes us different</h2>
		<p>As a next generation upload site, we have taken the PPD industry to a whole new level. Boasting not only one of the highest payout rates around, our site also features some of the most high tech and unique tools to help you earn cash today, packaged with a high quality and fast support system with professional administrators. Powered by the latest technology in HTML5 and jQuery, our site provides you a feature loaded, smooth interface to work in, and to deliver your users an end product that is both professional and high converting.</p>
		<p><a href="about.php?page=features">Discover what we can offer you today.</a></p>
	</div>	
	<!-- break -->
	<div class="rounded-box">
		<div class="inner content">
			<h6>
				Have a question?
			</h6>
			<p>
				Contact us today with our online ticket support system. Receive an answer to any queries you may have within 24 hours.
			</p>			
		</div>
		<div class="box-end"></div>
	</div>
	<div class="rounded-box">
		<div class="inner content">
			<h6>
				Join our forums
			</h6>
			<p>
				and engage with our large community of affiliates. Post suggestions, comments, and problems, and interact with our administrators.
			</p>			
		</div>
		<div class="box-end"></div>
	</div>	<div class="clear"></div>	
		<div id="footer">
		<p>
			<div class="left">
				<h3>Copyright &copy; 2014 FileIce LLC</h3>
			</div>
			<div class="right">
				<h3><a href="#">About</a> | <a href="#">Privacy</a> | <a href="tos.php">Terms & Conditions</a> | <a href="#head">Go to Top</a></h3>
			</div>
		</p>
	</div>
	</div>
	
</div>
</body>
</html>