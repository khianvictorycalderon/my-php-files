<?php

# Global Variable
// Declared outside of function
$global_var = "This is global variable<br/>";
function printGlobal() {
    global $global_var;
    echo $global_var;
}
printGlobal();

# Local Variable
// Declared inside of function
function printLocal() {
    $local_var = "This is local variable<br/>";
    echo $local_var;
}
printLocal();
# echo $local_var; // This will display an error.

# Static Variable
// Similar to local variable, but it retain it's values over multiple call
function printStatic() {
    static $num = 0;
    echo "$num<br/>";
    $num++;
}
# Calls the function 3 times
printStatic(); // 0
printStatic(); // 1
printStatic(); // 2

?>