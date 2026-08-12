<?php


namespace App\Repository;


use App\Models\Goods;
use App\Models\Order;
use App\Models\OrderGoods;
use App\Models\ShippingMethods;
use Carbon\Carbon;
use Illuminate\Support\Arr;
use Illuminate\Support\Facades\DB;
class OrderRepository extends BaseRepository
{
    protected $orderGoods;

    public function __construct(Order $order,OrderGoods $orderGoods)
    {
        $this->model = $order;
        $this->orderGoods = $orderGoods;
    }


    /**
     * 生成订单
     * @param int $goods_id 商品ID
     * @param int $number 数量
     * @param int $shipping_method_id 配送方式id
     * @param array $consignee 收货信息
     * @param string $ip 下单人ip
     * @param string $remarks 订单备注
     * @return mixed
     * @throws \Throwable
     */
    public function create(int $goods_id,int $number,int $shipping_method_id,array $consignee,$ip,string $remarks=null){
        return DB::transaction(function ()use ($goods_id,$number,$shipping_method_id,$consignee,$ip,$remarks) {
            $goods = Goods::find($goods_id);
            $shipping_method = ShippingMethods::find($shipping_method_id);
            $freight = $goods->price>=3000?0:150;
            $total_price = ($goods->price*$number)+$freight;

            $order = $this->model->create([
                'order_no'=>OrderRepository::makeOrderNo(),
                'inside_no'=>$this->makeOrderInsideNo(),
                'freight'=>$freight,
                'total_price'=>$total_price,
                'ip'=>$ip,
                'name'=>Arr::get($consignee,'consignee_name'),
                'phone'=>Arr::get($consignee,'consignee_phone'),
                'email'=>Arr::get($consignee,'consignee_email'),
                'province'=>Arr::get($consignee,'consignee_province'),
                'city'=>Arr::get($consignee,'consignee_city'),
                'county'=>Arr::get($consignee,'consignee_county'),
                'street'=>Arr::get($consignee,'consignee_street'),
                'address'=>Arr::get($consignee,'consignee_address'),
                'shipping_method_id'=>$shipping_method->id,
                'shipping_method_name'=>$shipping_method->name,
                'remarks'=>$remarks,
                'user_agent'=>request()->header('user_agent'),
                'order_device'=>$this->getDevice(),
            ]);
            $this->orderGoods->create([
                'order_id'=>$order->id,
                'goods_id'=>$goods->id,
                'goods_title'=>$goods->title,
                'price'=>$goods->price,
                'goods_img'=>$goods->img,
                'number'=>$number,
                'goods_data'=>$goods,
            ]);


            return $order;



        });

    }



    /**
     * 生成运单号
     * @return integer
     */
    public static function makeOrderNo(){
        return date('YmdHis').rand(1000,9999);
    }

    /**
     * 生成内部订单号
     * @return string
     */
    public function makeOrderInsideNo(){
        $count = $this->model->whereBetWeen('created_at',[Carbon::now()->startOfDay(),Carbon::now()->endOfDay()])->count();
        return 'R1-'.date('YmdHi').'-'.($count+1);
    }

    public function getDevice(){
        $agent  = strtolower(request()->header('user_agent'));

        $device_type = 'unknown';

        $device_type = (strpos($agent, 'windows')) ? 'windows' : $device_type;

        $device_type = (strpos($agent, 'mac')) ? 'mac' : $device_type;

        $device_type = (strpos($agent, 'iphone')) ? 'iphone' : $device_type;

        $device_type = (strpos($agent, 'ipad')) ? 'ipad' : $device_type;

        $device_type = (strpos($agent, 'android')) ? 'android' : $device_type;

        return $device_type;

    }
}
