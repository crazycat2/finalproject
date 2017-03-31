<!doctype html>
<html lang="en">

<head>
	<meta charset="UTF-8">
	<title>Weather Home</title>
	<meta name="viewport" content="width=device-width">
	<meta http-equiv="x-ua-compatible" content="ie=edge">
	<link rel="stylesheet" href="http://thiscrazycat.com/homework/ajaxthing/css/weather-style.css" type="text/css" media="screen">
    <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.5.1/jquery.min.js"></script>
    <script src="http://api.wunderground.com/api/b71cfa659837e78f/geolookup/q/autoip.json"></script>
 
</head>
<!-- *********************************************
* Who Did You Collaborate With On This Assessment?
* 1. Sierra Laney
* 2. Kathy Walker
* 3. Naomi Bastian (assisted)
* 4. Max Efoshkin (assisted)
* 5.
* ******************************************** -->
<body>
	<div id="wrapper">
		<header id="page-header">
			<?php include 'modules/header.php'; ?>
		</header>
		<nav id="page-nav">
			<?php include 'modules/navigation.php'; ?>
		</nav>
		<main id="page-main">
			<section class="weather-container">
				<div id="cover">
					<div id="status">Loading...</div>
				</div>
				<h1 id="cityDisplay"></h1>
				<h2>Current Conditions</h2>
				<ul id="current_conditions">
					<li id="currentTemp"></li>
					<li id="summary"></li>
					<li id="add1"></li>
					<li id="add2"></li>
					<li id="add3"></li>
				</ul>
			</section>
		</main>
		<footer id="page-footer">
			<?php include 'modules/footer.php'; ?>
			<small>Last updated: <?php echo date('j F, Y', getlastmod()); ?></small>
    <script src="/homework/ajaxthing/jquery-3.1.1.min.js"></script>
    <script src="/homework/ajaxthing/remote_wu.js"></script>
		</footer>
        
	</div>
</body>

</html>
