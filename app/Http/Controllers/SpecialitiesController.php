<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SpecialitiesController extends Controller
{
    public function index()
    {
        return view('specialities.index');
    }

}
