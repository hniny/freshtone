<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\Hash;
use Auth;
use App\User;

class UserController extends Controller
{
    public function profile(){
       return view('auth.profile');
    }
    public function updateProfile(Request $request){

         $request->validate([   
            'email' => [ 'nullable', 'email', 'max:255', 'unique:users'],
            'password' => ['nullable', 'string', 'min:8', 'confirmed'],
        ]);
        
        $user=User::find(Auth::user()->id);
        $user->name=$request->name ? $request->name: $user->name;
        $user->email=$request->email ? $request->email : $user->email;
        $user->password=$request->password ? Hash::make($user->password): $user->password;
        $user->save();
        return redirect()->back();
        

    }
}
