<?php

namespace App\Http\Controllers;
use App\Models\CategoryModel;
use App\Models\SubCategoryModel;
use App\Models\ProductModel;

use Illuminate\Http\Request;

class CollectionController extends Controller
{
    //All Collections
    // public function all_collections(){
    //     $data['meta_title'] = 'All Collections - Citi Packaging';
    //     $data['meta_keyword'] = 'All Collections';
    //     $data['meta_desc'] = 'All Collections';
    //     $data['seo_schema'] = 'All Collections';
    //     $data['categories'] = CategoryModel::with('getSubCategory')
    //     ->where('status', 0)
    //     ->where('is_delete', 0)
    //     ->get();
    //     return view('collection.collections', $data);
    // }

    //Single Collection
    // public function collection($category_slug)
    // {
    //     $category = CategoryModel::where('slug', $category_slug)->firstOrFail();
    //     $data['category'] = $category;
    //     $data['meta_title'] = $category->meta_title;
    //     $data['meta_keyword'] = $category->meta_keyword;
    //     $data['meta_desc'] = $category->meta_desc;
    //     $data['seo_schema'] = $category->seo_schema;
    //     $data['subcategories'] = SubCategoryModel::where('category_id', $category->id)
    //     ->where('status', 0)
    //     ->where('is_delete', 0)
    //     ->get();
    //     return view('collection.singleCollection', $data);
    // }


    // Sub Categories
    public function sub_collection($subcategory_slug)
    {
        $subcategory = SubCategoryModel::with('getProduct')
            ->where('slug', $subcategory_slug)
            ->where('status', 0)
            ->where('is_delete', 0)
            ->firstOrFail();

        $data['meta_title'] = $subcategory->meta_title;
        $data['meta_keyword'] = $subcategory->meta_keyword;
        $data['meta_desc'] = $subcategory->meta_desc;
        $data['seo_schema'] = $subcategory->seo_schema;
        $data['getSubCategories'] = SubCategoryModel::getActiveRecord();
        $data['subcategory'] = $subcategory;
        $data['products'] = $subcategory->getProduct;

        return view('collection.subCollection', $data);
    }

    //Product Page
    public function single_product($product_slug)
    {

        $product = ProductModel::where('slug', $product_slug)
                            ->with(['getImage', 'category'])
                            ->firstOrFail();

        $data['product'] = $product;

        // Get the parent category slug
        $parentCategorySlug = $product->category->slug;

        // Retrieve related products
        $relatedProducts = ProductModel::where('category_id', $product->category_id)
                                    ->where('id', '!=', $product->id)
                                    ->where('status', 0)
                                    ->where('is_delete', 0)
                                    ->with(['getImage', 'sub_category'])
                                    ->limit(4)
                                    ->get();

        $data['parentCategorySlug'] = $parentCategorySlug;

        $data['relatedProducts'] = $relatedProducts;

        $data['meta_title'] = $product->meta_title;
        $data['meta_keyword'] = $product->meta_keyword;
        $data['meta_desc'] = $product->meta_desc;
        $data['seo_schema'] = $product->seo_schema;

        return view('collection.singleProduct', $data);
    }






}
