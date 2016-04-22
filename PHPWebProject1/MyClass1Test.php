<?php

include "index.php";

/**
 * MyClass1Test short summary.
 *
 * MyClass1Test description.
 *
 * @version 1.0
 * @author bspain
 */
class MyClass1Test extends PHPUnit_Framework_TestCase
{
    public function testBasic()
    {
        $a = new MyClass1();
        $this->assertNull($a->q);
        $a->foo();
        $this->assertNotNull($a->q);
    }
}
?>