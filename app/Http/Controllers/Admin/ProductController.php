<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\CategoryModel;
use App\Models\SubCategoryModel;
use App\Models\ProductModel;
use App\Models\ProductImageModel;
use Auth;
use Str;

class ProductController extends Controller
{
    // Product Lists
    public function list(){
        $data['getRecord'] = ProductModel::getRecord();
        $data['header_title'] = 'All Products';
        return view('backend.product.list', $data);
    }

    // Add Product
    public function add(){
        $data['getSubCategory'] = SubCategoryModel::getRecord();
        $data['getCategory'] = CategoryModel::getRecordActive();
        $data['header_title'] = 'Add New Product';
        return view('backend.product.add', $data);
    }

    // Create Product
    public function insert(Request $request){
        request()->validate([
            'name' => 'required',
            'slug' => 'required|unique:products',
            'category_id' => 'required',
            'sub_category_id' => 'required',
            'image.*' => 'required|file|mimes:jpg,jpeg,png,gif,webp|max:2048',
            'meta_title' => 'required',
        ]);

        $slug  = $request->slug;
        $slug = Str::slug($slug);

        $product_name = trim($request->name);
        $product = new ProductModel;
        $product->name = $product_name;
        $product->slug = $slug;
        $product->category_id = $request->category_id;
        $product->sub_category_id = $request->sub_category_id;
        $product->short_description = $request->short_description;
        $product->description = $request->description;
        $product->additional_info = $request->additional_info;
        $product->shipping = $request->shipping;
        $product->status = $request->status;
        $product->meta_title = $request->meta_title;
        $product->meta_keyword = $request->meta_keyword;
        $product->meta_desc = $request->meta_desc;
        $product->created_by = Auth::user()->id;
        $product->save();

        if(!empty($request->file('image'))){
            foreach($request->file('image') as $value){
                if($value->isValid()){
                    $ext = $value->getClientOriginalExtension();
                    $randomStr = date('Ymdhis').Str::random(10);
                    $filename = strtolower($randomStr).'.'.$ext;
                    $value->move('public/upload/products', $filename);

                    $imageUpload = new ProductImageModel;
                    $imageUpload->image_name = $filename;
                    $imageUpload->image_ext = $ext;
                    $imageUpload->product_id = $product->id;
                    $imageUpload->save();
                }
            }
        }

        return redirect('admin/product')->with('success', 'Product Added Succesfully.');
    }

    // Edit Product
    public function edit($id){
        $product = ProductModel::getSingle($id);
        $data['getCategory'] = CategoryModel::getRecordActive();
        $data['product'] = $product;
        $data['getSubCategory'] = SubCategoryModel::getSubCategories($product->category_id);
        $data['header_title'] = 'Edit Product';
        return view('backend.product.edit', $data);
    }
    // Update Product
    public function update($id, Request $request){
        request()->validate([
            'name' => 'required',
            'category_id' => 'required',
            'sub_category_id' => 'required',
            'image.*' => 'required|file|mimes:jpg,jpeg,png,gif,webp|max:2048',
            'meta_title' => 'required',
            'slug' => 'required|unique:products,slug,'.$id
        ]);

        $slug  = $request->slug;
        $slug = Str::slug($slug);

        $product = ProductModel::getSingle($id);
        $product->name = $request->name;
        $product->slug = $slug;
        $product->category_id = $request->category_id;
        $product->sub_category_id = $request->sub_category_id;
        $product->short_description = $request->short_description;
        $product->description = $request->description;
        $product->additional_info = $request->additional_info;
        $product->shipping = $request->shipping;
        $product->status = $request->status;
        $product->meta_title = $request->meta_title;
        $product->meta_keyword = $request->meta_keyword;
        $product->meta_desc = $request->meta_desc;
        $product->save();

        if(!empty($request->file('image'))){
            foreach($request->file('image') as $value){
                if($value->isValid()){
                    $ext = $value->getClientOriginalExtension();
                    $randomStr = date('Ymdhis').Str::random(10);
                    $filename = strtolower($randomStr).'.'.$ext;
                    $value->move('public/upload/products', $filename);

                    $imageUpload = new ProductImageModel;
                    $imageUpload->image_name = $filename;
                    $imageUpload->image_ext = $ext;
                    $imageUpload->product_id = $product->id;
                    $imageUpload->save();
                }
            }
        }

        return redirect('admin/product')->with('success', 'Product Updated Succesfully.');
    }

    // Delete Product
    public function delete($id){
        $user = ProductModel::getSingle($id);
        $user->is_delete = 1;
        $user->save();
        return redirect()->back()->with('success', 'Product Succesfully Deleted.');
    }

    // Delete Product Image
    // public function image_delete($id){
    //     $image = ProductImageModel::getSingle($id);
    //     if(!empty($image->getProductImage())){
    //         unlink('public/upload/products/'.$image->image_name);
    //     }
    //     $image->delete();
    //     return redirect()->back()->with('success', 'Product Image Succesfully Deleted.');
    // }

    // Delete Product Image
    public function imageDelete($id)
    {
        $image = ProductImageModel::getSingle($id);

        if ($image && !empty($image->getProductImage())) {
            $imagePath = 'public/upload/products/' . $image->image_name;
            if (file_exists($imagePath)) {
                unlink($imagePath);
            }
        }
        $image->delete();
        return response()->json(['success' => 'Product Image successfully deleted.']);
    }



    // Search Products
    public function searchProducts(Request $request)
    {
        $data['meta_title'] = 'Search - Citi Packaging';
        $data['meta_keyword'] = '';
        $data['meta_desc'] = '';
        $data['seo_schema'] = '';
        $query = $request->input('query');
        $data['products'] = ProductModel::where('name', 'LIKE', "%{$query}%")
                    ->orWhere('description', 'LIKE', "%{$query}%")
                    ->get();

        return view('search_results', $data);
    }
}
