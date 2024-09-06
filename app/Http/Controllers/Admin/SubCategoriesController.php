<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\CategoryModel;
use App\Models\SubCategoryModel;
use Auth;
use Str;

class SubCategoriesController extends Controller
{
    // Sub Category Lists
    public function list(){
        $data['getRecord'] = SubCategoryModel::getRecord();
        $data['header_title'] = 'All Sub Categories';
        return view('backend.sub_category.list', $data);
    }

    // Add Sub Category
    public function add(){
        $data['getRecord'] = CategoryModel::getRecord();
        $data['header_title'] = 'Add New Sub Category';
        return view('backend.sub_category.add', $data);
    }

    // Create Sub Category
    public function insert(Request $request){

        request()->validate([
            'name' => 'required',
            'meta_title' => 'required',
            'slug' => 'required|unique:sub_category',
            'featured_image' => 'required|file|mimes:jpg,jpeg,png,gif,webp|max:2048',
            'banner_image' => 'required|file|mimes:jpg,jpeg,png,gif,webp|max:2048'
        ]);

        $slug  = $request->slug;
        $slug = Str::slug($slug);

        $featured_image = $request->file('featured_image');
        if(!empty($featured_image)){
            if($featured_image->isValid()){
                $ext = $featured_image->getClientOriginalExtension();
                $randomStr = date('Ymdhis').Str::random(10);
                $filename = strtolower($randomStr).'.'.$ext;
                $featured_image->move('public/upload/subCategory', $filename);
                $featured_image = $filename;
            }
        }
        $banner_image = $request->file('banner_image');
        if(!empty($banner_image)){
            if($banner_image->isValid()){
                $ext = $banner_image->getClientOriginalExtension();
                $randomStr = date('Ymdhis').Str::random(10);
                $filename = strtolower($randomStr).'.'.$ext;
                $banner_image->move('public/upload/subCategory', $filename);
                $banner_image = $filename;
            }
        }

        $save = new SubCategoryModel;
        $save->name = $request->name;
        $save->category_id = $request->category_id;
        $save->slug  = $slug;
        $save->featured_image  = $featured_image;
        $save->banner_image  = $banner_image;
        $save->status = $request->status;
        $save->meta_title = $request->meta_title;
        $save->meta_keyword = $request->meta_keyword;
        $save->meta_desc = $request->meta_desc;
        $save->seo_schema = $request->seo_schema;
        $save->created_by = Auth::user()->id;
        $save->save();

        return redirect('admin/sub_categories')->with('success', 'Sub Category Added Succesfully.');
    }

    // Edit Sub Category
    public function edit($id){
        $data['categoryRecord'] = CategoryModel::getRecord();
        $data['getRecord'] = SubCategoryModel::getSingle($id);
        $data['header_title'] = 'Edit Sub Category';
        return view('backend.sub_category.edit', $data);
    }
    // Update Sub Category
    public function update($id, Request $request){
        request()->validate([
            'name' => 'required',
            'meta_title' => 'required',
            'slug' => 'required|unique:sub_category,slug,'.$id,
            'featured_image' => 'file|mimes:jpg,jpeg,png,gif,webp|max:2048',
            'banner_image' => 'file|mimes:jpg,jpeg,png,gif,webp|max:2048'
        ]);

        $slug  = $request->slug;
        $slug = Str::slug($slug);


        $sub_category = SubCategoryModel::getSingle($id);

        if ($request->hasFile('featured_image')) {
            $featured_image = $request->file('featured_image');
            if($featured_image->isValid()){
                $ext = $featured_image->getClientOriginalExtension();
                $randomStr = date('Ymdhis').Str::random(10);
                $filename = strtolower($randomStr).'.'.$ext;
                $featured_image->move('public/upload/subCategory', $filename);
                $featured_image = $filename;
                $sub_category->featured_image  = $featured_image;
            }
        }

        if ($request->hasFile('banner_image')) {
            $banner_image = $request->file('banner_image');
            if($banner_image->isValid()){
                $ext = $banner_image->getClientOriginalExtension();
                $randomStr = date('Ymdhis').Str::random(10);
                $filename = strtolower($randomStr).'.'.$ext;
                $banner_image->move('public/upload/subCategory', $filename);
                $banner_image = $filename;
                $sub_category->banner_image  = $banner_image;
            }
        }


        $sub_category->name = $request->name;
        $sub_category->category_id = $request->category_id;
        $sub_category->name = $request->name;
        $sub_category->slug  = $slug;
        $sub_category->status = $request->status;
        $sub_category->meta_title = $request->meta_title;
        $sub_category->meta_keyword = $request->meta_keyword;
        $sub_category->meta_desc = $request->meta_desc;
        $sub_category->seo_schema = $request->seo_schema;
        $sub_category->save();

        return redirect('admin/sub_categories')->with('success', 'Sub Category Updated Succesfully.');
    }

    // Delete Sub Category
    public function delete($id){
        $user = SubCategoryModel::getSingle($id);
        $user->is_delete = 1;
        $user->save();
        return redirect()->back()->with('success', 'Sub Category Succesfully Deleted.');
    }

    public function get_sub_categories(Request $request){
        $category_id = $request->id;
        $get_sub_categories = SubCategoryModel::getSubCategories($category_id);
        $html = '';
        $html .= '<option value="">Select</option>';
        foreach($get_sub_categories as $value){
            $html .= '<option value="'.$value->id.'">'.$value->name.'</option>';
        }
        $json['html'] = $html;
        echo json_encode($json);
    }

}
