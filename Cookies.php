<?php 
    // Syntax:
    // (Value ID, Value, Expiration Time, File Path)
    setcookie("Favorite_Color", "Black", time() + (100), "/");
    setcookie("Favorite_Music", "Love_Music", time() + (100), "/");
    setcookie("Favorite_Food", "Bulgogi", time() + (100), "/");
   
    // to delete a cookie, set the time to -0
    setcookie("Favorite_Music", "", time() - 0, "/");
   
    foreach($_COOKIE as $key => $value) {
       echo "<h1>{$key} = {$value}</h1>";
    }
   
    // Sample advertisements
    if(isset($_COOKIE["Favorite_Food"])) {
       echo "<h1>Hungry?, Buy Some {$_COOKIE['Favorite_Food']}! </h1>";
    } else {
       echo "<h1>I don't know what kind of food you like</h1>";
    }
?>