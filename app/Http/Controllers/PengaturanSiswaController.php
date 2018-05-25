<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PengaturanSiswaController extends Controller
{
    //
    public function index() {
        return view('akunsiswa/index');
    }

    public function create(){
        return view('akunsiswa/create');
    }

    public function hapus(){
        return view('');
    }

}
