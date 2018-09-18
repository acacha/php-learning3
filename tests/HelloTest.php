<?php

class HelloTest extends TestCase
{
    require("./hello.php");
    $this->expectOutputString('Hello world');
}
