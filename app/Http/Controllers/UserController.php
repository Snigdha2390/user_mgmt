<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use App\Models\user;
use Illuminate\Support\Facades\Auth;
class UserController extends Controller
{
    public function index(){
    }
    public function registerForm(){
        return view('register');
    }

    public function register(Request $request){
        $request->validate(
            [
                'title' => 'required|min:3|max:255|string',
                'email' => 'required|email',
                'username' => 'required|unique:users',
                'password' => 'required|confirmed',
                'password_confirmation' => 'required',
                'user_type' => 'required',
            ]
        );
        $userObj = new User();
        $userObj->name = trim($request->title);
        // $userObj->last_name = trim($request->last_name);
        $userObj->email = trim($request->email);
        $userObj->phone_number = trim($request->phone_number);
        $userObj->username = trim($request->username);
        $userObj->password = Hash::make($request->password);
        $userObj->address = trim($request->address);
        $userObj->dob = $request->dob;
        $userObj->is_admin = trim($request->user_type);
        $userObj->save();
        $insertId = $userObj->id;
        if($insertId){     
            //return view('yourviewname')->with('flag'=>1);

            return redirect()->to('/')->with('message', 'User Registered Successfully.');
        }
    }   

    public function login(Request$request){
        $email = $request->un;
        //$password =Hash::make($request->pwd);
        $user_detail = User::where('username',$email)->first();
        $data = Hash::check($request->pwd, $user_detail->password);
        if($data){
            return redirect()->to('/')->with('message', 'login Successfully');

        } else {
            return redirect()->to('/')->with('message', 'Wrong Credential, Please Enter Again.');
        }

    }

    public function forgotPassword(Request$request){
        return view('forgot');
    }

    public function newPassword(Request$request){
        return view('newPassword');
    }

    public function newPasswordSave(Request$request){
        $email = $request->email;
        $password =Hash::make($request->pwd);
        //$user_detail = User::where('username',$email)->first();
        $data=User::where('username', $email)->update(['password'=>$password]);
        if($data){
            return redirect()->to('/')->with('message', 'Password changed Successfully.');
        }


    }


}
