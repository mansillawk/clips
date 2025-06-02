<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

class ClipsController extends Controller
{
    static function routes()
    {
        Route::get('/', [self::class, 'index'])->name('index');

    }

    public function index()
    {
        $items = ['Clip 1', 'Clip 2', 'Clip 3'];

        return view('clips.index', compact('items'));
    }
}
