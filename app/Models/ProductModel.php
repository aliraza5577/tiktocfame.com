<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ProductModel extends Model
{
    use HasFactory;

    protected $table = 'products';


    static public function checkSlug($slug){
        return self::where('slug','=',$slug)->count();
    }

    static public function getRecord()
    {
        return self::select('products.*', 'users.name as created_by_name', 'sub_category.name as sub_category_name')
                ->join('sub_category', 'sub_category.id', '=', 'products.sub_category_id')
                ->join('users', 'users.id', '=', 'products.created_by')
                ->where('products.is_delete', '=', 0)
                ->orderBy('products.id', 'desc')
                ->paginate(10);
    }


    public static function getActiveRecord($order)
    {
        return self::where('status', 0)
                    ->where('is_delete', 0)
                    ->orderBy('id', $order)
                    ->get();
    }



    static public function getSingle($id){
        return self::find($id);
    }

    public function getImage(){
        return $this->hasMany(ProductImageModel::class, 'product_id', 'id');
    }

    public function sub_category()
    {
        return $this->belongsTo(SubCategoryModel::class, 'sub_category_id');
    }
}
