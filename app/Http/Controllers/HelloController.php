<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HelloController extends Controller
{
    public function demo()
    {
//        echo 'Working';

        return view('pages.contact');
    }
}
