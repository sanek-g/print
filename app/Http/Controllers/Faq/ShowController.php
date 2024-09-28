<?php

namespace App\Http\Controllers\Faq;

use App\Http\Controllers\Controller;
use App\Models\Faq;

class ShowController extends Controller
{
    public function __invoke(Faq $faq)
    {
        return view('faq.show', compact('faq'));        
    }
}
