<?php

namespace App\Http\Controllers\Backend;
use Illuminate\Support\Facades\Storage;

use App\Http\Controllers\Controller;
use App\Models\Category;
use Illuminate\Http\Request;

class CategoryController extends Controller
{
    public function index(){
        $data = Category::get();
        return view('backend.category.category', compact('data'));
    }
    public function storeCat(Request $request ){


        $this->validate($request, [
            'name' => 'required',
            'cat_desc' => 'required',
            'cat_image' => 'required|image|mimes:jpeg,png,gif|max:2048',
        ]);
        if ($request->hasfile('cat_image')) {
            $uploadFolder = "category/category";
            $img = $request->file("cat_image");
            $imgUploadedPath = $img->store($uploadFolder, "public");
            Storage::disk("public")->url($imgUploadedPath);
            // $user->image = $imgUploadedPath;
        }
        ;


        $cat = new Category;
        $cat->name = $request->name;
        $cat->cat_desc = $request->cat_desc;
        $cat->cat_image = $imgUploadedPath;
        $cat->save();
        return redirect('admin/category')->with('status','Category Added Successfully');
        // dd($cat);
    }

    public function edit_cat(Request $request ){
        $id = $request->id;
        Category::where('id','=',$id)->update([
            'name'=>$request->name,
        ]);
        return redirect('admin/category')->with('info','Category Updated Successfully');
    }


    public function delete_cat(Request $request){
        $id = $request->id;
        Category::where('id','=',$id)->delete();
        return redirect('admin/category')->with('Danger','Category Deleted Successfully');

    }

}
