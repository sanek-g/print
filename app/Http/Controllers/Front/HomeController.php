<?php

namespace App\Http\Controllers\Front;

use App\Http\Controllers\Controller;
use App\Models\Service;

class HomeController extends Controller
{
    public function __invoke()
    {
        $services = Service::with('serviceImages')->get();

        return view('home', compact('services'));
    }
}
