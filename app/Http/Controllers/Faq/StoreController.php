<?php

namespace App\Http\Controllers\Faq;

use App\Http\Controllers\Controller;
use App\Http\Requests\Faq\StoreRequest;
use App\Models\Faq;


class StoreController extends Controller
{
    public function __invoke(StoreRequest $request)
    {

        Faq::create($request->validated());

        return redirect()
        ->route('faq.index')
        ->with(['message' => trans('infos.stored',['attr' => 'Die häufige Frage']), 'class' => 'alert-success']);
    }
}
