<?php

namespace digitalCharacter\tests\Filter;

use digitalCharacter\Filter\Type\Regex;
use PHPUnit\Framework\TestCase;

class RegexTest extends TestCase
{
    public function testFilter()
    {
        $filter = new Regex('key', '/regex/');

        $this->assertEquals('key', $filter->getKey());
        $this->assertEquals('/regex/', $filter->getValue());
        $this->assertEquals('regex', $filter->getComparison());
    }
}
