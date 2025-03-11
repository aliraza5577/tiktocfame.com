<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Support\Facades\DB;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\CategoryModel;
use Auth;
use Str;

class CategoriesController extends Controller
{
    // Category Lists
    public function list(){
        $data['getRecord'] = CategoryModel::getRecord();
        $data['header_title'] = 'All Categories';
        // dd(DB::getQueryLog());
        return view('backend.category.list', $data);
    }
    // Add Category
    public function add(){
        $data['header_title'] = 'Add New Category';
        return view('backend.category.add', $data);
    }

    // Create Category
    public function insert(Request $request){

        request()->validate([
            'name' => 'required',
            'meta_title' => 'required',
            'slug' => 'required|unique:category'
        ]);

        $slug  = $request->slug;
        $slug = Str::slug($slug);


        // $featured_image = $request->file('featured_image');
        // if(!empty($featured_image)){
        //     if($featured_image->isValid()){
        //         $ext = $featured_image->getClientOriginalExtension();
        //         $randomStr = date('Ymdhis').Str::random(10);
        //         $filename = strtolower($randomStr).'.'.$ext;
        //         $featured_image->move('public/upload/category', $filename);
        //         $featured_image = $filename;
        //     }
        // }
        // $banner_image = $request->file('banner_image');
        // if(!empty($banner_image)){
        //     if($banner_image->isValid()){
        //         $ext = $banner_image->getClientOriginalExtension();
        //         $randomStr = date('Ymdhis').Str::random(10);
        //         $filename = strtolower($randomStr).'.'.$ext;
        //         $banner_image->move('public/upload/category', $filename);
        //         $banner_image = $filename;
        //     }
        // }
        $save = new CategoryModel;
        $save->name = $request->name;
        $save->slug  = $slug;
        // $save->featured_image  = $featured_image;
        // $save->banner_image  = $banner_image;
        $save->status = $request->status;
        $save->meta_title = $request->meta_title;
        $save->meta_keyword = $request->meta_keyword;
        $save->meta_desc = $request->meta_desc;
        $save->seo_schema = $request->seo_schema;
        $save->created_by = Auth::user()->id;
        $save->save();

        return redirect('admin/categories')->with('success', 'Category Added Succesfully.');
    }

    // Edit Category
    public function edit($id){
        $data['getRecord'] = CategoryModel::getSingle($id);
        $data['header_title'] = 'Edit Category';
        return view('backend.category.edit', $data);
    }
    // Update Category
    public function update($id, Request $request){
        request()->validate([
            'name' => 'required',
            'meta_title' => 'required',
            'slug' => 'required|unique:category,slug,'.$id
        ]);

        $slug  = $request->slug;
        $slug = Str::slug($slug);

        $category = CategoryModel::getSingle($id);


        // if ($request->hasFile('featured_image')) {
        //     $featured_image = $request->file('featured_image');
        //     if($featured_image->isValid()){
        //         $ext = $featured_image->getClientOriginalExtension();
        //         $randomStr = date('Ymdhis').Str::random(10);
        //         $filename = strtolower($randomStr).'.'.$ext;
        //         $featured_image->move('public/upload/category', $filename);
        //         $featured_image = $filename;
        //         $category->featured_image  = $featured_image;
        //     }
        // }

        // if ($request->hasFile('banner_image')) {
        //     $banner_image = $request->file('banner_image');
        //     if($banner_image->isValid()){
        //         $ext = $banner_image->getClientOriginalExtension();
        //         $randomStr = date('Ymdhis').Str::random(10);
        //         $filename = strtolower($randomStr).'.'.$ext;
        //         $banner_image->move('public/upload/category', $filename);
        //         $banner_image = $filename;
        //         $category->banner_image  = $banner_image;
        //     }
        // }





        $category->name = $request->name;
        $category->slug  = $slug;
        $category->status = $request->status;
        $category->meta_title = $request->meta_title;
        $category->meta_keyword = $request->meta_keyword;
        $category->meta_desc = $request->meta_desc;
        $category->seo_schema = $request->seo_schema;
        $category->created_by = Auth::user()->id;
        $category->save();

        return redirect('admin/categories')->with('success', 'Category Updated Succesfully.');
    }

    // Delete Category
    public function delete($id){
        $user = CategoryModel::getSingle($id);
        $user->is_delete = 1;
        $user->save();
        return redirect()->back()->with('success', 'Category Succesfully Deleted.');
    }


}
