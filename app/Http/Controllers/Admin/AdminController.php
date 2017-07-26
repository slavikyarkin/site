<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Auth;

class AdminController extends Controller
{
    //
    public function __construct() {

        $this->middleware('auth');
    }

    public function show(Request $request){

        $users = $request->user();

        return view('welcome');
    }
}
