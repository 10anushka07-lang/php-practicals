<?php
// Inheritance Example
class riddhi {
    function show() {
        echo "I am riddhi(parent class)<br>";
    }
}

class anushka extends riddhi {
    function display() {
        echo "I am anushka(child class)<br>";
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
$obj1 = new anushka();
$obj1->show();
$obj1->display();

$obj2 = new B();
$obj2->test();
?>
