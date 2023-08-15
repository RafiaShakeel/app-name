<?php

namespace App\Http\Controllers\Admin;

use App\Models\Category;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\File;

class categoryController extends Controller
{
    public function index()
    {
        $categories = Category::all();
        return view('admin.category.index', compact("categories"));

    }

    public function add()
    {
        return view('admin.category.add-category');
    }

    public function insert(Request $request)
    {
        $category = new Category(); 
        if ($request->hasFile("image")) {
            $file = $request->file('image');
            $ext = $file->getClientOriginalExtension(); 
            $filename = time() . '.' . $ext;
            $file->move('assets/uploads/category/', $filename);
            $category->image = $filename;
        }

        $category->name = $request->input('name');
        $category->slug = $request->input('slug');
        $category->description = $request->input('description');
        $category->status = $request->input('status') == true ? '1' : '0';
        $category->popular = $request->input('popular') == true ? '1' : '0';
        $category->meta_description = $request->input('meta_description');
        $category->meta_keywords = $request->input('meta_keyword');
        $category->meta_title = $request->input('meta_title');
        $category->save();
        
        return redirect('/dashboard')->with('status', "Category added successfully!");
    }
    public function edit($id)
    {
        $category= Category::find($id);
        return view('admin/category/edit',compact('category'));
    }

    public function update(Request $request,$id)
    {
        $category= Category::find($id);
        if($request->hasfile('image'))
        {
            $path='assets/uploads/category/'.$$category->image;
            if(File::exists($path)){
                File::delete($path);
            }
            $file = $request->file('image');
            $ext = $file->getClientOriginalExtension(); 
            $filename = time() . '.' . $ext;
            $file->move('assets/uploads/category/', $filename);
            $category->image = $filename;
        }
        $category->name = $request->input('name');
        $category->slug = $request->input('slug');
        $category->description = $request->input('description');
        $category->status = $request->input('status') == true ? '1' : '0';
        $category->popular = $request->input('popular') == true ? '1' : '0';
        $category->meta_description = $request->input('meta_description');
        $category->meta_keywords = $request->input('meta_keyword');
        $category->meta_title = $request->input('meta_title');
        $category->update();
        return redirect('dashboard')->status('status','Category Updated successfully');
    }
}
