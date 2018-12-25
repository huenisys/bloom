<?php

namespace huenisys\Bloom;

use Illuminate\Support\Facades\Facade;
class BloomFacade extends Facade
{
    protected static function getFacadeAccessor()
    {
        return 'bloom';
    }
}
