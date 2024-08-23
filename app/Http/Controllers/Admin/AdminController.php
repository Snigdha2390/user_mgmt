<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Hash;
use App\Models\user;
use Illuminate\Http\Request as HttpRequest;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;

class AdminController extends Controller
{
    public function dashboard(){
        return view('admin.dashboard');
    }

    public function list(){
        $data=User::all();
        return view('admin.users_list',['data'=>$data]);
    }

    public function deleteUser(HttpRequest $request, $id){  
        //$id = $request->id;
        $user=User::where('id',$id)->delete();
        if(!$user){
            return redirect()->back()->with('error','Not Deleted');
        } else {
            return redirect()->route('list')->with('success','User Deleted Successfully');
        }

    }

    public function editUser(HttpRequest $request, $id){
        $user=User::where('id',$id)->first();
        return view('admin.useredit',['data'=>$user]);
    }

    public function userEdit(HttpRequest $request){
        $id = $request->userid;
        $name = $request->title;
        $un = $request->username;
        $email = $request->email;
        $dob = $request->dob;
        $address = $request->address;
        $phone = $request->phone_number;
        $data = User::where('id', $id)->update(['name'=>$name, 'email'=>$email, 'phone_number'=>$phone, 'username'=>$un, 'address'=>$address, 'dob'=>$dob]);
        if(!$data){
            return redirect()->back()->with('error','Not Updated');
        } else {
            return redirect()->route('list')->with('success','User Updated Successfully');
        }
    }


}
