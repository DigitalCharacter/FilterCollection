<?php

namespace dc\tests\Filter;

use dc\Filter\Type\NotEqual;
use PHPUnit\Framework\TestCase;

class NotEqualTest extends TestCase
{
    public function testFilter()
    {
        $filter = new NotEqual('key', 'value');

        $this->assertEquals('key', $filter->getKey());
        $this->assertEquals('value', $filter->getValue());
        $this->assertEquals('neq', $filter->getComparison());
    }
}
