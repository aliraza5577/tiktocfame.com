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
    public function index() {
        $data['meta_title'] = 'Home';
        $data['meta_keyword'] = 'Home';
        $data['meta_desc'] = 'Home';
        $data['seo_schema'] = 'Home';
        $data['getSubCategories'] = SubCategoryModel::getActiveRecord();
        foreach ($data['getSubCategories'] as $subcategory) {
            $subcategory->products = ProductModel::where('sub_category_id', $subcategory->id)->get();
        }
        return view('home', $data);
    }


    // Blog
    public function blog(){
        $data['getSubCategories'] = SubCategoryModel::getActiveRecord();
        $data['meta_title'] = 'Latest Trends and News About TikTok';
        $data['meta_keyword'] = '';
        $data['meta_desc'] = 'Here you will get an updates on all the latest trends and insights about the TikTok across the world.';
        $data['seo_schema'] = '';
        $data['getRecord'] = BlogModel::getRecordActive();
        return view('blog.index', $data);
    }


    // Blog Post
    public function blog_post($slug){
        $data['getSubCategories'] = SubCategoryModel::getActiveRecord();
        $blog = BlogModel::where('slug', $slug)->firstOrFail();
        $data['blog'] = $blog;
        $data['meta_title'] = $blog->meta_title;
        $data['meta_keyword'] = $blog->meta_keyword;
        $data['meta_desc'] = $blog->meta_desc;
        $data['seo_schema'] = $blog->seo_schema;
        return view('blog.post', $data);
    }

    public function contact(){
        $data['getSubCategories'] = SubCategoryModel::getActiveRecord();
        $data['meta_title'] = 'Contact Us | Reach Out for Custom Quries';
        $data['meta_keyword'] = '';
        $data['meta_desc'] = 'Have questions or need custom packages? Contact our expert team for tailored support and quick responses. We are here to help your brand stand out!';
        $data['seo_schema'] = '';
        return view('pages.contact', $data);
    }

    public function privacy(){
        $data['meta_title'] = 'Privacy and Security | TikTok Fame';
        $data['meta_keyword'] = '';
        $data['meta_desc'] = '#';
        $data['seo_schema'] = '';
        return view('pages.privacy', $data);
    }

    public function terms(){
        $data['meta_title'] = 'Terms and Conditions | TikTok Fame';
        $data['meta_keyword'] = '';
        $data['meta_desc'] = 'TikTok Fame.com reserves the right to make changes to this Site and to these Terms and Conditions at any time without prior notice.';
        $data['seo_schema'] = '';
        return view('pages.terms', $data);
    }





}
