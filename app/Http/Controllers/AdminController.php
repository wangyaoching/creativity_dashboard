<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Session;

class AdminController extends Controller
{
    public function login(Request $request){
        if($request->isMethod('post')){
            $data = $request->input();
            if(Auth::attempt(['email'=>$data['email'],'password'=>$data['password'],'admin'=>"1"])){
                
                return redirect('admin/dashboard');
            }else{
                return redirect('admin')->with('flash_message_error','帳號或密碼錯誤');
            }
        }
        return view('admin.admin_login');
    }

    public function dashboard(){
        // if(Session::has('adminSession')){

        // }else{
        //     return redirect('admin')->with('flash_message_error','請登入系統');
        // }
        return view('admin.dashboard');
    }

    public function settings(){
        return view('admin.settings');
    }

    public function logout(){
        Session::flush();
        return redirect('admin')->with('flash_message_success','成功登出系統');
    }
}
