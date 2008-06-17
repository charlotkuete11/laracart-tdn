<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\ContactRequest;
use App\Mail\ContactMessageCreated;
use Mail;
use Flashy;
use App\Models\Message;

class ContactsController extends Controller
{
    public function create(){
        return view('contacts.create');
    }

    public function store(ContactRequest $request){
        $message = Message::create($request->only('name','email','message'));

        $mailable = new ContactMessageCreated($message);
        
        Mail::to(env('MAIL_FROM_ADDRESS'))->send($mailable);

        flashy('Nous vous repondons dans les plus bref delais!!!');

        return redirect()->route('root_path');
    }
}
