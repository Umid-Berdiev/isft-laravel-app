<?php

namespace App\Http\Controllers\Backend;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Video;
use Lang;

class VideoController extends Controller
{
    public function index()
    {
    	return view('backend.video.index');
    }

    public function data()
    {
    	$query = Video::query();

    	return datatables()->of($query)->toJson();
    }


    public function form()
    {   
    	$data = request()->validate([
    		'link'	=>	'required|url'
    	]);

    	$entered = Video::find(request()->id);

    	if ($entered) {
    		$entered->update($data);
    	} else {
    		$item = Video::create($data);
    	}
        

        return response()->json(['status' => 'success', 'message' => Lang::get('alert.success.'.($entered == null ? 'insert' : 'update'))]);
    }

    public function delete()
    {
        if (request()->has('id')) {
            $item = Video::find(request()->input('id'));
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
