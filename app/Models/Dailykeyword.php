<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Dailykeyword extends Model
{
    protected $table = 'dailykeyword';
    use HasFactory;

    protected $fillable = [
        "daily_id",
        "keyword_id",
    ];
    public function daily()
    {
        return $this->belongsTo(Daily::class);
    }
    public function keyword()
    {
        return $this->belongsTo(Keyword::class);
    }
}
