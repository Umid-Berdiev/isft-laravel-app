<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Artisan;
use Illuminate\Http\Request;
use App\Models\Subscribe;
use App\Models\News;

class NewsController extends Controller
{
    public function index()
    {
        $item = new News;

        if (request()->has('search') && !empty(request()->get('search'))) {
            $search = preg_split('/\s+/', request()->get('search'), -1, PREG_SPLIT_NO_EMPTY);

            $item = $item->where(function ($q) use ($search) {
                foreach ($search as $value) {
                    $q->orWhere('title_ru', 'like', "%{$value}%")
                        ->orWhere('title_uz', 'like', "%{$value}%")
                        ->orWhere('title_oz', 'like', "%{$value}%")
                        ->orWhere('title_en', 'like', "%{$value}%");
                }
            });

            $items = $item
                ->where('alias', '!=', 'zhizni-kampusa')
                ->get();
        } else {
            $items = News::where('alias', '!=', 'zhizni-kampusa')
                ->latest()
                ->get();
        }

        return view('frontend.news.index', compact('items'));
    }

    public function show($alias)
    {
        $item = News::where('alias', $alias)->firstOrFail();

        $others = News::where('id', '!=', $item->id)
            ->where('alias', '!=', 'zhizni-kampusa')
            ->latest()
            ->limit(2)
            ->get();

        return view('frontend.news.show', compact('item', 'others'));
    }
}
