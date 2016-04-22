<?php 

include "idemo.php";

class MyClass1 implements IDemo
{
    /**
     * Summary of $p
     * @var MyClass1
     */

    var $p;

    var $q;

    function foo()
    {
        echo __METHOD__;

        $this->q = new MyClass1;
    }

    #region IDemo Members

    /**
     */
    function run()
    {
        echo __METHOD__;
    }

    #endregion
}

$a = new MyClass1;
$a->foo();
$a->q->foo();

?>