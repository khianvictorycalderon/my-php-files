<?php
    // gettype returns the type of data, e.g. STRING, FLOAT, BOOL, etc...
    $a = "This is a String";
    echo gettype($a) . "<br/>";

    // is_X functions, returns 1 if true, and does not return anything if false

    // Integer
    $b = 5;
    echo gettype($b) . "<br/>";
    echo is_int($b) . "<br/>";

    // Float
    $c = 2.5;
    echo gettype($c) . "<br/>";
    echo is_float($c) . "<br/>";

    // Bool
    $d = false;
    echo gettype($d) . "<br/>";
    echo is_bool($d) . "<br/>";

    // Bool
    $e = "Sample String";
    echo gettype($e) . "<br/>";
    echo is_string($e) . "<br/>";

    // Numeric
    $f = "241";
    echo gettype($f) . "<br/>";
    echo is_numeric($f) . "<br/>";

    // Numeric
    $f = "241";
    echo gettype($f) . "<br/>";
    echo is_numeric($f) . "<br/>";

    // NULL, has no value
    $g;
    echo gettype($g) . "<br/>";
    echo is_null($g) . "<br/>";

    // NULL, has no value
    $h = array(12, "24", false);
    echo gettype($h) . "<br/>";
    echo is_null($h) . "<br/>";

    unset($a);
    echo gettype($a) . "<br/>";
?>