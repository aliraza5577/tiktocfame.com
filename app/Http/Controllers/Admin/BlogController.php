<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\BlogModel;
use Auth;
use Str;


class BlogController extends Controller
{
    // Blog Lists
    public function list(){
        $data['getRecord'] = BlogModel::getRecord();
        $data['header_title'] = 'All Blog';
        return view('backend.blog.list', $data);
    }

    // Add Blog
    public function add(){
        $data['header_title'] = 'Add New Blog';
        return view('backend.blog.add', $data);
    }

    // Create Blog
    public function insert(Request $request){

        request()->validate([
            'title' => 'required',
            'meta_title' => 'required',
            'slug' => 'required|unique:blog',
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
                $featured_image->move('public/upload/blog', $filename);
                $featured_image = $filename;
            }
        }
        $banner_image = $request->file('banner_image');
        if(!empty($banner_image)){
            if($banner_image->isValid()){
                $ext = $banner_image->getClientOriginalExtension();
                $randomStr = date('Ymdhis').Str::random(10);
                $filename = strtolower($randomStr).'.'.$ext;
                $banner_image->move('public/upload/blog', $filename);
                $banner_image = $filename;
            }
        }

        $save = new BlogModel;
        $save->title = $request->title;
        $save->slug  = $slug;
        $save->description  = $request->description;
        $save->featured_image  = $featured_image;
        $save->banner_image  = $banner_image;
        $save->status = $request->status;
        $save->meta_title = $request->meta_title;
        $save->meta_keyword = $request->meta_keyword;
        $save->meta_desc = $request->meta_desc;
        $save->created_by = Auth::user()->id;
        $save->save();

        return redirect('admin/blog')->with('success', 'Blog Added Succesfully.');
    }

    // Edit Blog
    public function edit($id){
        $data['getRecord'] = BlogModel::getSingle($id);
        $data['header_title'] = 'Edit Blog';
        return view('backend.blog.edit', $data);
    }


    // Update Blog
    public function update($id, Request $request){
        request()->validate([
            'title' => 'required',
            'meta_title' => 'required',
            'slug' => 'required|unique:category,slug,'.$id,
            'featured_image' => 'file|mimes:jpg,jpeg,png,gif,webp|max:2048',
            'banner_image' => 'file|mimes:jpg,jpeg,png,gif,webp|max:2048'
        ]);

        $slug  = $request->slug;
        $slug = Str::slug($slug);
        $blog = BlogModel::getSingle($id);


        if ($request->hasFile('featured_image')) {
            $featured_image = $request->file('featured_image');
            if($featured_image->isValid()){
                $ext = $featured_image->getClientOriginalExtension();
                $randomStr = date('Ymdhis').Str::random(10);
                $filename = strtolower($randomStr).'.'.$ext;
                $featured_image->move('public/upload/blog', $filename);
                $featured_image = $filename;
                $blog->featured_image  = $featured_image;
            }
        }

        if ($request->hasFile('banner_image')) {
            $banner_image = $request->file('banner_image');
            if($banner_image->isValid()){
                $ext = $banner_image->getClientOriginalExtension();
                $randomStr = date('Ymdhis').Str::random(10);
                $filename = strtolower($randomStr).'.'.$ext;
                $banner_image->move('public/upload/blog', $filename);
                $banner_image = $filename;
                $blog->banner_image  = $banner_image;
            }
        }


        $blog->title = $request->title;
        $blog->slug  = $slug;
        $blog->status = $request->status;
        $blog->meta_title = $request->meta_title;
        $blog->meta_keyword = $request->meta_keyword;
        $blog->meta_desc = $request->meta_desc;
        $blog->created_by = Auth::user()->id;
        $blog->save();

        return redirect('admin/blog')->with('success', 'Category Updated Succesfully.');
    }


    // Delete Blog
    public function delete($id){
        $user = BlogModel::getSingle($id);
        $user->is_delete = 1;
        $user->save();
        return redirect()->back()->with('success', 'Blog Succesfully Deleted.');
    }




}
