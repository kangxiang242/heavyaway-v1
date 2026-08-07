<?php

namespace App\Http\Controllers\Home;

use App\Http\Requests\OrderRequest;
use App\Models\Area;
use App\Models\Goods;
use App\Models\Order;
use App\Models\ShippingMethods;
use App\Repository\OrderRepository;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\DB;
class OrderController extends Controller
{


    /**
     * 訂單查詢
     * @param Request $request
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\Http\JsonResponse|\Illuminate\View\View
     */
    public function query(Request $request){

        if($request->ajax()){
            $order = Order::where('consignee_phone',$request->phone)->where('consignee_email',$request->email)->orderBy('created_at','desc')->first();
            if(!$order){
                return response()->json(['message'=>'訂單不存在','sub_message'=>'請確認您輸入的信息是否有誤'],400);
            }
            return response()->json(['order_id'=>$order->id]);
        }

        return view('home.mobile.order_query');
    }

    /**
     * 訂單詳情
     * @param $id
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function show($id){
        $order = Order::with('goods')->find($id);

        return view('home.mobile.order_desc')->with('order',$order);
    }

    /**
     * 下單頁面
     * @param $id
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function place($id){
        $goods = Goods::find($id);
        $shipping_methods = ShippingMethods::where('status',1)->get();
        $next = Goods::where('sort', '<', $goods->sort)->orderBy('sort','desc')->first();

        $last = Goods::where('sort', '>', $goods->sort)->orderBy('sort','asc')->first();

        return view('home.mobile.place')->with('goods',$goods)->with('shipping_methods',$shipping_methods)->with('last',$last)->with('next',$next);

    }

    /**
     * 订单提交
     * @param OrderRequest $request
     * @param $id
     * @param OrderRepository $orderRepository
     * @throws \Throwable
     */
    public function store(OrderRequest $request,$id,OrderRepository $orderRepository){

        try {

            $consignee = [
                'consignee_name'=>$request->consignee_name,
                'consignee_phone'=>$request->consignee_phone,
                'consignee_email'=>$request->consignee_email,
                'consignee_address'=>$request->consignee_address,
                'consignee_province'=>'台灣',
                'consignee_city'=>$request->hcity,
                'consignee_county'=>$request->hproper,
                'consignee_street'=>$request->harea,
            ];
            $order = $orderRepository->create($id,1,$request->shipping_id,$consignee,$request->header('cf-connecting-ip',$request->ip()),$request->remarks);
            return response()->json(['order_id'=>$order->id]);
        }catch (\Exception $exception){
            return response()->json(['message'=>"提交失败",'error'=>$exception->getMessage()],400);
        }


    }
}
