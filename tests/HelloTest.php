<?php

use PHPUnit\Framework\TestCase;


class HelloTest extends TestCase
{
    require("./hello.php");
    $this->expectOutputString('Hello world');
}
