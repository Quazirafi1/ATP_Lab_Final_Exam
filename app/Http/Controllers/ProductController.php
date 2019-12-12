<?php

namespace App\Http\Controllers;

use App\product;
use App\request;
use App\User;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request as HttpRequest;
use Validator;

class ProductController extends Controller
{
    function add(){

        return view('product.addproduct');
    }

    function insert(HttpRequest $req){

        $req->validate([
            'title'=>'required',
            'price'=>'required',
            'medium'=>'required',
            'country'=>'required',
            'history'=>'required'
        ]);

        $user = new product();
        $user->title = $req->title;
        $user->medium = $req->medium;
        $user->country = $req->country;
        $user->history = $req->history;
        $user->price = $req->price;
        $user->status = 0;
        $user->request = 0;

        if($user->save()){
            return redirect()->route('product.index');
        }else{
            return redirect()->route('product.add');
        }
    }

    function index(){

        //$users = User::all();
        $users = DB::table('products')->get();

        return view('product.index')->with('users', $users);
    }

    function edit(HttpRequest $req, $id){

        //find student form array
        $user = product::find($id);
        //$std = ['id'=>'12-111-2', 'username'=>'xyz', 'password'=>'test'];
        return view('product.edit')->with('std', $user);
    }

    /*function update(Request $req, $id){

        $user = product::find($id);
        $user->name = $req->name;
        $user->quantity = $req->quantity;
        $user->price = $req->price;

        $user->save();

        return redirect()->route('product.index');
    }*/
    function update(HttpRequest $req, $id){

        $req->validate([
            'title'=>'required',
            'price'=>'required',
            'medium'=>'required',
            'country'=>'required',
            'history'=>'required'
        ]);

        $user = new request();
        $user->request_id = $id;
        $user->title = $req->title;
        $user->medium = $req->medium;
        $user->country = $req->country;
        $user->history = $req->history;
        $user->price = $req->price;

        $user->save();

        $users = product::find($id);
        $users->request = 1;
        $users->save();

        return redirect()->route('product.index');
    }

    function delete($id){

        //find student form array
        $user = product::find($id);
        //$std = ['id'=>'12-111-2', 'username'=>'xyz', 'password'=>'test'];
        return view('product.delete')->with('std', $user);
    }

    function destroy($id){

        //delete student from array and send the updated array in userlist
        $user = product::find($id);
        if($user->delete()){
            return redirect()->route('product.index');
        }else{
            return view('product.delete')->with('std', $user);;
        }
        //return redirect()->route('student.index');
    }

    function edit2(HttpRequest $req, $id){

        //find student form array
        $user = User::find($id);
        //$std = ['id'=>'12-111-2', 'username'=>'xyz', 'password'=>'test'];
        return view('product.edit2')->with('std', $user);
    }

    function update2(HttpRequest $req, $id){

        $user = User::find($id);
        $user->username = $req->username;
        $user->name = $req->name;
        $user->contact = $req->contact;
        $user->password = $req->password;

        $user->save();

        return redirect()->route('home.index2');
    }
}
