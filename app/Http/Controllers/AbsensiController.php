<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AbsensiController extends Controller
{
    //
    public function index() {
        return view('absensi/index');
    }

    public function edit(){
        return view('absensi/edit');
    }

    public function detailabsensi(){
        return view('absensi/detailabsensi');
    }
}
