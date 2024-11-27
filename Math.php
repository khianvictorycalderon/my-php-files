
<?php 
    $x = 15;
    $y = -7.5;
    $z = 10.13;
   
    $a = abs($y); // returns the absolute value of the number
    echo "<h1>{$a}</h1>";
    $b = round($y); // returns nearest rounded of the number
    echo "<h1>{$b}</h1>";
    $c = floor($z); // returns the rounded low of the number
    echo "<h1>{$c}</h1>";
    $d = ceil($z); // returns the rounded high of the number
    echo "<h1>{$d}</h1>";
   
    echo "<h1>" . pow($x, 2) . "</h1>"; // returns the power of the argument
    echo "<h1>" . $x ** 2 . "</h1>"; // returns the power of the argument
   
    echo "<h1>" . sqrt(100) . "</h1>"; // returns the square root of argument
   
    echo "<h1>" . max(1,2,3) . "</h1>"; // returns the highest argument
    echo "<h1>" . min(1,2,3) . "</h1>"; // returns the lowest argument
   
    echo "<h1>" . pi() . "</h1>"; // returns the value of pi
    echo "<h1>" . rand(1,6) . "</h1>"; // returns the random number between 2 input
?>