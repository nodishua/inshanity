<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class Uploads extends Controller
{
    public function upload()
    {
        return view('upload');
    }
}
