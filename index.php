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
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.5.0/jquery.min.js"></script>
<script src="js/imgSizer.js"></script>
<script src="js/loopedslider.js"></script>
<script>
$(function(){
	$("#loopedslider").loopedSlider({
		pagination: "pagination",
		addPagination: true,
		autoStart: 10000,
		slidespeed: 500,
		//containerClick: false,
		fadespeed: 100
	});
	var images = ['img/index/slide-1.jpg', 'img/index/slide-2.jpg', 'img/index/slide-3.jpg', 'img/index/slide-4.jpg', 'img/index/slide-5.jpg'];
	$(images).each(function(key, value) {
		var img = new Image();
		$(img)
		.attr('src', value)
		.error(function (){
			alert('Error preloading image ' . value);
		})
	});
});
</script>
</head>
<body>
<div id="wrapper">
    <header id="header">
		<a href="/"><img src="../img/logo.png" alt="Omar - Cinch Creative mascot"></a>
    </header>
    <section id="content" class="index_work_content clearfix">
	<h1>HOME</h1>
	<section id="who_is_cinch">
		<p>Well hello there! Welcome to Cinch's mobile site! Click below to view our featured project, or <a href="http://dev.whoiscinch.com?mobref=1" style="text-decoration:underline;">view our full website</a> for the whole kitten kaboodle.</p>
	</section>
	<ul id="applications" class="image-grid webbies image-grid-index">
		<li data-id="ci">
			<a href="work.php">
				<img src="../img/our-work/cinch-t.jpg"  alt="Featured Project: Cinch Creative">
				<div class="project_info_container">
					<div class="project_name">
						<h1>Cinch Creative</h1>
						<h2>Identity, Branding and Website</h2>
					</div>
						<div class="view_project">
						View Project
						</div>
				</div>
			</a>
		</li>
	</ul>
    </section>
    <nav id="nav" class="clearfix">
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
