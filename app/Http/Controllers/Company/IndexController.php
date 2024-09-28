<?php

namespace App\Http\Controllers\Company;

use App\Http\Controllers\Controller;
use App\Models\CompanyData;

class IndexController extends Controller
{
    public function __invoke()
    {
        $company = CompanyData::first();
        return view('company.index', compact('company'));        
    }
}
