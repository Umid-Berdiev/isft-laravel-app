<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Contact;
use App\Mail\Contact as MailContact;
use Mail;

class ContactController extends Controller
{
    public function index()
    {
        return view('frontend.page.contacts');
    }

    public function post()
    {
    	$data = request()->only('email','fio', 'message', 'phone');

    	$rules = [
    		'email'                		=> 'required|email',
    		'fio' 	               		=> 'required|max:255',
            'message'                	=> 'required|max:255',
    		'phone' 	               	=> 'required',
    	];


        $validator = validator()->make($data, $rules);

    	if($validator->fails()) {
    		return response()->json([
    			'status' => false,
    			'messages' => $validator->messages()
    		]);
    	} else {
            Contact::create($data);
            Mail::to('info@isft.uz', 'isft.uz')->send(new MailContact($data));
            return response()->json([         
                'status'      => true,
                'messages'    => trans('alert.feedback')
            ]);
    	}
    }
}
