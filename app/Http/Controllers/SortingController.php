<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SortingController extends Controller
{
    public function index(){
        $title = 'Sorting';

        return view('sorting', compact('title'));
    }

    
}
