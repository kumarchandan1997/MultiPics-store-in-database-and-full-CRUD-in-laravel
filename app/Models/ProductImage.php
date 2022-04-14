<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Image;




class ProductImage extends Model
{
    use HasFactory;
    protected $fillable=['image_id','image'];

    public function image(){
        return $this->belongsTo('App\Model\Image');
    }
}
