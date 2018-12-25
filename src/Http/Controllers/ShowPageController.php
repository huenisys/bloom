<?php

namespace huenisys\Bloom\Http\Controllers;

use App\Page;
use App\Http\Controllers\Controller;

class ShowPageController extends Controller
{
    public function __invoke(Page $page)
    {
        if (! $page)
            return response()->json(['error'=>'No pages found.']);
            //exit;
        return view('bloom::pages', compact('page'));
    }
}
