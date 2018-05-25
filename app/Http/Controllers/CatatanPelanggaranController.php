<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CatatanPelanggaranController extends Controller
{
    //
    public function index() {
        return view('catatanpelanggaran/index');
    }

    public function create(){
        return view('catatanpelanggaran/create');
    }

    public function edit(){
        return view('catatanpelanggaran/edit');
    }

}
