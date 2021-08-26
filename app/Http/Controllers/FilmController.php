<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class FilmController extends Controller
{
    public function showNussa() {
        return view('nussa');
    }
}
