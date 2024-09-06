<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class BlogModel extends Model
{
    use HasFactory;


    protected $table = 'blog';


    static public function getRecord()
    {
        return self::select('blog.*', 'users.name as created_by_name')
                ->join('users', 'users.id', '=', 'blog.created_by')
                ->where('blog.is_delete', '=', 0)
                ->orderBy('blog.id', 'desc')
                ->paginate(10);
    }

    static public function getRecordActive()
    {
        return self::select('blog.*')
                ->where('blog.is_delete', '=', 0)
                ->where('blog.status', '=', 0)
                ->orderBy('blog.id', 'asc')
                ->paginate(15);
    }

    static public function getSingle($id){
        return self::find($id);
    }



}

