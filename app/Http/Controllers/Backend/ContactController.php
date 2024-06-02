<?php

namespace App\Http\Controllers\Backend;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Contact;

class ContactController extends Controller
{
    public function index()
    {
    	return view('backend.contact.index');
    }

    public function data()
    {
    	$query = Contact::query();
    	return datatables()->of($query)->toJson();
    }

    public function delete()
  	{
    	if (request()->has('id')) {
    		$item = Contact::find(request()->input('id'));
    		$item->delete();  
    		$response = [
              'status' => 'success',
              'message' => 'success'
            ];
    	} else {
    		$response = [
              'status' => 'error',
              'message' => 'Пожалуйста попробуйте снова'
            ];
    	}

    	return response()->json($response);
  	}

  	public function postChange()
    {
  		$comment = Contact::find(request()->id);
  		$comment->status = 1;
  		$comment->update();

  		return response()->json(['success' => true]);
    }
}
