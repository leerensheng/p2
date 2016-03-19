<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="UTF-8">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<title>Password Generator</title>
		<link rel="stylesheet" href="bootstrap-3.3.6-dist/css/bootstrap.min.css">
		<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
		<script src="bootstrap-3.3.6-dist/js/bootstrap.min.js"></script>
		<link rel="stylesheet" href="style.css">
		<?php require "logic.php"; ?>
	</head>
	<body>
		<div class="container">
			<h1>Matt Lee's Random Password Generator</h1>
			<form action="index.php" method="GET">
				<label>
			    	How many words would you like in your password (Minimum 4, Maximum 9)?<br>
					<input type="text" name="numberOfWords">
				</label>
				<br>
				<label>
					<input type="checkbox" name="useNumber" value="1">
					Would you like to add a number?
				</label>
				<br>
				<label>
					<input type="checkbox" name="useSymbol" value="1">
					Would you like to add a symbol?
				</label>
				<br>
				<input type="submit" value="Generate Password" class="btn btn-primary">
			</form>
			<h3 id="error"><?php echo $errorMessage; ?></h3>
			<h2 id="password"><?php echo $displayWord . $displayNumber . $displaySymbol; ?></h2>
			<img src="password_strength.png" alt="XKCD password strength comic">
			<p>The inspiration for this project! Image courtesy of <a href="https://xkcd.com/936/">xkcd.com.</a></p>
		</div>
	</body>
</html>
