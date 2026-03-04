
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" 
"http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <title>FileIce LLC - Login</title>    
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
</head><body>
<div id="wrapper">
	<div id="bodywrapper">
<div id="head">
	<h6 id="logo"><a href="index.php"><img width="186" height="106" src="images/1x1transparent.png"/></a></h6>
	<div id="navigation-wrapper">
        <ul id="navigation">
            <li><a href="index.php">Home</a></li>
            <li><a href="about.php">About</a></li>
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
			<h1>Members login</h1>
	</div>
		<div id="left-column" class="content">
			            <div id="login-form">
                <form method="post">
                    <fieldset>
                        <p>Username:<br/>
                        <input title="required" type="text" id="username" name="username" value="" /></p>
                        <p>Password:<br/>
                        <input title="required" type="password" id="password" name="password" value="" /></p>
						<br/>
                        <button type="submit" name="submit" id="submit" class="submit">Log in</button>
                    </fieldset>
                </form>
            </div>
			<div id="reset-form" style="display:none">
                <form method="post">
                    <fieldset>
                        <p>Username:<br/>
                        <input title="required" type="text" name="username" value="" /></p>
                        <p>Email:<br/>
                        <input title="required" type="text" name="email" value="" /></p>
						<br/>
                        <button type="submit" name="submitreset" id="submit" class="submit">Reset</button>
                    </fieldset>
                </form>
            </div>
			<p><span id="resetlink"><a onMouseOver="this.style.cursor='pointer';" onclick="$('#login-form').fadeOut(function(){$('#reset-form').fadeIn();$('#resetlink').html($('#canceldiv').html())})">Reset Password</a></span> / <a href="register.php">Sign up</a></p>
			<div id="resetdiv" style="display:none"><a onMouseOver="this.style.cursor='pointer';" onclick="$('#login-form').fadeOut(function(){$('#reset-form').fadeIn();$('#resetlink').html($('#canceldiv').html())})">Reset Password</a></div>
			<div id="canceldiv" style="display:none"><a onMouseOver="this.style.cursor='pointer';" onclick="$('#reset-form').fadeOut(function(){$('#login-form').fadeIn();$('#resetlink').html($('#resetdiv').html())})">Cancel</a></div>
				</div>	
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
	</div>	
	<div class="clear"></div>	
	<div id="footer">
		<p>
			<div class="left">
				<h3>Copyright &copy; 2012 FileIce LLC</h3>
			</div>
			<div class="right">
				<h3><a href="#">About</a> | <a href="#">Privacy</a> | <a href="tos.php">Terms & Conditions</a> | <a href="#head">Go to Top</a></h3>
			</div>
		</p>
	</div>
	</div>
</div>
<script type="text/javascript">document.write(unescape("%3Cscript src=%27http://s10.histats.com/js15.js%27 type=%27text/javascript%27%3E%3C/script%3E"));</script>
<script  type="text/javascript" >
try {Histats.start(1,1917881,4,0,0,0,"");
Histats.track_hits();} catch(err){};
</script>
<noscript><img  src="http://sstatic1.histats.com/0.gif?1917881&101" border="0" style="display:none"></noscript>
</body>
</html>
