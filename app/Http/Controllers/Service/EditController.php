<?php

namespace App\Http\Controllers\Service;

use App\Http\Controllers\Controller;
use App\Models\Service;

class EditController extends Controller
{
    public function __invoke(Service $service)
    {
        return view('service.edit', compact('service'));        
    }
}
