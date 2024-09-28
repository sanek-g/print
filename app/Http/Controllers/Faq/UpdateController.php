<?php

namespace App\Http\Controllers\Faq;

use App\Http\Controllers\Controller;
use App\Http\Requests\Faq\UpdateRequest;
use App\Models\Faq;


class UpdateController extends Controller
{
    public function __invoke(UpdateRequest $request, Faq $faq)
    {
       


        
        $faq->update($request->validated());

        return redirect()
        ->route('faq.show', $faq)
        ->with(['message' => trans('infos.updated',['attr' => 'Die häufige Frage']), 'class' => 'alert-success']);
        
    }
}
