<?php

namespace App\Http\Controllers;

use App\User;
use Request;
use Hash;
use Auth;

class PostController extends Controller
{
    public function postProfile(){
        $status = 0;
        $data = null;

        $update =User::find(Request::input('user_id'));
        $update->name =Request::input('name');
        $update->email =Request::input('email');
        $update->phone =Request::input('phone');
        $update->save();
        $status = 1;
        return response()->json(['status' => $status,'data' => $data]);

    }
    public function postPassword(){
        $status = 0;
        $data = null;

        $update =User::find(Auth::user()->id);
        $update->password =Hash::make(Request::input('password'));


        $update->save();
        $status = 1;
        return response()->json(['status' => $status,'data' => $data]);

    }
    public function editCustomer(){

        $update =User::find(Request::input('cust_id'));
        $update->name =Request::input('name');
        $update->email =Request::input('email');
        $update->phone =Request::input('phone');
        $update->save();
        $status = 1;
    }
    public function deleteData()
    {
        $status = 0;
        $data = null;

        $delete = User::where('id',Request::input('delete_id'))->delete();

        $status = 1;

        return response()->json(['status' => $status,'data' => $data]);
    }
}
