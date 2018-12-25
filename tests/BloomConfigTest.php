<?php

namespace huenisys\Bloom\Tests;

use Bloom;

class BloomConfigTest extends TestCase
{
    /**
     * Check that the multiply method returns correct result
     * @return void
     */
    public function testBloomConfigDefaults()
    {
        $this->assertSame(config('bloom.sitename'), 'Bloom');
        $this->assertSame(config('bloom.headline'), 'Be awesome!');
    }
}