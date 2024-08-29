<?php

namespace App\Http\Controllers;
use App\Models\CategoryModel;
use App\Models\SubCategoryModel;
use App\Models\ProductModel;
use Illuminate\Http\Request;


class HomeController extends Controller
{
    //HomePage
    public function index(){
        $data['getRecord'] = CategoryModel::getRecord();
        $data['getSubCategories'] = SubCategoryModel::getActiveRecord();
        $data['top_products'] = ProductModel::getActiveRecord('desc');
        $data['seasonal_products'] = ProductModel::getActiveRecord('asc');
        return view('home', $data);
    }


    //Gallery
    public function gallery(){
        return view('gallary');
    }




}
