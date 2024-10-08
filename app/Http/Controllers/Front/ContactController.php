<?php

namespace App\Http\Controllers\Front;

use App\Http\Controllers\Controller;
use App\Models\Faq;

class ContactController extends Controller
{
    public function __invoke()
    {
        $faqs = Faq::all();
        return view('contact', compact('faqs'));
    }
}
