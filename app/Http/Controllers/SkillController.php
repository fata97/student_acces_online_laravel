<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SkillController extends Controller
{
    //
    public function index() {
        return view('skill/index');
    }

    public function detailskill(){
        return view('skill/detailskill');
    }

    public function createskill(){
        return view('skill/create_softskill');
    }

    public function editskill(){
        return view('skill/edit_softskill');
    }

}
