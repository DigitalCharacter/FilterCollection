<?php

namespace dc\tests\Filter;

use dc\Filter\Type\GreaterThan;
use PHPUnit\Framework\TestCase;

class GreaterThanTest extends TestCase
{
    public function testFilter()
    {
        $filter = new GreaterThan('key', 1);

        $this->assertEquals('key', $filter->getKey());
        $this->assertEquals(1, $filter->getValue());
        $this->assertEquals('gt', $filter->getComparison());
    }
}
