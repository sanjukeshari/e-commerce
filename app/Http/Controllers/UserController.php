<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class UserController extends Controller
{
   public function index(){
    $users = User::whereNot('role',1)->get();
    // $users = User::all();
    return view('admin-panel.users.list',compact('users'));
   }

   public function create(){
    return view('admin-panel.users.create');
   }

    public function store(request $request){
        $user =new User();
        $user->name = $request->name;
        $user->email = $request->email;
        $user->password = Hash::make($request->password);
        $user->role = 2;
        $user->save();
        return redirect()->route('users.list');
   }

}
