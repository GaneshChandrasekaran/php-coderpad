<?php

namespace App\Tests;

use App\Solution;
use PHPUnit\Framework\TestCase;

class SolutionTest extends TestCase
{
    public function testTest()
    {
        $solution = new Solution();

        self::assertSame('Hello', $solution->test());
    }
}
