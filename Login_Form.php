<!DOCTYPE html>
<html>
    <head>
        <title>
            Sample Data Processing
        </title>
    </head>
    
    <body>
        <form action="<?php htmlspecialchars($_SERVER['PHP_SELF']) ?>" method="POST">
            <label for="username">Username: </label>
            <input name="username" type="text">
            <br>
            <label for="password">Password: </label>
            <input name="password" type="text">
            <br>
            <input type="submit">
        </form>
    
        <?php
        if ($_SERVER["REQUEST_METHOD"] === "POST") {
            // check if the form is submitted
            if (isset($_POST["username"]) && isset($_POST["password"])) {
                // && !empty($_POST["username"]) && !empty($_POST["password"])
                // check if variables are set and not empty
                // this is done to prevent show code of php code error
                $username = $_POST["username"];
                $password = $_POST["password"];
    
                if ($username === "jack" && $password === "123") {
                    echo "<h1>Welcome $username</h1>";
                } else if ($username === "blake" && $password === "123") {
                    echo "<h1>Welcome $username</h1>";
                } else if ($username === "john" && $password === "123") {
                    echo "<h1>Welcome $username</h1>";
                } else {
                    echo "<h1>Your username or password is invalid!</h1>";
                }
            }
        }
        ?>
    </body>
</html>