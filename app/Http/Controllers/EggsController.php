<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class EggsController extends Controller
{
    public function recipes(){

    	return view('recipes');
    }

    public function homepage(){

    	return view('homepage');
    }

    public function apps(){

    	return view('apps');
    }

    public function eggs101(){

    	return view('eggs101');
    }

    public function nutrition(){

    	return view('nutrition');
    }

    public function eggforbabies(){

    	return view('eggforbabies');
    }
}
