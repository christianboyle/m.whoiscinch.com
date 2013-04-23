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
	<section id="content" class="about_content clearfix">
		<h1>About Us</h1>
		<section id="who_is_cinch">
			<p>Cinch Creative offers confidence without pomp, service without severity, and commitment without restraint.  In a perpetually evolving web market, delivering a company's brand to a live consumer base is our 
conviction.  With over 25 years of combined design experience, startups, rebrands, redesigns, and the 
entirety of a company's web marketing needs is simple with Cinch. We love what we do and our work 
is the proof.</p>	
		</section>
		<section id="the_team">
			<article>
				<figure>
					<img src="img/about/cw.jpg" alt="">
				</figure>

				<section>
					<span class="name">Christopher Wilson -</span>
					<span class="title">Co-Founder/Designer</span>
					<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Mauris nec enim dolor, consectetur tristique augue. Nam mattis leo at ipsum ornare fermentum pharetra nisl pulvinar. Ut tempor auctor.</p>
				</section>
			</article>
			<article>

				<figure>
					<img src="img/about/cc.jpg" alt="">
				</figure>
				<section>
					<span class="name">Cayce Richardson -</span>
					<span class="title">Co-Founder/Designer</span>
					<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Mauris nec enim dolor, consectetur tristique augue. Nam mattis leo at ipsum ornare fermentum pharetra nisl pulvinar. Ut tempor auctor.</p>

				</section>
			</article>
			<article>
				<figure>
					<img src="img/about/cb.jpg" alt="">
				</figure>
				<section>
					<span class="name">Christian Boyle -</span>

					<span class="title">Co-Founder/Developer</span>
					<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Mauris nec enim dolor, consectetur tristique augue. Nam mattis leo at ipsum ornare fermentum pharetra nisl pulvinar. Ut tempor auctor.</p>
				</section>			
			</article>
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
