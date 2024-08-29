<?php

namespace App\Http\Controllers;
use App\Models\CategoryModel;
use App\Models\SubCategoryModel;
use App\Models\ProductModel;

use Illuminate\Http\Request;

class CollectionController extends Controller
{
    //All Collections
    public function all_collections(){
        $data['categories'] = CategoryModel::with('getSubCategory')->get();
        return view('collection.collections', $data);
    }

    //Single Collection
    public function collection($category_slug)
    {
        $category = CategoryModel::where('slug', $category_slug)->firstOrFail();
        $data['category'] = $category;
        $data['subcategories'] = SubCategoryModel::where('category_id', $category->id)->get();
        return view('collection.singleCollection', $data);
    }


    public function sub_collection($category_slug, $subcategory_slug)
    {
        $category = CategoryModel::where('slug', $category_slug)->firstOrFail();
        $subcategory = SubCategoryModel::with('getProduct')
            ->where('slug', $subcategory_slug)
            ->where('category_id', $category->id)
            ->firstOrFail();

        $data['category'] = $category;
        $data['subcategory'] = $subcategory;
        $data['products'] = $subcategory->getProduct;

        return view('collection.subCollection', $data);
    }

    // Show Single Product
    public function single_product($product_slug)
    {
        $data['product'] = ProductModel::where('slug', $product_slug)->with('getImage')->firstOrFail();

        return view('collection.singleProduct', $data);
    }




}
