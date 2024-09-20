<?php

namespace App\Http\Controllers\Service;

use App\Http\Controllers\Controller;
use App\Models\Service;

class IndexController extends Controller
{
    public function __invoke()
    {
        $services = Service::with('serviceImages')->get();
        return view('service.index', compact('services'));        
    }
}
