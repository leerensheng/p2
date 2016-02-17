<?php

  $randomWords = array("guitar", "monument", "bus", "department", "city", "overpass", "communication", "drive", "camoflage", "hostel", "dispense", "countdown", "northwest", "look", "friendship", "reduce", "carefully", "guard", "repel", "vastly");
  $randomNumbers = rand(0,9);
  $randomSymbols = array("!", "@", "#", "$", "%", "^", "&", "*", "(", ")");

  $howManyWords = 4;

  if(isset($_GET["numberOfWords"])) {
    if($_GET["numberOfWords"] < 4 || $_GET["numberOfWords"] > 9) {
      $howManyWords = 4;
      echo $errorMessage = "Please enter a number between 4 and 9.";
     }
    else {
      $howManyWords = $_GET["numberOfWords"];
    }
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
