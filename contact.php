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
	<section id="content" class="contact_content clearfix">
		<section id="contact_information_container">
			<h1>Contact Information</h1>
			<section id="contact_information" class="clearfix">
				<div id="info_bubble_container"><img src="img/contact/info-bubble.png" alt=""></div>
				<aside>
					<h1>Cinch Creative LLC</h1>
					<h2>5311 West 49th ST.</h2>
					<h3>Roeland Park, KS 66205</h3>
					<h4>Phone: 1.913.593.4001</h4>
					<h5>Fax: 1.913.593.4002</h5>
					<h6>Email: <a href="#" class="email">Info@whoiscinch.com</a></h6>
				</aside>
				<nav id="csm_container">
					<ul id="contact_social_media_navigation">
						<li><a href="#"><img src="img/contact/twitter-me-this.jpg" alt="Twitter Me This"></a></li>
						<li><a href="#"><img src="img/contact/facebook-friends.jpg" alt="Facebook Friends Forever"></a></li>
						<li><a href="#"><img src="img/contact/our-flickr.jpg" alt="Our Flickr"></a></li>
					</ul>
				</nav>
			</section>
		</section>
		<section id="contact_form">
			<h1>Contact Form</h1>
			<!--h2>Do you have a project that would be perfect for Cinch? Do you just wanna chat? Whatever your need is, we would love to talk to you. You can reach us by email, phone or simply fill out the form below and we will get back to you asap.</h2-->
			<div id="form_container">
				<form method="post" action="working.php" id="get_at_me">
					<div id="your_name_container">
						<label for="your_name_input" id="your_name_label" class="no">Your Name<span class="asterisk">*</span></label>
						<input id="your_name_input" name="name" class="text" required="" title="name">
					</div>
					<div id="email_container">
						<label for="email" id="email_label" class="no">Email Address<span class="asterisk">*</span></label>
						<input type="email" name="email" id="email" class="text" required="" title="email">
					</div>
					<div id="phone_container">
						<label for="phone" id="phone_label" class="no">Phone Number<span class="asterisk">*</span></label>
						<input name="phone" id="phone" class="text" required="" title="phone">
					</div>
					<div id="how_container">
						<label for="how" id="how_label" class="no">How Did You Hear About Us?</label>
						<input name="how" id="how" class="text">
					</div>
					<div id="questions_container">
						<label for="questions_textarea" id="questions_label" class="no">Questions or Comments<span class="asterisk">*</span></label>
						<textarea id="questions_textarea" name="questions" required="" title="questions or comments"></textarea>
						<input type="submit" id="submit" class="no">
						<div id="loading">
							<img src="img/contact/ajax-loader.gif" alt="">
						</div>
					</div> 
					<div id="response"></div>
				</form> 
			</div>
		</section>
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
