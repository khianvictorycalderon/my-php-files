<?php
    $a = true;
    $b = false;
    // XOR operator means that the two must not have the same value, they must be different like true and false or false and true
    if($a xor $b) {
        echo "XOR condition met. <br/>";
    } else {
        echo "XOR condition did not met.<br/>";
    }

    // <> is also known as !=
    // Not equal
    $c = 24;
    if($c <> 24) {
        echo "C is not 24.<br/>";
    } else {
        echo "C is 24.<br/>";
    }

    // String concat operator .=
    $d = "Hello";
    $d .= " World.<br/>";
    echo $d;
?>