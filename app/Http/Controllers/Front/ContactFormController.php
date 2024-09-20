<?php

namespace App\Http\Controllers\Front;

use App\Http\Controllers\Controller;
use App\Http\Requests\ContactFormRequest;
use App\Mail\ContactFormMail;
use Illuminate\Support\Facades\Mail;


class ContactFormController extends Controller
{
    public function __invoke(ContactFormRequest $request)
    {
        // data from request, store image file , save path

        $validated =$request->validated();

        $filePath = '';
        $fileName = '';

                    
        if($request->hasFile('image')){
                
            $fileName = time() . '.' . $request->file('image')->extension();

            $filePath = $request->file('image')->storeAs('attachments', $fileName, 'local');    //$image->store('attachments');


            // $fileUrl = asset('storage/app/'. $filePath);

            // dd($filePath);

            unset($validated['image']);
           
        }

    //    dd([
    //     storage_path('app/' . $filePath),
    //     file_exists(storage_path('app/' . $filePath))
    //    ]);

       

        // $response = Mail::to('g-alexander@gmx.de')->send(new ContactFormMail($request->all(), $filePath));


        Mail::to('g-alexander@gmx.de')->queue(new ContactFormMail($validated, $filePath));


        return back()->with(['message' => 'Vielen Dank für Ihre Nachricht.']);

        // if(($response)){

            
        // }

        // return back()->with(['message' => 'Ihre Nachricht konnte nicht gesendet werden, bitte versuchen Sie später noch ein Mal.']);




        
    }
}
