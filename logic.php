<?php

    #My arrays
    $randomWords = array("guitar", "monument", "bus", "department", "city", "overpass", "communication", "drive", "camoflage", "hostel", "dispense", "countdown", "northwest", "look", "friendship", "reduce", "carefully", "guard", "repel", "vastly");
    $randomNumbers = rand(0,9);
    $randomSymbols = array("!", "@", "#", "$", "%", "^", "&", "*", "(", ")");

    #Initialized at 4 so that there's be a password upon load, initialized error message as an empty string
    $howManyWords = 4;
    $errorMessage = "";

    #The conditional making sure that the user enters a valid number. This is the server side validation of my assignment.
    if(isset($_GET["numberOfWords"])) {
        if($_GET["numberOfWords"] < 4 || $_GET["numberOfWords"] > 9) {
            $howManyWords = 4;
            $errorMessage = "Please enter a number between 4 and 9. <br>";
        }
        else {
            $howManyWords = $_GET["numberOfWords"];
            $errorMessage = "";
        }
    }

    #The conditional that will output whether the user wants a number or not
    $useNumber = 0;
    if(isset($_GET["useNumber"]) && !empty($_GET["useNumber"])) {
        $useNumber = $_GET["useNumber"];
    }

    #The conditional that will output whether the user wants a symbol or not
    $useSymbol = 0;
    if(isset($_GET["useSymbol"]) && !empty($_GET["useSymbol"])) {
        $useSymbol = $_GET["useSymbol"];
    }

    #Initialized the words of the password to an empty string
    $displayWord = "";

    #The loop that will output the words of the password
    $result = array_rand($randomWords, $howManyWords);
    for ($i = 0; $i < $howManyWords; $i++) {
        $randomWord = ucwords($randomWords[$result[$i]]);
        if ($i < $howManyWords - 1) {
            $displayWord = $displayWord . $randomWord . "-";
        }
        else {
            $displayWord = $displayWord . $randomWord;
        }
    }

    #Initialize to an empy string to avoid Invalid Identifier warning
    $displayNumber = "";

    #Conditional for what to do if the user wants a number
    if ($useNumber == 1) {
        $displayNumber = $randomNumbers;
    }

    #Initialize to an empy string to avoid Invalid Identifier warning
    $displaySymbol = "";

    #Conditional for what to do if the user wants a symbol
    if ($useSymbol == 1) {
        $displaySymbol = $randomSymbols[rand(0,9)];
    }

?>
