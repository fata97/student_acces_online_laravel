<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class GuruController extends Controller
{
    //
    public function index() {
        return view('guru/index');
    }

    public function create(){
        return view('guru/create');
    }

    public function edit(){
        return view('guru/edit');
    }

}
