<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Password Generator</title>
  <link rel="stylesheet" href="style.css">
  <?php require("logic.php"); ?>
</head>
<body>
	<form action="pwgenerator.php" method="GET">
    <input type="text" name="numberOfWords">
  </form>
</body>
</html>
