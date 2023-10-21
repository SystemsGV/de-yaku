<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class TipsController extends Controller
{
    public function index()
    {
        $data['title'] = "Recomendaciones";
        return view('tips', $data);
    }
}
