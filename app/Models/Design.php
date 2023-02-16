<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Design extends Model
{
    use HasFactory;

    protected $table = 'design';

    protected $fillable = [
        "desing",
        "daily_id",
    ];

    public function daily()
    {
        return $this->belongsTo(Daily::class);
    }
}
