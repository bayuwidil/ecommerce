<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use App\Models\Category;
use App\Models\Product;
use Illuminate\Http\Request;

class FrontendController extends Controller
{
    public function index(){
        $category = Category::all();
        $product = Product::all();
        return view('frontend.index', compact('category','product'));
    }

    public function detail($id){
        $product = Product::find($id);
        return view('Frontend.Detailproduk', compact('product'));
    }

    public function viewcategori($nama_kategori){
        if(Category::where('nama_kategori',$nama_kategori)->exists()){
            $category = Category::where('nama_kategori',$nama_kategori)->first();
            $produk = Product::where('cate_id',$category->id)->get();
            return view('Frontend.kategori',compact('category','produk'));
        }
        else{
            return redirect('/')->with("status","nama_kategori tidak ada");
        }
    }
    public function produklistAjax(){
        $produk = Product::where('status','0')->get();
        $data = [];
        foreach($produk as $item){
            $data[] = $item ['name'];
        }
        return $data;
    }
    public function Searchproduk(Request $request){
        $search_produk = $request->nama_produk;

        if($search_produk != ""){
            $produk = Product::where("name","LIKE","%$search_produk%")->first();
            if($produk){
                return redirect('/view-category/'.$produk->category->nama_kategori);
            }
            else{
                return redirect()->back()->with("status","pencarian tidak cocok");
            }
        }
        else{
            return redirect()->back();
        }
    }
}
