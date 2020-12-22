<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use Session;
use Illuminate\Support\Facades\Redirect;

class AdminController extends Controller
{
    public function login(){
        return view('backend.login');
    }

    public function admin_data(Request $request){
        $admin_email = $request->admin_email;
        $admin_password = md5($request->admin_password);

        $result = DB::table('admin_profiles')
                            ->where('admin_email',$admin_email)
                            ->where('admin_password',$admin_password)
                            ->first();

              if($result){
                  Session::put('admin_email',$result->admin_email);
                  Session::put('admin_id',$result->admin_id);
                  Session::put('admin_name',$result->admin_name);
                  return Redirect::to('/dashboard');
              }else{
                  Session::put('message','Email or Password is Invalid!');
                  return Redirect::to('/admin-login');
              }
    }
}
