<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\productImage;

class Image extends Model
{
    use HasFactory;
    protected $fillable=[
        'image',
        'post_id',
    ];

    public function productImage(){
        return $this->hasMany('App\Models\productImage');
    }
}
