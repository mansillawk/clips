<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ClipsController extends Controller
{
    public function index()
    {
        $items = ['Clip 1', 'Clip 2', 'Clip 3'];
        return view('clips.index', compact('items'));
    }
}
