<!DOCTYPE html>
<html>
        <head>
            <title>
                Sample Data Processing
            </title>
        </head>
        <body>
            <form action="<?php htmlspecialchars($_SERVER['PHP_SELF']); ?>" method="POST">
                <label for="name">Enter your name: </label>
                <input name="name" type="text">
                <input type="submit">
            </form>
            <?php
               if($_SERVER["REQUEST_METHOD"] === "POST") {
                $name = $_POST["name"];
                echo "Hello $name, how are you?";
               }
            ?>
        </body>
</html>