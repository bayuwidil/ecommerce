<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\Request;

class UsersController extends Controller
{
    public function index(){
        $user = User::all();
        return view('admin.datauser', compact('user'));
    }
    public function viewuser($id){
        $user = User::where('id',$id)->get();
        return view('admin.viewusers', compact('user'));
    }
}
