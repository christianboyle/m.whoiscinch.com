<!DOCTYPE html>
<html lang="en">
<head>
<title>Cinch Creative</title>
<meta charset="utf-8">
<meta name="description" content="">
<meta name="keywords" content="">
<meta name="robots" content="">
<meta name="author" content="Cinch Creative">
<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no">
<?php include("includes/css-scripts.php"); ?>
<script src="http://code.jquery.com/jquery-1.4.4.min.js"></script>
<script src="js/html5form.js"></script>
<script src="js/imgSizer.js"></script>
<script>
$(document).ready(function() { 
$('#get_at_me').html5form({
async: 'true',
messages : 'en',
responseDiv : '#response',
allBrowsers: 'true',
labels: 'show',
});
}); 
</script>
</head>
<body>
<div id="wrapper">
    <header id="header">
		<a href="/" class="logo"><img src="../img/logo.png"></a>
    </header>
	<section id="content" class="work_content clearfix">
		<h1>Work</h1>
		<section id="who_is_cinch">
	        	<p>Featured Project: Cinch Creative branding campaign</p>
		</section>
		<div id="our_work">
			<figure>
				<img src="img/our-work/cinch-logo.jpg" alt="">
				<figcaption>Cinch Creative Logo</figcaption>
			</figure>

			<figure>
				<img src="/img/our-work/cinch-button.jpg" alt="">
				<figcaption>Omar Button</figcaption>

			</figure>

			<figure>
				<img src="/img/our-work/cinch-cards.jpg" alt=""> 
				<figcaption>Our Bidness Card</figcaption>
			</figure>
		</div>
	</section>
    <nav id="nav">
	<?php include("includes/nav.php"); ?>
    </nav>
    <footer id="footer">
        Copyright 2011 Cinch Creative, LLC
    </footer>
    <div id="view_full_website_container">
        <a href="http://dev.whoiscinch.com?mobref=1">View full website</a>
    </div>
</div>
<?php include("includes/google-analytics.php"); ?>
</body>
</html>
