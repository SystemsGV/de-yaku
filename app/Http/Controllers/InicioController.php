<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class InicioController extends Controller
{
    public function index()
    {
        $data['title'] = "Inicio";
        return view('home', $data);
    }
}
