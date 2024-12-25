<?php
namespace MyNamespace;

// Magic constants demo
echo "Current line number: " . __LINE__ . "<br/>"; // Output current line number
echo "Full file path: " . __FILE__ . "<br/>";  // Output the full path to the file
echo "Directory path: " . __DIR__ . "<br/>";  // Output the directory of the file

// Function example using __FUNCTION__
function exampleFunction() {
    echo "Function name: " . __FUNCTION__ . "<br/>";  // Output current function's name
}
exampleFunction();

// Class example using __CLASS__
class ExampleClass {
    function displayClassName() {
        echo "Class name: " . __CLASS__ . "<br/>";  // Output current class's name
    }
}
$obj = new ExampleClass();
$obj->displayClassName();

// Method example using __METHOD__
class MethodExample {
    public function showMethodName() {
        echo "Method name: " . __METHOD__ . "<br/>";  // Output current method's name
    }
}
$obj2 = new MethodExample();
$obj2->showMethodName();

// Namespace example using __NAMESPACE__
echo "Current namespace: " . __NAMESPACE__ . "<br/>";
?>
