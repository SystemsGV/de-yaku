<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class EventsController extends Controller
{
    public function index()
    {
        $data['title'] = "Eventos";
        return view('events', $data);
    }
}
