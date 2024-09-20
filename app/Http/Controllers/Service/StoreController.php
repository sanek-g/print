<?php

namespace App\Http\Controllers\Service;

use App\Http\Controllers\Controller;
use App\Http\Requests\Service\StoreRequest;
use App\Models\Service;
use App\Models\ServiceImage;
use Illuminate\Support\Facades\Storage;

class StoreController extends Controller
{
    public function __invoke(StoreRequest $request)
    {
        $data = $request->validated();

        $serviceImages = $data['service_images'];

        unset($data['service_images']);

        $service = Service::create($data);

        foreach($serviceImages as $image){
            $filePath = Storage::disk('public')->put('/services', $image);
            ServiceImage::create([
                'service_id' => $service->id,
                'path' => $filePath
            ]);
        }


        // $servise = Service::firstOrCreate([
        //     'title' => $data['title']
        // ]);

        return redirect()
        ->route('service.index')
        ->with(['message' => trans('infos.stored',['attr' => 'Die Leistung']), 'class' => 'alert-success']);
    }
}
