<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class DatadiriController extends Controller
{
    public function index(){
        $data = User::where('id', Auth::id())->get();
        return view('frontend.datadiri', compact('data'));
    }
    public function update(Request $request){
        $data = User::where('id', Auth::id())->first();
        $data->name = $request->input('name');
        $data->username = $request->input('username');
        $data->ttl = $request->input('ttl');
        $data->gender = $request->input('gender');
        $data->email = $request->input('email');
        $data->telepon = $request->input('telepon');
        $data->province_id = $request->input('province_id');
        $data->city_id = $request->input('city_id');
        $data->kota = $request->input('kecamatan');
        $data->postcode = $request->input('postcode');
        $data->alamat = $request->input('alamat');
        $data->update();
        return redirect('/');
    }

}
