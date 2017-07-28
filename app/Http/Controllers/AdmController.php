<?php

namespace App\Http\Controllers;


class AdmController extends Controller{
    public function __construct()
    {
        $this->middleware('auth');

    }

    public function showAdm(){
        return view('adm');
    }
}
