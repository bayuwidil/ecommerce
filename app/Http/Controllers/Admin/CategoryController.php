<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Category;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\File;



class CategoryController extends Controller
{
    public function index(){
        $category = Category::all();
        return view('admin.category.index', compact('category'));
    }


    public function tambah(Request $request){
        $category = new Category();
        if($request->hasFile('image'))
        {
            $file = $request->file('image');
            $ext = $file->getClientOriginalExtension();
            $filename = time().'.'.$ext;
            $file->move('asset/uploads/category',$filename);
            $category->image = $filename;
            
        }

        $category->nama_kategori = $request->input('nama_kategori');
        $category->save();
        return redirect('categories');
    }

    public function edit($id){
        $category = Category::find($id);
        return view('admin.category.edit', compact('category'));
    }

    public function update(Request $request, $id){
        $category = Category::find($id);
        if($request->hasFile('image')){
            $path = 'asset/uploads/category/'.$category->image;
            if(File::exists($path)){
                File::delete($path);
            }
            $file = $request->file('image');
            $ext = $file->getClientOriginalExtension();
            $filename = time().'.'.$ext;
            $file->move('asset/uploads/category',$filename);
            $category->image = $filename;
        }
        $category->nama_kategori = $request->input('nama_kategori');
        $category->update();
        return redirect('categories');
    }

    public function delete($id){
        $category = Category::find($id);
        if($category->image){
            $path = 'asset/uploads/category/'.$category->image;
            if(File::exists($path)){
                File::delete($path);
            }
        }
        $category->delete();
        return redirect('categories');
    }
}
