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
    <input type="text" name="numberOfWords">
		<br>
		<input type="checkbox" name="useNumber">Would you like to use numbers?
		<br>
		<input type="checkbox" name="useSymbol">Would you like to use symbols?
		<br>
		<input type="submit" value="Generate Password">

		<?php
		##$result = array_rand($dictionaryWords, $howmany);
		?>
		<?php
		for ($i = 0; $i <= $howmany; $i++) {
			$randomWord = array_rand($dictionaryWords);
			$result = $dictionaryWords[$randomWord];
			echo $result . "-";
		}
		?>

  </form>
</body>
</html>
