<?php

  $randomWords = array("guitar", "monument", "bus", "department", "city", "overpass", "communication", "drive", "camoflage", "hostel", "dispense", "countdown", "northwest", "look", "friendship", "reduce", "carefully", "guard", "repel", "vastly");
  $randomNumbers = rand(0,9);
  $randomSymbols = array("!", "@", "#", "$", "%", "^", "&", "*", "(", ")");

  $howManyWords = 4;
#  if ($_GET["numberOfWords"] > 3 && $_GET["numberOfWords"] < 10) {
#    $howManyWords = $_GET["numberOfWords"];
#  }

  if(isset($_GET["numberOfWords"]) && $_GET["numberOfWords"] > 3 && $_GET["numberOfWords"] < 10) {
    $howManyWords = $_GET["numberOfWords"];
  }

  $useNumber = 0;
  if(isset($_GET["useNumber"]) && !empty($_GET["useNumber"])) {
    $useNumber = $_GET["useNumber"];
  }

  $useSymbol = 0;
  if(isset($_GET["useSymbol"]) && !empty($_GET["useSymbol"])) {
    $useSymbol = $_GET["useSymbol"];
  }
?>
