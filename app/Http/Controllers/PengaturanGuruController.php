<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PengaturanGuruController extends Controller
{
    //
    public function index() {
        return view('akunguru/index');
    }

    public function create(){
        return view('akunguru/create');
    }

    public function hapus(){
        return view('');
    }

}
