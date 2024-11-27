<?php 
      $sample_array = array(10, "Hello", true);
      print_r($sample_array);
      print_r("<br><br>");
      print_r($sample_array[0] . "<br>");
      print_r($sample_array[1] . "<br>");
      print_r($sample_array[2] . "<br>");
     
      // advance array functions
      $x = array("Banana", "Apple", "Orange", "Kiwi", "Pineapple");
      array_push($x, "Dalandan"); // Adds a last value
      array_pop($x); // Removes the last value
      array_shift($x); // Removes the first value
      array_unshift($x, "Lettuce"); // Adds a first value
      $th = array_reverse($x); // Reverses the array and returns a new value
     
      forEach($x as $item) {
         echo "<h1> {$item} </h1>";
      }
      echo "<h1> How many values in array: " . count($x) . "</h1>";
      echo "<h1>";
      print_r($th);
      echo "</h1>";
?>