<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Product extends Model
{
    use HasFactory;
    use SoftDeletes;
    protected $fillable = ['name','hot_deal','price','sale','quanty','status','category_id','product_code'];

    public function category(){
        return $this->belongsTo('App\Models\Category');
    }

    public function orders(){
        return $this->hasMany('App\Models\Order');
    }

    public function picture(){
        return $this->hasMany('App\Models\Picture');
    }
}


