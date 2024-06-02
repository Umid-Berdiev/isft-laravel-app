<?php

namespace App\Http\Controllers\Backend;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Page;
use App\Models\News;
use App\Models\PhotoGallery;
use App\Models\Contact;
use App\Models\Subscribe;
use App\Helper\Alias;
use Upload;
use Storage;

class PageController extends Controller
{
    public function dashboard()
    {
        $count['page'] = Page::count();
        $count['news'] = News::count();
        $count['photo'] = PhotoGallery::count();
        $count['contact'] = Contact::count();
        $count['subscribe'] = Subscribe::count();

        return view('backend.page.dashboard', compact('count'));
    }

    public function index()
    {
        return view('backend.page.index');
    }

    public function data()
    {
        $query = Page::query();
        return datatables()->of($query)
            ->editColumn('title_ru', function ($item) {
                return str_limit($item->title_ru, 35);
            })
            ->editColumn('alias', function ($item) {
                return route('page.show', $item->alias);
            })
            ->toJson();
    }

    public function getForm($id = null)
    {
        $page = Page::find($id);
        if (!$page) $page = [];
        return view('backend.page.form', [
            'page' => $page,
            'id' => $id
        ]);
    }

    public function postForm($id = null)
    {
        $data = request()->validate([
            'title_ru' => 'required|max:255',
            'title_uz' => 'nullable|max:255',
            'title_oz' => 'nullable|max:255',
            'title_en' => 'nullable|max:255',
            'text_ru' => 'required',
            'text_uz' => 'nullable',
            'text_oz' => 'nullable',
            'text_en' => 'nullable'
        ]);

        if ($id == null) {
            $data['alias'] = Alias::alias(new Page, $data['title_ru']);
            $page = Page::create($data);
            session()->flash('success', trans('alert.success.insert'));
        } else {
            $page = Page::find($id);
            $page->update($data);
            session()->flash('success', trans('alert.success.update'));
        }

        if (request()->hasFile('image_page')) {
            Upload::saveFile('page', $page->id, request()->file('image_page'));
        }

        return redirect()->route('backend.page.index');
    }

    public function results()
    {
        return view('backend.page.results');
    }

    public function postResults(Request $request)
    {

        $check = Storage::disk('public')->put('js/test-answers.json', $request->results);

        if ($check) {

            $response = [
                'status' => 'success',
                'message' => trans('alert.success.update')
            ];
        } else {
            $response = [
                'status' => 'error',
                'message' => 'Failed. Please try again!'
            ];
        }

        return response()->json($response);
    }

    public function delete()
    {
        if (request()->has('id')) {
            $item = Page::find(request()->input('id'));
            Upload::removeFiles('page', $item->id);
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

    public function filemanager()
    {
        return view('backend.filemanager.index');
    }
}
