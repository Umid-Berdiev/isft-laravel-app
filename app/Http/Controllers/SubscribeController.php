<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Subscribe;
use Lang;

class SubscribeController extends Controller
{
    public function post()
    {
    	$data = request()->only('email');

    	$rules = ['email' => 'required|email|unique:subscribes'];

    	$validator = validator()->make($data, $rules);

    	if($validator->fails()) {
            $errors = $validator->errors();
    		return response()->json([
    			'status' => false,
    			'messages' => $errors->first('email')
    		]);
    	} else {
    		Subscribe::create($data);
    	}

    	return response()->json([         
            'status'      => true,
            'messages'    => Lang::get('alert.success.insert')
        ]);
    }
}
