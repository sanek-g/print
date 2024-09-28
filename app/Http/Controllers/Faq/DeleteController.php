<?php

namespace App\Http\Controllers\Faq;

use App\Http\Controllers\Controller;
use App\Models\Faq;

class DeleteController extends Controller
{
    public function __invoke(Faq $faq)
    {

        $faq->delete();

        return redirect()->route('faq.index')->with(['message' => trans('infos.deleted',['attr' => 'Die Frage']), 'class' => 'alert-danger']);
    }
}
