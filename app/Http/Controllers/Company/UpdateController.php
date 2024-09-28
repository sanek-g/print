<?php

namespace App\Http\Controllers\Company;

use App\Http\Controllers\Controller;
use App\Models\CompanyData;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class UpdateController extends Controller
{
    public function __invoke(Request $request, CompanyData $company)
    {
        $data = $request->validate([
            'name' => 'required|string|max:100',
            'director_name' => 'required|string|max:50',
            'director_lastname' => 'required|string|max:50',
            'street' => 'required|string|max:100',
            'zip' => 'required|digits:5',
            'city' => 'required|string|max:100',
            'email' => 'required|email',
            'website' => 'required|url',
            'phone' => 'nullable',
            'mobile' => 'required',
            'whatsapp' => 'nullable',
            'logo_path' => 'nullable|image',
            'icon' => 'nullable|mimes:ico,jpg,jpeg,bmp,png',
        ]);

        if ($request->file('logo_path')) {
            if ($company->logo_path && file_exists(storage_path('app/public/' . $company->logo_path))) {
                Storage::delete('public/' . $company->logo_path);
            }

            $data['logo_path'] = $request->file('logo_path')->store('img', 'public');
        }

        if ($request->file('icon')) {

            if ($company->icon && file_exists(storage_path('app/public/' . $company->icon))) {
                Storage::delete('public/' . $company->icon);
            }

            $data['icon'] = $request->file('icon')->store('img', 'public');
        }

        $company->update($data);

        return redirect()
            ->route('company.index')
            ->with(['message' => trans('infos.updated', ['attr' => 'Die Firmendaten']), 'class' => 'alert-success']);
    }
}
