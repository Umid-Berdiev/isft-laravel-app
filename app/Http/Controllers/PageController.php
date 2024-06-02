<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Video;
use App\Models\News;
use App\Models\Page;
use App\Models\Licenses;

class PageController extends Controller
{
    public function index()
    {
        $video = Video::latest()->first();
        $news = News::latest()->limit(4)->get();
        return view('frontend.page.index', compact('video', 'news'));
    }

    public function about()
    {
        $sliders =  Licenses::latest()->get();
        return view('frontend.page.about', compact('sliders'));
    }

    public function curriculum()
    {
        return view('frontend.page.curriculum');
    }

    public function admission()
    {
        return view('frontend.page.admission');
    }

    public function show($alias)
    {
        $item = Page::where('alias', $alias)->first();

        if (!$item) {
            abort(404);
        }

        return view('frontend.page.static', compact('item'));
    }

    public function results()
    {
        return view('frontend.page.results');
    }

    public function listZhizniKampusa()
    {
        if (request()->has('search') && !empty(request()->get('search'))) {
            $search = preg_split('/\s+/', request()->get('search'), -1, PREG_SPLIT_NO_EMPTY);

            $items = News::when($search, function ($query, $search) {
                return $query->where(function ($q) use ($search) {
                    foreach ($search as $value) {
                        $q->orWhere(function ($query) use ($value) {
                            $query->where('title_ru', 'like', "%{$value}%")
                                ->orWhere('title_uz', 'like', "%{$value}%")
                                ->orWhere('title_oz', 'like', "%{$value}%")
                                ->orWhere('title_en', 'like', "%{$value}%");
                        });
                    }
                });
            })
                ->where('alias', 'zhizni-kampusa')
                ->latest()
                ->get();
        } else {
            $items = News::where('alias', 'zhizni-kampusa')->latest()->get();
        }

        return view('frontend.page.zhizni-kampusa.index', compact('items'));
    }

    public function showZhizniKampusa($id)
    {
        $item = News::find($id);
        $others = News::where('id', '!=', $item->id)
            ->where('alias', 'zhizni-kampusa')
            ->latest()
            ->limit(2)
            ->get();

        if (!$item) {
            abort(404);
        }

        return view('frontend.page.zhizni-kampusa.show', compact('item', 'others'));
    }
}
