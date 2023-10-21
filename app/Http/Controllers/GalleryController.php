<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class GalleryController extends Controller
{
    public function index()
    {
        $data['title'] = "Galeria";
        return view('gallery', $data);
    }
}
