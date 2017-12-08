<?php

namespace App\Http\Controllers;

use App\word;
use Illuminate\Http\Request;

class wordController extends Controller
{

    public function index(){
        $words = word::all(); //Not a good idea
        return $words;
    }

    //
}
