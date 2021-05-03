<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Member;

class RegisterController extends Controller
{
     public function show_all(){
         return view('hagop');
     }

      public function valid_regist(Request $req){
           $req->validate([
             'name'=>'required',
             'email'=>'required',
             'password'=>'required',
           ]);
            $data = new Member;
            $data->user_name=$req->name;
            $data->user_email=$req->email;
            $data->user_password=md5($req->password);
            $data->save();
            return view('helloregister');
          

      }

}
