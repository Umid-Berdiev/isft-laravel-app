<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Acca;

class AccaController extends Controller
{
    public function index()
    {
    	$items = Acca::oldest()->get();

    	return view('frontend.page.acca', compact('items'));
    }
}
