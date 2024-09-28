<?php

namespace App\Http\Controllers\Service;

use App\Http\Controllers\Controller;
use App\Models\Service;
use App\Models\ServiceImage;
use Illuminate\Support\Facades\Storage;

class DeleteController extends Controller
{
    public function __invoke(Service $service)
    {
        $images = $service->serviceImages;

        foreach($images as $image){


            Storage::delete('public/' . $image->path);
            // $image->delete();
            
        }

        $service->delete();

        return redirect()->route('service.index')->with(['message' => trans('infos.deleted',['attr' => 'Die Leistung']), 'class' => 'alert-danger']);
    }
}
