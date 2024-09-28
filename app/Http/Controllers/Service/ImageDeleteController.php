<?php

namespace App\Http\Controllers\Service;

use App\Http\Controllers\Controller;
use App\Models\ServiceImage;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class ImageDeleteController extends Controller
{
    public function __invoke(ServiceImage $serviceImage)
    {
        Storage::delete('public/' . $serviceImage->path);
        $serviceImage->delete();

        return back()->with(['message' => trans('infos.deleted',['attr' => 'Das Bild']), 'class' => 'alert-danger']);
    }
}
