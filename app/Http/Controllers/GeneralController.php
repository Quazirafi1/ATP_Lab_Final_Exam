<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class GeneralController extends Controller
{
    //
    function index(){

        //$users = User::all();
        $users = DB::table('products')->get();

        return view('general.index')->with('users', $users);
    }
}
