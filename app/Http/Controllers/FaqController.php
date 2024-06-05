<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Faq;

class FaqController extends Controller
{
    public function index()
    {
        $data = Faq::latest()->get();

        $items = [
            $data->find(16),
            $data->find(10),
            $data->find(22),
            $data->find(17),
            $data->find(18),
            $data->find(23),
            $data->find(19),
            $data->find(15),
            $data->find(14),
        ];

        return view('frontend.faq.index', compact('items'));
    }
}
