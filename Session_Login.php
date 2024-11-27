<!DOCTYPE html>
    <html>
    <!-- This is more advanced now-->
    
    <head>
    </head>
    
    <body>
        <?php
        session_start();
        if (isset($_POST["submit1"]) && !empty($_POST["username"]) && !empty($_POST["password"])) {
            $_SESSION["username"] = $_POST["username"];
            $_SESSION["password"] = $_POST["password"];
        }
    
        if (isset($_POST["logout"])) {
            $_SESSION["username"] = null;
            $_SESSION["password"] = null;
            session_destroy();
        }
        ?>
    
        <form method="post" action="">
            <label for="username">Username: </label>
            <input type="text" name="username">
            <br>
            <label for="password">Password: </label>
            <input type="password" name="password">
            <br>
            <input name="submit1" type="submit" value="Login">
        </form>
    
        <?php
        echo "<h1>Username: " . $_SESSION['username'] . "</h1>";
        echo "<h1>Password: " . $_SESSION['password'] . "</h1>";
        ?>
    
        <form method="post" action="">
            <input type="submit" name="logout" value="Log Out">
        </form>
    </body>
</html>