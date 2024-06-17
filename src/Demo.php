<?php
namespace Terrafrost\Namespace;

class Demo
{
    public function __construct()
    {
        define('ZZZ', 999);
    }

    public function __destruct()
    {
        echo ZZZ . "\n";
    }
}
