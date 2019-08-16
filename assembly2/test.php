<?php

spl_autoload_register(function ($class) {
    require "testclass.php";
});

class NewClass extends TestClass { public function test() { echo 'test123'; } }
// eval("class NewClass extends TestClass { public function test() { echo 'test123'; } }");

$obj = new NewClass();
$obj->test();