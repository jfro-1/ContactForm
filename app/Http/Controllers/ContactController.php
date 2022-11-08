<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use App\Mail\ContactMail;

class ContactController extends Controller
{
    public function contact()
    {
        return view('contact');
    }
    // $imagePath = request('file');

    // $file = Image::make(public_path("storage/{$imagePath}"));

    // $file->save();

    public function sendMail(Request $request)
    {
        // dd($request);
        $details = [
            'name' => $request->name,
            'email' => $request->email,
            'mesg' => $request->decs,
            'imageUrl' => $request->imageUrl,
            'file' => $request->file
        ];

        // alle informatie gaat daar (jfroosama10@gmail.com)
        Mail::to('jfroosama10@gmail.com')->send(new ContactMail($details));
        return back()->with('message_send', 'we will answer you:');
    }
}