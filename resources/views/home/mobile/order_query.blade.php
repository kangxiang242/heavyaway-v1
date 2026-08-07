@extends('home.mobile.layout')
@section('title', '訂單查詢')
@section('style')
    @parent
    <link rel="stylesheet" type="text/css" href="{{ asset('static/css/order_query.css') }}"/>
@stop

@section('content')
    <div class="sub-nav">
        <p><a href="/">首页</a><span class="dayu">></span><span class="hue">訂單查詢</span></p>
    </div>

		<div class="box-content">

			<div class="box-query">
                <form action="{{ url('order/query') }}" method="get" id="submit_form">
                    <div class="row">
                        <div class="form-row">
                            <label>電話:</label>
                            <input type="number"  pattern="[0-9]*" name="phone" id="" value="" placeholder="請輸入訂購者電話" />
                        </div>

                        <div class="form-row">
                            <label>郵箱:</label>
                            <input type="email" style="ime-mode:disabled" lang="en" autocapitalize="on" name="email" id="" value="" placeholder="請輸入訂購者郵箱" />
                        </div>

                        <div class="form-row text-align-center">
                            <button type="submit">確認提交</button>
                        </div>
                    </div>

                    <div class="row form-desc">
                        <div class="desc-box">
                        <p>我們可以幫您:</p>
                        <p>1.查詢您購買的商品明細</p>
                        <p>2.獲得客服人員對該訂單的處理情況</p>
                        <p>3.查詢該訂單的確實出貨的處理情況</p>
                        <p>4.您的個人資料並不會顯示，只對訂單資料作回應</p>
                        </div>
                    </div>

                    <div class="clearfix"></div>
                </form>
			</div>

		</div>
@section('script')
    @parent
    <script>
        var submit_success = function(data){
            /*layer.msg("查詢成功，正在跳轉~");*/
            window.location.href="/order/"+data.order_id;
        }
        var submit_saved = function(){
            var phone = $('input[name="phone"]').val();
            var email = $('input[name="email"]').val();

            if(!phone){
                layer.msg("請填寫手機號");return false;
            }
            if(!email){
                layer.msg("請填寫電子郵箱");return false;
            }
            var email_reg = /^([a-zA-Z0-9]+[_|\_|\.]?)*[a-zA-Z0-9]+@([a-zA-Z0-9]+[_|\_|\.]?)*[a-zA-Z0-9]+\.[a-zA-Z]{2,3}$/;
            if (!email_reg.test(email)) {
                layer.msg("請填寫正確的電子郵箱");return false;
            }


        }
    </script>
@stop
@endsection
