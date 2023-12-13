<?php

namespace App\Http\Controllers\Main;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class BemVindo extends Controller
{
    public function index(){
        $title = 'Negócios Promissores';

        return view('bemvindo_a', compact('title'));
    }
}
