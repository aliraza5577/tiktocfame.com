<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class InstantQuote extends Model
{
    use HasFactory;

    protected $table = 'instant_quote';


    static public function getRecord()
    {
        return self::select('instant_quote.*')
                ->orderBy('instant_quote.id', 'desc')
                ->paginate(20);
    }
}
