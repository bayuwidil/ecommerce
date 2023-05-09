<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Category;
use App\Models\Pesan;
use App\Models\Product;
use App\Models\User;
use Illuminate\Http\Request;

class DashboardController extends Controller
{
    public function index(){
        $kategori = Category::count();
        $produk = Product::count();
        $pesanan = Pesan::count();
        $user = User::count();
        return view('Admin.index', compact('kategori', 'produk', 'pesanan', 'user'));
    }
}
