<?php

namespace App\Http\Controllers;

use App\Models\Mosque;
use App\Mail\MosqueMail;
use App\Mail\ContactMail;
use App\Mail\ImamMail;
use Illuminate\Http\Request;
use Mail;

class MailController extends Controller
{
    public function mosque(Request $request)
    {

             $details = [
                'nom' => $request->nom,
                'président' => $request->président,
                'adresse' => $request->adresse,
                'capacité' => $request->capacité,
                'année' => $request->année,
                'cours' => $request->cours,
            ];
            Mail::to('walidboutzougarte@gmail.com')->send(new MosqueMail($details));
            return back()->with('message_sent','Your message has been sent successfuly');

    }
    public function contact(Request $request)
    {

             $details = [
                'name' => $request->name,
                'email' => $request->email,
                'profession' => $request->profession,
                'message' => $request->message,
            ];
            Mail::to('walidboutzougarte@gmail.com')->send(new ContactMail($details));
            return back()->with('message_sent','Your message has been sent successfuly');

    }
    public function imam(Request $request)
    {
        $details = [
            'name' => $request->name,
            'email' => $request->email,
            'profession' => $request->profession,
            'message' => $request->message,
        ];
        Mail::to('walidboutzougarte@gmail.com')->send(new ImamMail($details));
        return back()->with('message_sent','Your message has been sent successfuly');
    }
}
