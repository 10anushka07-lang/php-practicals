<?php
interface a {
    function test();
}

class c implements a {
    const name = 10;

    function test() {
        echo "I am test<br>";
        
    }
}

$obj = new c();
$obj->test();
?>
