<?php

namespace App\Http\Controllers\Backend;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Licenses;
use Upload;
use Lang;

class LicensesController extends Controller
{
    public function index()
    {
    	return view('backend.licenses.index');
    }

    public function data()
    {
    	$data = Licenses::query();

    	return datatables()->of($data)->addColumn('image', function($item) {
    		return Upload::getFile('licenses', $item->id);
    	})->toJson();
    }


    public function form()
    {   
    	$id = request()->id;

    	if ($id == null) {
    		$item = Licenses::create();
    	} else {
    		$item = Licenses::find(request()->id);
    	}
        
        if (request()->hasFile('image')) {
        	Upload::saveFile('licenses', $item->id, request()->file('image'));
        }


        return response()->json(['status' => 'success', 'message' => Lang::get('alert.success.'.($id == null ? 'insert' : 'update'))]);
    }

    public function delete()
    {
        if (request()->has('id')) {
            $item = Licenses::find(request()->input('id'));
            Upload::removeFile('licenses', $item->id);
            $item->delete();

            $response = [
                'status' => 'success',
                'message' => trans('alert.success.delete')
            ];
        } else {
            $response = [
                'status' => 'error',
                'message' => 'Пожалуйста попробуйте снова'
            ];
        }
        
        return response()->json($response);
    }
}
