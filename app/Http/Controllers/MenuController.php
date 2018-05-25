<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class MenuController extends Controller
{
    //
    public function index() {
        return view('menu/index');
    }

    public function create_menuutama(){
        return view('menu/create_menuutama');
    }

    public function create_submenu(){
        return view('menu/create_submenu');
    }

    public function edit_menuutama(){
        return view('menu/edit_menuutama');
    }

    public function edit_submenu(){
        return view('menu/edit_submenu');
    }
}
