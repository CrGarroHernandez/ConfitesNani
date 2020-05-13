<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ProductDetail extends Model
{
    //

    public function prices(){
        return $this->hasMany('App\ProductPrice', 'product_details_id');
    }
}
