<?php 
    $capitals = array(
       "USA" => "Washington DC",
       "Japan" => "Tokyo",
       "South Korea" => "Seoul",
       "Philippines" => "Manila"
    );
   
    $filp_capitals = array_flip($capitals); // returns the flip values of the associative array
   
    $capitals["China"] = "Beijing";
    
    echo "<h1>" . $capitals['USA'] . "</h1> <hr>";
    foreach($capitals as $x => $y) {
       echo "<h1> {$x}, Capital: {$y} </h1>";
    }
   
?>