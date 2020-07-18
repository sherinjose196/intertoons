<?php

namespace App\Http\Controllers;


use App\User;
use Request;
use Auth;
class SettingsController extends Controller
{
    public function getView($id = 0)
    {
        $view = '';
        $data = array();

        switch (Request::segment(1)) {

            case 'profile':

                $data['profile'] = User::where('id',Auth::user()->id)->first();

                $view = 'profile';
                break;

            case 'password':


                $view = 'password';
                break;

            case 'admin_login':


                $view = 'admin';
                break;
            case 'customers':

             $data['customers'] = User::where('role',0)->get();
                $view = 'customers';
                break;

            case 'edit_customer':
                $data['customer'] = User::where('id' ,$id)->first();

                $view = 'edit_customer';


        }
        return view($view)->with($data);
    }

    public function logout()
    {
        Auth::logout();
        return redirect('/');
    }
    public function authManage(){
        $message = "";
        $status = 0;
        $html = "";
        $data = "";


        switch (Request::input('type')) {
            case 'login':

                if (Auth::attempt(['email' => Request::input('email'), 'password' => Request::input('password')]))
                {

                    $status = 1;
                }else
                {
                    $status = 0;
                }

                break;
        }
        return response()->json(['status' => $status, 'message' => $message, 'html' => $html, 'data' => $data]);
    }
}
