<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Password Generator</title>
  <link rel="stylesheet" href="style.css">
  <?php require "logic.php"; ?>
</head>
<body>
	<form action="index.php" method="GET">
    <input type="text" name="numberOfWords" value="">
		<br>
		<input type="checkbox" name="useNumber" value="1">Would you like to use numbers?
		<br>
		<input type="checkbox" name="useSymbol" value="1">Would you like to use symbols?
		<br>
		<input type="submit" value="Generate Password">

		<?php
		$result = array_rand($randomWords, $howManyWords);
		for ($i = 0; $i < $howManyWords; $i++) {
			echo ucwords($randomWords[$result[$i]]);
		}

		if ($useNumber == 1) {
			echo "Use a number";
		}
		else {
			echo "Don't use a number";
		}

#		if ($useSymbol == 1) {
#			$symbol = array_rand($randomSymbols, $howManyWords);
#			for ($i = 0; $i < $howManyWords; $i++) {
#			echo $randomSymbols[$symbol[$i]];
#		}
#		else {
#			echo "Don't use a symbol";
#		}
		?>
  </form>
</body>
</html>
