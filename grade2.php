<!DOCTYPE html>
<html>
	<head>
		<meta charset='utf-8' />  
		<meta name=viewport content= 'width=device-width, initial-scale=1'>
		<!-- Latest compiled and minified CSS -->
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">

		<!-- Optional theme -->
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap-theme.min.css" integrity="sha384-rHyoN1iRsVXV4nD0JutlnGaslCJuC7uwjduW9SVrLvRYooPp2bWYgmgJQIXwl/Sp" crossorigin="anonymous">

		<link rel='stylesheet' href='css/main.css'>
		
		
				<link rel="icon" href="favicon.ico">
		<title>Historic New Castle, Delaware</title>
	</head>
	<body>
		
		<header>
			<?php include 'nav.php'?>
		</header>
		
		<main>
			<div class='container'>
					<div class='jumbotron'>
					<h1>Part 2 grading page</h1>
					<ul>
						<li>Fixed whole site to be responsive</li>
						<li>Added the comments page that validate if the entries are empty or not (except the email because that is optional) and then the php sanitizes it to remove any html tags to help prevent injections</li>
						<li>added the google maps on the directions page.</li>
						<li>original javscript component:  Added a quiz on the home page</li>
						<li>Dynamic css component:  Quiz on the home page is hidden then when the quiz button is hit the quiz comes from the left side of the page then hides when the close button is hit.</li>
						<li>added a "cool" gallery style to the photo gallery page.</li>
						<li>added a favicon to each page.</li>
						<li>PHP includes for the nav and footer</li>
						<li>added some cool looking icons on the comments form.</li>
					</ul>
				</div>
			</div>
		</main>
		
		<footer>
			<?php include 'footer.php'?>
		</footer>
		
		
		<!-- Latest compiled and minified JavaScript -->
		
		<script src='https://code.jquery.com/jquery-3.1.1.min.js'></script>
		<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
		
	</body>
</html>
