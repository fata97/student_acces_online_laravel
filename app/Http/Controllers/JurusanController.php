<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class JurusanController extends Controller
{
    //
    public function index() {
        return view('jurusan/index');
    }

    public function create(){
        return view('jurusan/create');
    }

    public function edit(){
        return view('jurusan/edit');
    }

}
