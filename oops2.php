<?php
// Inheritance Example
class aayush {
    function show() {
        echo "I am aayush(parent class)<br>";
    }
}
class tanuj extends aayush {
    function display() {
        echo "I am tanuj(child class)<br>";
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
$obj1 = new tanuj();
$obj1->show();
$obj1->display();

$obj2 = new B();
$obj2->test();
?>
