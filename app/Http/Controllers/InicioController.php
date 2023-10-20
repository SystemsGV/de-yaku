<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class InicioController extends Controller
{
    public function __construct()
    {
        $this->middleware('cache.headers:public;max_age=2628000;etag');
    }
    
    public function index()
    {
        $data['title'] = "Inicio";
        return view('home', $data);
    }
}
