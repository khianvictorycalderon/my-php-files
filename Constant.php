<?php

    // 2 ways to declare constant in PHP
    // using define()
    // using const
    // With constant, $ (dollar sign) is not required

/*
 using define()
 syntax:
 define(string $constant_name, mixed $value)
*/

// Case sensitive
define("CONSTANT_VAR", "This is a fixed value and cannot be changed<br/>");
echo CONSTANT_VAR;

// Using const
const ANOTHER_CONST_VAR = "This is another constant variable<br/>";
echo ANOTHER_CONST_VAR;

?>