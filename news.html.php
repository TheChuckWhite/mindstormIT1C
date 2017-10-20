<?php
include_once("php/news.php");
?>

<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">

	<title>Da Vinci University</title>

	<link rel="stylesheet" type="text/css" href="css/reset.css">
	<link rel="stylesheet" type="text/css" href="css/main.css">
	<link rel="stylesheet" type="text/css" href="css/news.css">

	<link rel="icon" href="img/favicon.ico" type="image/x-icon" />
	<link rel="shortcut icon" href="img/favicon.ico" type="image/x-icon" />

	<link href="https://fonts.googleapis.com/css?family=Roboto" rel="stylesheet">

</head>
<body>
	<header>
		<div id="headWrap">
			<div id="logo">
				<img src="img/logo.png">
				<div id="vinci">Da Vinci University</div>
				<div id="learn">Learning never exhausts the mind</div>
			</div>

			<div id="flag">
				<img src="img/it_flag.png" alt="italian flag">
			</div>
		</div>
	</header>
	<div id="navWrap">
		<nav>
			<ul>	
				<li><a href="index.html">Home</a></li>
				<li><a href="">About</a></li>
				<li><a href="">Courses</a></li>
				<li><a href="events.html">Events</a></li>
				<li><a href="news.html">News</a></li>
				<li><a href="contact.html">Contact</a></li>

			</ul>
		</nav>
	</div>
	<div class="wrapper">
		<div id="content">
			<?php
				foreach($newsitems as $newsitem){
					echo "
					<article>
						<div><h1>".$newsitem['title']."</h1> <span>".$newsitem['date']."</span> </div>
						<p>".$newsitem['description']."</p>
					</article>
					";
				}
			?>
		</div>

		<aside>
			<div>
				<div class="newsitem_sidebar">
					<h3>NewsItem1</h3>
					<p class="desc">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Quisque ac mattis leo. Donec accom</p>
				</div>
				<div class="newsitem_sidebar">
					<h3>NewsItem2</h3>
					<p class="desc">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Quisque ac mattis leo. Donec accom</p>
				</div>
				<div class="newsitem_sidebar">
					<h3>NewsItem3</h3>
					<p class="desc">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Quisque ac mattis leo. Donec accom</p>
				</div>
			</div>
			<div>
				Weather
			</div>
			<div id="social">
				<div>
					<img src="img/facebook.png" alt="facebook">
				</div>
				<div>
					<img src="img/twitter.png" alt="twitter">
				</div>
				<div>
					<img src="img/youtube.png" alt="youtube">
				</div>				
			</div>
		</aside>
	</div>
	<footer>
		<div class="footWrap">
			<div class="footBox">
				<h3>Locations</h3>
				<ul>
					<li>Emmen</li>
					<li>Groningen</li>

				</ul>
			</div>
			<div class="footBox">
				<h3>Da Vinci University</h3>
				<ul>
					<li>Home</li>
					<li>About</li>
					<li>Courses</li>
					<li>Events</li>
					<li>News</li>
					<li>Contact</li>

				</ul>
			</div>
			<div class="footBox">
				<h3>Open Day Registration</h3>
			</div>
		</div>
	</footer>
	<div id="footbar">
		<div class="footWrap">
			Da Vinci University
			<span id="copy">&copy; 2018</span>
		</div>
			
	</div>
</body>
</html>