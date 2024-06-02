<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Contact;
use App\Mail\Contact as MailContact;
use Mail;

class ManagementController extends Controller
{
	public function index() {
		return view('frontend.management.index');
	}

	public function post() {
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
            Mail::to('director@isft.uz', 'isft.uz')->send(new MailContact($data));
            
	        $data['message'] = 'Запрос к директору: '.$data['message'];

            Contact::create($data);

            return response()->json([         
                'status'      => true,
                'messages'    => trans('alert.feedback')
            ]);
    	}
	}
}
