<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Faq;

class FaqController extends Controller
{
    public function index()
    {
    	$items = Faq::latest()->get();

    	return view('frontend.faq.index', compact('items'));
    }
}
