<?php

namespace huenisys\Bloom\Models;

use Illuminate\Database\Eloquent\Model;

class Page extends Model
{
    public function getRouteKeyName()
    {
        return 'slug';
    }
}
