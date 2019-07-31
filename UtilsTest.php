<?php

use PHPUnit\Framework\TestCase;

class UtilsTest extends TestCase
{
    public function testArrayUnique()
    {
        require "Util.php";

        $util = new Util();

        $this -> assertEquals([1, 2, 3], $util -> arrayUnique([1, 2, 3, 1, 2, 3, 1, 1, 1, 1, 1,]));
        $this -> assertEquals(['a', 'b', 'c'], $util -> arrayUnique(['a', 'a', 'a', 'b', 'b', 'b', 'c', 'c', 'c', 'a']));
        $this -> assertEquals(['p', 'a'], $util -> arrayUnique(['p', 'a', 'p', 'a']));
    }


}