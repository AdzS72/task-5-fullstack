<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Articles extends Model
{
    use HasFactory;

    protected $guarded = ['id'];
    protected $fillable = [
        'title',
        'content',
        'image',
    ];

   /* public function category()
    {
        return $this->belongsTo(Categories::class);
    }*/
}
