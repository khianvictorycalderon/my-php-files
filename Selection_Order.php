<!DOCTYPE html>
<html>
    <!-- This is more advanced now-->
    <head>
        </head>
        <body>
            <form method="post" action="<?php htmlspecialchars($_SERVER['PHP_SELF']); ?>">
              <input name="food_type" value="Ramen" type="radio">
              <label for="food_type">Ramen</label>
              <input name="food_type" value="Samgyup" type="radio">
              <label for="food_type">Samgyup</label>
              <input name="food_type" value="Bulgogi" type="radio">
              <label for="food_type">Bulgogi</label>
              <br>
              <input name="quantity" type="number"><br>
              <input type="submit" value="Send">
            </form>
            <hr>
            <h1>Output:</h1>
            <?php
            // PHP code here:
            function getNo($xyz) {
                if($xyz == 1) {
                    return "piece";
                } else if ($xyz > 1) {
                    return "pieces";
                }
            }
    
            if($_SERVER["REQUEST_METHOD"] === "POST") {
                if(isset($_POST["food_type"]) && isset($_POST["quantity"])
                && !empty($_POST["food_type"]) && !empty($_POST["quantity"])) {
                    $food = $_POST["food_type"];
                    $quan = $_POST["quantity"];
                    echo "<h1>You ordered {$quan} " . getNo($quan) . " of {$food}, thank you!</h1>";
                }
            }
            ?>
    </body>
</html>