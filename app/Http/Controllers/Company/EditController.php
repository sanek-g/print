<?php

namespace App\Http\Controllers\Company;

use App\Http\Controllers\Controller;
use App\Models\CompanyData;

class EditController extends Controller
{
    public function __invoke(CompanyData $company)
    {
        return view('company.edit', compact('company'));        
    }
}
