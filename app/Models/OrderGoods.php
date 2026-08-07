<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class OrderGoods extends Model
{
    protected $fillable = [
        'order_id','goods_id','goods_title','price','number','goods_data','goods_img'
    ];

    protected $casts = [
        'goods_data'=>'json'
    ];
}
