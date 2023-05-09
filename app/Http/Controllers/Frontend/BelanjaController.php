<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use App\Models\Keranjang;
use App\Models\Pesan;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class BelanjaController extends Controller
{
    public function index(){
        $pesan = Pesan::where('id_user', Auth::id())->get();
        return view('frontend.riwayat-belanja', compact('pesan'));
    }

    public function view($id){
        $pesan = Pesan::where('id', $id)->where('id_user', Auth::id())->first();
        return view('frontend.viewbelanja', compact('pesan'));
    }
}
 