<?php

namespace App\Http\Controllers;

use App\User;
//use Illuminate\Http\Request;
use Illuminate\Http\Request as HttpRequest;
use Illuminate\Support\Facades\DB;

class GeneralController extends Controller
{
    //
    function index(){

        //$users = User::all();
        $users = DB::table('products')->get();

        return view('general.index')->with('users', $users);
    }

    function all(){

        //$users = User::all();
        $users = DB::table('products')->get();

        return view('general.index1')->with('users', $users);
    }

    function edit2(HttpRequest $req, $id){

        //find student form array
        $user = User::find($id);
        //$std = ['id'=>'12-111-2', 'username'=>'xyz', 'password'=>'test'];
        return view('general.edit2')->with('std', $user);
    }

    function update2(HttpRequest $req, $id){

        $user = User::find($id);
        $user->username = $req->username;
        $user->name = $req->name;
        $user->contact = $req->contact;
        $user->password = $req->password;

        $user->save();

        return redirect()->route('home.index3');
    }
}
