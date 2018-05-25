<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class TahunAjaranController extends Controller
{
    //
    public function index() {
        return view('tahunpelajaran/index');
    }

    public function create(){
        return view('tahunpelajaran/create');
    }

    public function edit(){
        return view('tahunpelajaran/edit');
    }

}
