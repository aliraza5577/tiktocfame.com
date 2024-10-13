<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class CustomQuote extends Model
{
    use HasFactory;

    protected $table = 'custom_quote';

    static public function getRecord()
    {
        return self::select('custom_quote.*')
                ->orderBy('custom_quote.id', 'desc')
                ->paginate(20);
    }



}
