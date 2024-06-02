<?php

namespace App\Http\Controllers\Backend;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Artisan;
use App\Http\Controllers\Controller;
use App\Models\News;
use App\Models\Subscribe;
use App\Mail\Subscribe as SubscribeMail;
use App\Jobs\SendSubscribe;
use Mail;
use Upload;
use Lang;

class NewsController extends Controller
{
    public function index()
    {
        return view('backend.news.index');
    }

    public function data()
    {
        $query = News::query();

        return datatables()->of($query)
            ->editColumn('title_ru', function ($item) {
                return str_limit($item->title_ru, 60);
            })
            ->addColumn('image', function ($item) {
                return Upload::getFile('news', $item->id);
            })->toJson();
    }

    public function getForm($id = null)
    {
        $item = News::find($id);

        if (!$item) $item = [];

        return view('backend.news.form', compact('item', 'id'));
    }

    public function postForm(Request $request, $id = null)
    {
        $data = request()->validate([
            'title_en'  => 'nullable',
            'title_ru'  => 'required|max:255',
            'title_uz'  => 'nullable',
            'title_oz'  => 'nullable',
            'text_ru'   => 'required',
            'text_uz'   => 'nullable',
            'text_oz'   => 'nullable',
            'text_en'   => 'nullable',
            'alias'     => 'nullable|string|max:255',
        ]);

        if ($id) {
            $item = News::find($id);
            $item->update($data);
        } else {
            $data['alias'] = request()->alias ?? \App\Helper\Alias::alias(new News, $data['title_ru']);
            $item = News::create($data);
            session()->flash('success', Lang::get('alert.success.insert'));
            $emails = Subscribe::pluck('email')->toArray();
            foreach ($emails as $email) {
                $details['email'] = $email;
                $details['data'] = $item;
                $job = (new SendSubscribe($details))->delay(now()->addSeconds(30));
                dispatch($job);
            }
        }

        if (request()->hasFile('image')) {
            Upload::saveFile('news', $item->id, request()->file('image'));
        }

        if (request()->hasFile('background')) {
            Upload::saveFile('news_background', $item->id, request()->file('background'));
        }

        return redirect()->action('Backend\NewsController@index')
            ->with('success', Lang::get('alert.success.' . ($id == null ? 'insert' : 'update')));
    }

    public function delete()
    {
        if (request()->has('id')) {
            $item = News::find(request()->input('id'));
            if ($item) {
                Upload::removeFiles('news', $item->id);
                Upload::removeFile('news_background', $item->id);
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
