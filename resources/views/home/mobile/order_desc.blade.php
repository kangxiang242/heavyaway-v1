@extends('home.mobile.layout')
@section('title', '訂單詳情')
@section('style')
    @parent
    <link rel="stylesheet" type="text/css" href="{{ asset('static/css/order_desc.css') }}"/>
@stop
@inject('OrderPresenter',"App\Presenters\OrderPresenter")
@section('content')

    <div class="sub-nav">
        <p><a href="/">首页</a><span class="dayu">></span><a href="/order/query">訂單查詢</a><span class="dayu">></span><span class="hue">订单详情</span></p>
    </div>

		<div class="box-content">


			<div class="order">
				<div class="item">
					<div class="row">

						<div class="left">訂單號</div>
						<div class="right">{{ $order->order_no }}</div>

					</div>


					<div class="row">
						<div class="left">訂單狀態</div>
						<div class="right">{{ $OrderPresenter->getStatusTxt($order->status) }}</div>
					</div>

					<div class="row">
						<div class="left">訂單產品</div>
						<div class="right">
							<div class="goods-img"><img src="{{ asset('uploads/'.$order->goods->goods_img) }}" ></div>

							<div><span>213123213</span></div>
						</div>

					</div>

					<div class="row">
						<div class="left">支付總額</div>
						<div class="right">${{ $order->total_price }}</div>
					</div>

					<div class="row">
						<div class="left">生產時間</div>
						<div class="right">{{ $order->created_at }}</div>
					</div>

				</div>

				<div class="item">
					<div class="row">
						<div class="left">收貨姓名</div>
						<div class="right">{{ $order->consignee_name }}</div>
					</div>

					<div class="row">
						<div class="left">聯絡電話</div>
						<div class="right">{{ $order->consignee_phone }}</div>
					</div>

					<div class="row">
						<div class="left">電子郵箱</div>
						<div class="right">{{ $order->consignee_email }}</div>
					</div>
				</div>

				<div  class="item">
					<div class="row">
						<div class="left">付款方式</div>
						<div class="right">貨到付款</div>
					</div>

					<div class="row">
						<div class="left">配送方式</div>
						<div class="right">{{ $order->shipping_method_name }}</div>
					</div>

					<div class="row">
						<div class="left">收貨地區</div>
						<div class="right">{{ $order->consignee_city.$order->consignee_county.$order->consignee_street.$order->consignee_address }}</div>
					</div>

                    <div class="row">
						<div class="left">送貨時段</div>
						<div class="right">任何時段</div>
					</div>

					<div class="row">
						<div class="left">收貨方式</div>
						<div class="right">本人收貨</div>
					</div>
				</div>

				<div class="item">
					<div class="row">
						<div class="left">訂單備註</div>
						<div class="right">{{ $order->remarks }}</div>
					</div>
				</div>

			</div>




		</div>





@endsection
