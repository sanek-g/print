<?php

namespace App\Http\Controllers\Service;

use App\Http\Controllers\Controller;
use App\Http\Requests\Service\UpdateRequest;
use App\Models\Service;
use App\Models\ServiceImage;

class UpdateController extends Controller
{
    public function __invoke(UpdateRequest $request, Service $service)
    {
       
        $request->validated();

        // if (!empty($data['service_images'])) {
        //     $serviceImages = $data['service_images'];
        //     unset($data['service_images']);

        //     foreach ($serviceImages as $image) {
        //         $filePath = $image->store('services', 'public');
        //         ServiceImage::create([
        //             'service_id' => $service->id,
        //             'path' => $filePath,
        //         ]);
        //     }
           
        // }
        // $service->update($data);


        if ($request->file('service_images')) {
            $serviceImages = $request->file('service_images');

            foreach ($serviceImages as $image) {
                $filePath = $image->store('services', 'public');
                ServiceImage::create([
                    'service_id' => $service->id,
                    'path' => $filePath,
                ]);
            }
           
        }

        
        $service->update($request->except('service_images'));

        return redirect()
        ->route('service.show', $service)
        ->with(['message' => trans('infos.updated',['attr' => 'Die Leistung']), 'class' => 'alert-success']);
        
    }
}
