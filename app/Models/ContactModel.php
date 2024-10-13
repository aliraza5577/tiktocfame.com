<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ContactModel extends Model
{
    use HasFactory;

    protected $table = 'contact';


    static public function getRecord()
    {
        return self::select('contact.*')
                ->orderBy('contact.id', 'desc')
                ->paginate(20);
    }
}

