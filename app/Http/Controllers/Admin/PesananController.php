<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Pesan;
use Illuminate\Http\Request;

class PesananController extends Controller
{
    public function index(){
        $pesan = Pesan::where('status','0')->get();
        return view('admin.pesanan.index', compact('pesan'));
    }
    public function view($id){
        $pesan = Pesan::where('id',$id)->first();
        return view('admin.pesanan.view', compact('pesan'));
    }
}
