<?php

namespace App\Http\Controllers\Backend;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\PhotoGallery;
use Upload;
use Lang;

class PhotoGalleryController extends Controller
{
    public function index()
    {
    	return view('backend.photogallery.index');
    }

    public function data()
    {
    	$data = PhotoGallery::query();

    	return datatables()->of($data)->addColumn('image', function($item) {
    		return Upload::getFile('photogallery', $item->id);
    	})->toJson();
    }


    public function form()
    {   
    	$id = request()->id;

    	if ($id == null) {
    		$item = PhotoGallery::create();
    	} else {
    		$item = PhotoGallery::find(request()->id);
    	}
        
        if (request()->hasFile('image')) {
        	Upload::saveFile('photogallery', $item->id, request()->file('image'));
        }

        return response()->json(['status' => 'success', 'message' => Lang::get('alert.success.'.($id == null ? 'insert' : 'update'))]);
    }

    public function delete()
    {
        if (request()->has('id')) {
            $item = PhotoGallery::find(request()->input('id'));
            Upload::removeFile('photogallery', $item->id);
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
