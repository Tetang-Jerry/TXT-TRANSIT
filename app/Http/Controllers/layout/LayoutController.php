<?php

namespace App\Http\Controllers\layout;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class LayoutController extends Controller
{
    public function layoutdash() {
        return view('layout.layoutdash');
    }
}
