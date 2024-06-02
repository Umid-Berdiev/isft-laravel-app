<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\PhotoGallery;

class PhotoGalleryController extends Controller
{
    public function index()
    {
    	$items = PhotoGallery::latest()->get();

    	return view('frontend.photogallery.index', compact('items'));
    }
}
