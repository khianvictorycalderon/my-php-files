<?php 
    $entered_password = "i like Srogramming";
    $database_password = "i like programming";
    $hash = password_hash($database_password, PASSWORD_DEFAULT);
    echo "<h1>{$hash}</h1>";
   
    if(password_verify($entered_password, $hash)) {
      echo "<h1>You are logged in</h1>";
    } else {
       echo "<h1>Invalid!</h1>";
    }
?>