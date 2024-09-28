<?php

namespace App\Http\Controllers\Faq;

use App\Http\Controllers\Controller;


class CreateController extends Controller
{
    public function __invoke()
    {
        return view('faq.create');        
    }
}
