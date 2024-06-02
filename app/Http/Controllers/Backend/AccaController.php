<?php

namespace App\Http\Controllers\Backend;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Acca;
use Lang;

class AccaController extends Controller
{
    public function index()
    {
        return view('backend.acca.index');
    }

    public function data()
    {
        $query = Acca::query();

        return datatables()->of($query)->toJson();
    }

    public function getForm($id = null)
    {
        $item = Acca::find($id);

        if (!$item) $item = [];

        return view('backend.acca.form', compact('item', 'id'));
    }

    public function postForm($id = null)
    {
        $data = request()->validate([
            'title_en'              =>  'nullable',
            'title_ru'              =>  'required|max:255',
            'title_oz'              =>  'nullable',
            'title_uz'              =>  'nullable',
            'text_ru'               =>  'required',
            'text_uz'               =>  'nullable',
            'text_oz'               =>  'nullable',
            'text_en'               =>  'nullable',
        ]);

        if ($id) {
            $item = Acca::find($id);
            $item->update($data);
        } else {
            $item = Acca::create($data);
            session()->flash('success', Lang::get('alert.success.insert'));
        }

        return redirect()->action('Backend\AccaController@index')
                    ->with('success', Lang::get('alert.success.'.($id == null ? 'insert' : 'update')));
    }

    public function delete()
    {
        if (request()->has('id')) {
            $item = Acca::find(request()->input('id'));
            if ($item) {
                $item->delete();
            }

            $response = [
                'status' => 'success',
                'message' => trans('alert.success.delete')
            ];
        } else {
            $response = [
                'status' => 'error',
                'message' => 'Failed. Please try again!'
            ];
        }
        
        return response()->json($response);
    }
}
