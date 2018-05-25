<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PelanggaranController extends Controller
{
    //
    public function index() {
        return view('pelanggaran/index');
    }

    public function create(){
        return view('pelanggaran/create');
    }

    public function edit(){
        return view('pelanggaran/edit');
    }

}
