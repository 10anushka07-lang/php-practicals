<?php
// Inheritance Example
class sanskriti {
    function show() {
        echo "I am sanskriti(parent class)<br>";
    }
}
class deepika extends sanskriti {
    function display() {
        echo "I am deepika(child class)<br>";
    }
}
// Interface Example
interface A {
    function test();
}
class B implements A {
    function test() {
        echo "I am test function<br>";
    }
}

// Objects
$obj1 = new deepika();
$obj1->show();
$obj1->display();

$obj2 = new B();
$obj2->test();
?>
