<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
class Order extends Model
{
    const STATUS_TXT = [
        '0'=>'待處理','1'=>'發貨中','2'=>'已發貨','3'=>'運輸中','4'=>'已付款','5'=>'拒絕付款','10'=>'訂單完成','-1'=>'訂單取消'
    ];

    const DELIVERY_TYPE_TXT = [
        '0'=>'宅配到府','1'=>'7-11便利店'
    ];

    const DELIVERY_TIME = [
        '1'=>'09:00~12:00',
        '2'=>'12:00~17:00',
        '3'=>'17:00~20:00',
    ];

    const SHOP_TYPE_TXT = [
        '1'=>'7-11超商',
        '2'=>'全家超商',
        '3'=>'OK超商',
        '4'=>'萊爾富超商',
    ];

    protected $casts = [
        'shop_data' => 'json', // 声明json类型
    ];

    protected $fillable = [
        'order_no','no','inside_no','status','total_price','product_price','freight','delivery_type','delivery_time','payment_type',
        'name','phone','email','country','province','city','county','street','address',
        'consignee_name','consignee_phone','consignee_email','consignee_province','consignee_city','consignee_county','consignee_street','consignee_address',
        'shipping_method_id','shipping_method_name','waybill_no','express_company','delivery_at','payment_at',
        'remarks','ip','ipcountry','user_agent','order_device','shop_name','shop_type','shop_no','shop_data'
    ];

    public function products()
    {
        return $this->hasMany(OrderProduct::class);
    }

    public function goods()
    {
        return $this->hasOne(OrderGoods::class);
    }
}
