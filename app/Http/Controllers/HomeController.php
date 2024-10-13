<?php

namespace App\Http\Controllers;
use App\Models\CategoryModel;
use App\Models\SubCategoryModel;
use App\Models\ProductModel;
use App\Models\BlogModel;
use Illuminate\Http\Request;


class HomeController extends Controller
{
    //HomePage
    public function index(){
        $data['meta_title'] = 'Home - Citi Packaging';
        $data['meta_keyword'] = 'Home';
        $data['meta_desc'] = 'Home';
        $data['seo_schema'] = 'Home';
        $data['getRecord'] = CategoryModel::getRecord();
        $data['getSubCategories'] = SubCategoryModel::getActiveRecord();
        $data['top_products'] = ProductModel::getActiveRecord('desc');
        $data['seasonal_products'] = ProductModel::getActiveRecord('asc');
        return view('home', $data);
    }


    //Gallery
    public function gallery(){
        $data['meta_title'] = 'Gallery - Citi Packaging';
        $data['meta_keyword'] = 'Gallery';
        $data['meta_desc'] = 'Gallery';
        $data['seo_schema'] = 'Gallery';
        return view('gallary', $data);
    }

    // Blog
    public function blog(){
        $data['meta_title'] = 'Blog - Citi Packaging';
        $data['meta_keyword'] = 'Blog';
        $data['meta_desc'] = 'Blog';
        $data['seo_schema'] = 'Blog';
        $data['getRecord'] = BlogModel::getRecordActive();
        return view('blog.index', $data);
    }


    // Blog Post
    public function blog_post($slug){
        $blog = BlogModel::where('slug', $slug)->firstOrFail();
        $data['blog'] = $blog;
        $data['meta_title'] = $blog->meta_title;
        $data['meta_keyword'] = $blog->meta_keyword;
        $data['meta_desc'] = $blog->meta_desc;
        $data['seo_schema'] = $blog->seo_schema;
        return view('blog.post', $data);
    }

    public function contact(){
        $data['meta_title'] = 'Contact Us - Citi Packaging';
        $data['meta_keyword'] = '';
        $data['meta_desc'] = '';
        $data['seo_schema'] = '';
        return view('pages.contact', $data);
    }

    public function privacy(){
        $data['meta_title'] = 'Privacy and Security - Citi Packaging';
        $data['meta_keyword'] = '';
        $data['meta_desc'] = '';
        $data['seo_schema'] = '';
        return view('pages.privacy', $data);
    }

    public function terms(){
        $data['meta_title'] = 'Terms and Conditions - Citi Packaging';
        $data['meta_keyword'] = '';
        $data['meta_desc'] = '.';
        $data['seo_schema'] = '';
        return view('pages.terms', $data);
    }

    public function about(){
        $data['meta_title'] = 'About Us - Citi Packaging';
        $data['meta_keyword'] = '';
        $data['meta_desc'] = '.';
        $data['seo_schema'] = '';
        return view('pages.about_us', $data);
    }






}
