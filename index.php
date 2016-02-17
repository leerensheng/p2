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
		<form action="index.php" method="GET">
	    <input type="text" name="numberOfWords">
			<br>
			<input type="checkbox" name="useNumber" value="1">Would you like to use numbers?
			<br>
			<input type="checkbox" name="useSymbol" value="1">Would you like to use symbols?
			<br>
			<input type="submit" value="Generate Password">
			<?php echo $displayWord . $displayNumber . $displaySymbol; ?>
		</form>
	</body>
</html>
