<!DOCTYPE html>
    <html>
        <!-- This is more advanced now-->
        <head>
        </head>
        <body>
            <form method="post" action="<?php htmlspecialchars($_SERVER['PHP_SELF']) ?>">
               <label for="username">Username: </label>
               <input name="username" type="text">
               <br>
               <label for="age">Age: </label>
               <input name="age" type="text">
               <br>
               <label for="email">Email: </label>
               <input name="email" type="text">
               <br>
               <input name="submit1" type="submit" value="Send">
            </form>
            <hr>
            <h1>Output:</h1>
            <?php
            // PHP code here:
              if($_SERVER["REQUEST_METHOD"] === "POST") {
                if(isset($_POST["submit1"])) {
    
                 // Sanitize = Removes characters
                 // Validate = Returns empty string if it doesn't pass
                 // Works best when in combination of both
    
                 $sanitized_username = filter_input(INPUT_POST, "username", FILTER_SANITIZE_SPECIAL_CHARS);
                 $sanitized_age = filter_input(INPUT_POST, "age", FILTER_SANITIZE_NUMBER_INT);
                 $sanitized_email = filter_input(INPUT_POST, "email", FILTER_SANITIZE_EMAIL);
    
                 $validated_age = filter_input(INPUT_POST, "age", FILTER_VALIDATE_INT);
                 $validated_email = filter_input(INPUT_POST, "email", FILTER_VALIDATE_EMAIL);
                 // filters user input
                 // 3 arguments:, Input post or input get, variable to filter, types of filter
    
                 echo "<h1>Hello {$sanitized_username}, You are {$sanitized_age} years old, You're email is {$sanitized_email}, This is Sanitization</h1>";
                 echo "<hr>";
    
                 if(empty($validated_age)) {
                  echo "<h1>Invalid Number</h1>";
                 } else {
                  echo "<h1>You Are {$validated_age} Years Old</h1>";
                 }
                 if(empty($validated_email)) {
                  echo "<h1>Invalid Email</h1>";
                 } else {
                  echo "<h1>You're Email is {$validated_email}</h1>";
                 }
    
                }
              }
            ?>
        </body>
    </html>