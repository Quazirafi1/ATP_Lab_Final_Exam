<?php

namespace App\Http\Controllers;

use App\product;
use App\request;

use Illuminate\Support\Facades\DB;

use Illuminate\Http\Request as HttpRequest;
use Validator;


class PostController extends Controller
{
    function index(){

        //$users = User::all();
        $users = DB::table('products')->get();

        return view('post.index')->with('users', $users);
    }

    function edit(HttpRequest $req, $id){

        //find student form array
        $user = request::find($id);
        //$std = ['id'=>'12-111-2', 'username'=>'xyz', 'password'=>'test'];
        return view('post.edit')->with('std', $user);
    }

    function update(HttpRequest $req, $id){

        $req->validate([
            'title'=>'required',
            'price'=>'required',
            'medium'=>'required',
            'country'=>'required',
            'history'=>'required'
        ]);

        $user = product::find($id);
        $user->title = $req->title;
        $user->medium = $req->medium;
        $user->country = $req->country;
        $user->history = $req->history;
        $user->price = $req->price;
        $user->request = 0;

        $user->save();

        $users = request::find($id);
        $users->delete();

        return redirect()->route('post.index');
    }
}
