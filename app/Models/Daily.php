<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Daily extends Model
{
    use HasFactory;

    protected $table = 'daily';

    protected $fillable = [
        "title","daily"
    ];

    public function keyword()
    {
        return $this->belongsToMany(Keyword::class, 'dailykeyword');
    }
    public function design()
    {
        return $this->hasMany(Design::class);
    }
    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
