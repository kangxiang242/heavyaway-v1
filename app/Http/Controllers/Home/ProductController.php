<?php

namespace App\Http\Controllers\Home;

use App\Models\Goods;
use App\Models\ShippingMethods;
use App\Repository\GoodsRepository;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class ProductController extends Controller
{
    private $goodsRepository;

    public function __construct(GoodsRepository $goodsRepository)
    {
        $this->goodsRepository = $goodsRepository;
    }

    public function index(Request $request){
        //$data = $this->goodsRepository->getModel()->paginate(10);
        if($request->ajax()){
            $data = $this->goodsRepository->getModel()->orderBy('sort','desc')->paginate(7);
            return $data->toJson();
        }

        return view('home.mobile.product');
    }

    public function show($id){
        $data = $this->goodsRepository->getModel()->find($id);
        return view('home.mobile.product_desc')->with('data',$data);
    }

    /**
     * 获取相邻商品
     * @param Request $request
     */
    public function getAdjacentGoods(Request $request){

        $goods_id = $request->id;
        $goods = Goods::find($goods_id);

        if($request->type==1){
            $new_goods = Goods::where('sort', '<', $goods->sort)->orderBy('sort','desc')->first();

            if(!$new_goods){
                $new_goods = Goods::where("id","<>",$goods)->orderBy('sort','desc')->first();
            }

        }else{
            $new_goods = Goods::where('sort', '>', $goods->sort)->orderBy('sort','asc')->first();
            if(!$new_goods){
                $new_goods = Goods::where("id","<>",$goods)->orderBy('sort','asc')->first();
            }

        }

        return response()->json($new_goods);
    }
}
