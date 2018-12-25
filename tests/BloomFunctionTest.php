<?php

namespace huenisys\Bloom\Tests;

use Bloom;

class BloomFunctionTest extends TestCase
{
    /**
     * Check that the multiply method returns correct result
     * @return void
     */
    public function testMultiplyReturnsCorrectValue()
    {
        $this->assertSame(Bloom::multiply(4, 4), 16);
        $this->assertSame(Bloom::multiply(2, 9), 18);
    }
}