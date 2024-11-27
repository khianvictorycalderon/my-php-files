<?php
    $name = "Khian Calderon";
    $name2 = "     KHIAN VICTORY   ";
    $num = "098-765-4321";
    
    // useful functions
    $lowercases = strtolower($name); // returns lower cases of string
    echo "<h1>{$lowercases}</h1>";
    $uppercases = strtoupper($name); // returns upper cases of string
    echo "<h1>{$uppercases}</h1>";
    $trimmed = trim($name2); // returns a new string with all non latin alphabet removed (special characters)
    echo "<h1>{$trimmed}</h1>";
   
    $padded = str_pad($name, 25, "-"); // adds a character on the entire length
    echo "<h1>{$padded}</h1>";
    $replaced = str_replace("-","___?___",$num); // (What to replace?,What to replace with?,String or string variable)
    echo "<h1>{$replaced}</h1>";
   
    $reversed = strrev($name); // reverses the string
    echo "<h1>{$reversed}</h1>";
    $comp = strcmp($name, $name2); // compares 2 strings
    echo "<h1>{$comp}</h1>";
   
    $length = strlen($name2); // counts the string
    echo "<h1>{$length}</h1>";
    $index = strpos($name, " "); // returns the index of the first instances of the expression
    echo "<h1>{$index}</h1>";
    $sub = substr($name, 0, 7); // returns the part of the string, if no index, then it will copy the entire string
    echo "<h1>{$sub}</h1>";
   
    echo "<hr>";
    // Implode and explode
    $separated = explode(" ",$name); // separates strings to array by word
    foreach($separated as $lmx) {
       echo "<h1>{$lmx}</h1>";
    }
    $arrayName = array("Khian","Victory","Calderon");
    $mixed = implode("__",$arrayName);
    echo "<h1>{$mixed}</h1>";
?>