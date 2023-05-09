<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Category;
use App\Models\Product;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\File;

class ProductController extends Controller
{
    public function index(){
        $product = Product::all();
        $category = Category::all();
        return view('admin.products.index', compact('product','category'));
    }

    public function add(){
        $category = Category::all();
        $product = Product::all();

        $q = DB::table('products')->select(DB::raw('MAX(RIGHT(kode_produk,4)) as kode'));
        $kp = "";
        if($q->count() > 0){
            foreach($q->get() as $k){
                $tmp = ((int) $k->kode)+1;
                $kp = sprintf("%04s",$tmp);
            }
        }
        else{
            $kp = "0001";
        }
        return view('admin.products.add', compact('category','kp'));
    }

    public function insert(Request $request){
        $product = new Product();
        if($request->hasFile('image'))
        {
            $file = $request->file('image');
            $ext = $file->getClientOriginalExtension();
            $filename = time().'.'.$ext;
            $file->move('asset/uploads/product',$filename);
            $product->image = $filename;
            
        }
        $product->kode_produk = $request->input('kode_produk');
        $product->name = $request->input('name');
        $product->cate_id = $request->input('cate_id');
        $product->harga = $request->input('harga');
        $product->berat = $request->input('berat');
        $product->material = $request->input('material');
        $product->size = $request->input('size');
        $product->pelapis = $request->input('pelapis');
        $product->stok = $request->input('stok');
        $product->deskripsi = $request->input('deskripsi');
        $product->save();
        return redirect('products');
    }

    public function edit($id){
        $product = Product::find($id);
        return view('admin.products.edit', compact('product'));
    }

    public function update(Request $request,$id){
        $product = Product::find($id);
        if($request->hasFile('image')){
            $path = 'asset/uploads/product/'.$product->image;
            if(File::exists($path)){
                File::delete($path);
            }
            $file = $request->file('image');
            $ext = $file->getClientOriginalExtension();
            $filename = time().'.'.$ext;
            $file->move('asset/uploads/product',$filename);
            $product->image = $filename;
        }
        $product->name = $request->input('name');
        $product->harga = $request->input('harga');
        $product->berat = $request->input('berat');
        $product->material = $request->input('material');
        $product->size = $request->input('size');
        $product->pelapis = $request->input('pelapis');
        $product->stok = $request->input('stok');
        $product->deskripsi = $request->input('deskripsi');
        $product->update();
        return redirect('products');
    }

    public function delete($id){
        $product = Product::find($id);
        if($product->image){
            $path = 'asset/uploads/product/'.$product->image;
            if(File::exists($path)){
                File::delete($path);
            }
        }
        $product->delete();
        return redirect('products');
    }

    public function ekspor(){
        $product = Product::all();
        return view('admin.products.ekspor', compact('product'));
    }
}
