<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ContactController extends Controller
{
    public function index()
    {
        $data['title'] = "Contactanos";
        return view('contact', $data);
    }
}
