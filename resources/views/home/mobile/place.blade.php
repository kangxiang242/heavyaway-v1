@extends('home.mobile.layout')
@section('title', $goods->title)
@section('style')
    @parent
    <link rel="stylesheet" type="text/css" href="{{ asset('static/css/place.css') }}"/>
    <link rel="stylesheet" type="text/css" href="{{ asset('static/css/citys.css') }}"/>
    <style>
        @media screen and (max-width: 960px){
            .box-content{
                padding-left: 0.4rem;padding-right: 0.4rem;
            }

        }
    </style>
@stop

@section('content')


    {{--<div class="sub-nav">
        <p><a href="/">首页</a><span class="dayu">></span><a href="/product/">線上訂購</a><span class="dayu">></span><span class="hue">{{ \Illuminate\Support\Str::limit($goods->title,20) }}</span></p>
    </div>--}}
    {{--<div class="dgssq">
        <div class="confirm-title">確認商品</div>
        <div class="confirm-box" style="margin-left:10px;width:100px;border: 0.01rem solid #ccc;border-radius: unset">123123123123</div>
    </div>--}}

		<div class="box-content" style="">


			<div class="place-nav">
				<p>確認商品 -> 填寫收貨信息 -> 填寫配送信息 -> 提交訂單</p>
			</div>



            <form action="{{ url('order/'.$goods->id) }}" method="post" id="submit_form">
                {{ csrf_field() }}
                <div class="place-main">
                    <div class="pc-place-confirm1">
                        <div class="place-confirm ">
                            <h2 class="confirm-title">確認商品</h2>
                            <div class="confirm-box">
                                <div class="upper-box">
                                    <div class="confirm-product-img">
                                        <img class="product-img" src="{{ asset('uploads/'.$goods->img) }}" alt="">
                                    </div>
                                    <div class="box-right">
                                        <div class="confirm-right">
                                            <a class="last-goods" data-id="{{ $goods->id }}" data-action="0" href="javascript:;"><div class="action float-left ">-</div></a>
                                                <div class="text"><span class="title-span">{{ $goods->title }}</span></div>
                                            <a class="next-goods" data-id="{{ $goods->id }}" data-action="1" href="javascript:;"><div class="action float-right">+</div></a>
                                        </div>
                                    </div>
                                    <div class="clearfix"></div>
                                </div>

                                <div class="confirm-price-box">
                                    <div class="describe">
                                        <p><span class="grey">優惠價：</span><span class="small">$</span><span class="lprice">{{ $goods->price }}</span></p>
                                        <p>
                                            <span class="grey">運費：</span> <span class="yunfei">{!! $goods->price>=3000?"免運":'<span class="small">$</span>150' !!}</span>
                                            <input type="hidden" name="freight" value="{{ $goods->price>=3000?"0":'150' }}">
                                        </p>
                                    </div>
                                    <div class="total-price">
                                        <p><span>總價格：</span><span class="span-red"><span  class="small">$</span><span class="lprice-total">{{ $goods->price+($goods->price>=3000?0:150) }}</span></span></p>
                                    </div>
                                </div>

                            </div>
                        </div>
                    </div>


                    <div class="pc-place-confirm2">
                        <div class="place-confirm">
                            <h2 class="confirm-title">填寫收貨信息</h2>
                            <div class="receiving-box">
                                <div class="fieldset-item" >
                                    <fieldset class="hide">
                                        <legend>收貨人</legend>
                                        <div class="right-input"><input class="fieldset-input" name="consignee_name" type="text"></div>
                                        <div class="clearfix"></div>
                                    </fieldset>
                                    <div class="illusion">
                                        <div class="left-label"><label>收貨人</label></div>
                                        <div class="right-label"><label>如：張三</label></div>

                                    </div>
                                </div>

                                <div class="fieldset-item">
                                    <fieldset class="hide">
                                        <legend>收貨電話</legend>
                                        <div class="right-input"><input  class="fieldset-input" name="consignee_phone" type="number"  pattern="[0-9]*"></div>
                                        <div class="clearfix"></div>
                                    </fieldset>
                                    <div class="illusion">
                                        <div class="left-label"><label>收貨電話</label></div>
                                        <div class="right-label"><label>如：0912345678</label></div>
                                    </div>
                                </div>

                                <div class="fieldset-item">
                                    <fieldset class="hide">
                                        <legend>電子信箱</legend>
                                        <div class="right-input"><input class="fieldset-input" name="consignee_email" type="email" style="ime-mode:disabled" lang="en" autocapitalize="on" ></div>
                                        <div class="clearfix"></div>
                                    </fieldset>
                                    <div class="illusion">
                                        <div class="left-label"><label>電子信箱</label></div>
                                        <div class="right-label"><label>如：example@email.com</label></div>
                                    </div>
                                </div>
                            </div>
                        </div>




                        <div class="place-confirm">
                            <h2 class="confirm-title">填寫配送信息</h2>
                            <div class="receiving-box">

                                <div class="fieldset-item ">
                                    <fieldset class="fieldset-select-ava select-huifu" style="border: 0.5px solid rgb(153, 153, 153);">
                                        <legend style="color: rgb(153, 153, 153);">配送方式</legend>
                                        <div class="right-input">

                                            {{--<select class="fieldset-select" name="shipping_id">
                                                @foreach($shipping_methods as $item)
                                                <option class="fieldset-select-option" value ="{{ $item->id }}">{{ $item->name }}</option>
                                                @endforeach
                                            </select>--}}

                                            <div class="right-input">
                                                <input type="hidden" name="shipping_id" value="1">
                                                <div class="input-left-label"><label>宅配到府</label></div>
                                                <div class="input-right-label right-xiala"><img src="{{ asset('static/img/xiala.png') }}" alt=""></div>
                                            </div>
                                            <div class="clearfix"></div>
                                        </div>
                                        <div class="clearfix"></div>
                                    </fieldset>

                                </div>

                                <div class="fieldset-item ">
                                    <fieldset class="hide select-huifu" id="diqu-fieldset">
                                        <legend>請選擇配送地區</legend>
                                        <div class="right-input">
                                            <div class="input-left-label"><input class="input" name="" id="city" type="text" autocomplete="off" readonly="true"></div>
                                            <div class="input-right-label right-xiala"><img class="peisong_xiala" src="{{ asset('static/img/xiala.png') }}" alt=""></div>
                                        </div>
                                        <div class="clearfix"></div>
                                    </fieldset>
                                    <div class="illusion diqu-select">
                                        <div class="left-label"><label>請選擇配送地區</label></div>
                                        {{--<div class="input-right-label">123123</div>--}}
                                        <div class="input-right-label right-xiala"><img  class="peisong_xiala" src="{{ asset('static/img/xiala.png') }}" alt=""></div>
                                    </div>


                                </div>


                                <div class="fieldset-item">
                                    <fieldset class="hide" >
                                        <legend>收貨地址</legend>
                                        <div class="right-input"><input class="fieldset-input" name="consignee_address" type="text"></div>
                                        <div class="clearfix"></div>
                                    </fieldset>
                                    <div class="illusion">
                                        <div class="left-label"><label>請填寫詳細的收貨地址</label></div>
                                    </div>
                                </div>

                                <div class="fieldset-item">
                                    <fieldset class="" style="border: 0.5px solid rgb(153, 153, 153);">
                                        <legend style="color: rgb(153, 153, 153);">支付方式</legend>
                                        <div class="right-input">

                                            {{--<select class="fieldset-select">
                                                <option class="fieldset-select-option" name="payment_type" value ="">貨到付款</option>
                                            </select>--}}

                                            <div class="right-input"><div class="input-left-label"><label>貨到付款</label></div> <div class="input-right-label"><label>默選</label></div></div>
                                            <div class="clearfix"></div>
                                        </div>
                                        <div class="clearfix"></div>
                                    </fieldset>




                                </div>



                            </div>
                        </div>

                        <div class="place-confirm pc-place-other">
                            <h2 class="confirm-title">其它</h2>
                            <div class="receiving-box">
                                <div class="fieldset-item">
                                    <fieldset class="hide">
                                        <legend>訂單備註</legend>
                                        <div class="right-input"><input class="fieldset-input" name="remarks" type="text"></div>
                                        <div class="clearfix"></div>
                                    </fieldset>
                                    <div class="illusion">
                                        <div class="left-label"><label>訂單備註</label></div>
                                        <div class="right-label"><label>（選填）</label></div>
                                    </div>
                                </div>

                            </div>
                        </div>

                        <div class="place-description">
                            <p>1. 您可以在訂單備註留下您的特殊要求，如：需要延遲發貨時間，或到貨時間，我們將盡力按照您的要求來處理訂單。</p>
                            <p>2. 訂單生成後將無法自行修改，請聯絡本站客服為您修改。</p>
                            <p>3. 請您再次確認您的訂單資訊，核實後點擊生成訂單。</p>
                        </div>

                        <div class="place-button">
                            <button type="submit">提交訂單</button>
                        </div>
                    </div>
                </div>
            </form>
		</div>








@section('script')
    @parent
    <script type="text/javascript" src="{{ asset('static/js/Popt.js') }}"></script>
    <script type="text/javascript" src="{{ asset('static/js/city.json.js') }}"></script>
    <script type="text/javascript" src="{{ asset('static/js/citySet.js') }}"></script>
    <script type="text/javascript">
        $(".next-goods").click(function(){
            var id = $(this).attr('data-id');
            getGoods(id,1)
        });

        $(".last-goods").click(function(){
            var id = $(this).attr('data-id');
            getGoods(id,0)
        });

        function getGoods(id,type,obj){
            var load;
            $.ajax({
                url:"{{ url('product/get/adjacent') }}",
                type:'GET', //GET
                async:true,    //或false,是否异步
                data:{
                    id:id,
                    type:type
                },
                dataType:'json',
                success:function(data,textStatus,jqXHR){
                    $('.product-img').attr("src",'/uploads/'+data.img);
                    $('.title-span').text(data.title);
                    $('.lprice').text(data.price);
                    if(data.price>=3000){
                        $('.yunfei').text("免運");
                        $('.lprice-total').text(data.price);
                    }else{
                        $('.yunfei').html('<span class="small">$</span>150');
                        $('.lprice-total').text(data.price+150);
                    }

                    //id="submit_form"
                    $("#submit_form").attr('action','/order/'+data.id);
                    $(".next-goods").attr('data-id',data.id);
                    $(".last-goods").attr('data-id',data.id);

                },
                error:function(xhr,textStatus){

                },
                beforeSend:function(XMLHttpRequest){
                    load = layer.load(1,{
                        shade: [0.3,'#000']
                    })
                },
                complete:function(XMLHttpRequest,textStatus){
                    layer.close(load);
                }
            })
        }

        $(".fieldset-input").focus(function(){
            select_huifu();
            $(this).parent().parent().css({"border":"0.5px solid #098FF6"});
            $(this).parent().siblings("legend").css({"color":"#098FF6"});

            $(".fieldset-select-ava").each(function(){
                $(this).css({"border":"0.5px solid #999999"});
                $(this).find("legend").css({"color":"#999999"});
            });

        });

        $(".fieldset-input").blur(function(){
            var cont = $(this).val();
            if(cont){
                $(this).parent().parent().css({"border":"0.5px solid #999999"});
                $(this).parent().siblings("legend").css({"color":"#999999"});
            }else{
                $(this).parent().parent().siblings(".illusion").show();
                $(this).parent().parent().hide();
            }

        });


        $(".illusion").click(function(){

            $(this).siblings("fieldset").show();
            $(this).siblings("fieldset").find(".fieldset-input").focus();
            $(this).hide();

            if($(this).siblings("fieldset").attr('id') == 'diqu-fieldset'){
                select_huifu();
                $(this).siblings("fieldset").css({"border":"0.5px solid #098FF6"});
                $(this).siblings("fieldset").find("legend").css({"color":"#098FF6"});

            }

        });

        $("fieldset").click(function(eq){

            $("fieldset").each(function(){
                $(this).css({"border":"0.5px solid #999999"});
                $(this).find("legend").css({"color":"#999999"});
            });



            $(this).css({"border":"0.5px solid #098FF6"});
            $(this).find("legend").css({"color":"#098FF6"});


            $(".fieldset-input").each(function(){
                $(this).parent().parent().css({"border":"0.5px solid #999999"});
                $(this).parent().siblings("legend").css({"color":"#999999"});
            });
        });

    function select_huifu(){
        $('.select-huifu').each(function(){
            $(this).css({"border":"0.5px solid #999999"});
            $(this).find("legend").css({"color":"#999999"});
        });
    }



    </script>
    <script type="text/javascript">

        /*$("#city").click(function (e) {
            SelCity(this,e);
        });*/
        $("#diqu-fieldset").click(function (e) {

            SelCity(document.getElementById("city"),e);
        });
        $(".diqu-select").click(function (e) {
            SelCity(document.getElementById("city"),e);
        });

    </script>
    <script>
        var submit_success = function(data){

            msg("恭喜！下單成功","商品經隱密包裹後隨即寄出","/order/"+data.order_id);
        }
        var submit_saved = function(data){
            var consignee_name = $('input[name="consignee_name"]').val();
            var consignee_phone = $('input[name="consignee_phone"]').val();
            var consignee_email = $('input[name="consignee_email"]').val();
            var hcity = $('input[name="hcity"]').val();
            var hproper = $('input[name="hproper"]').val();
            var harea = $('input[name="harea"]').val();
            var consignee_address = $('input[name="consignee_address"]').val();

            if(!consignee_name){
                layer.msg("請填寫收貨人");return false;
            }
            if(!consignee_phone){
                layer.msg("請填寫收貨電話");return false;
            }
            if(!consignee_email){
                layer.msg("請填寫電子郵箱");return false;
            }
            var regEmail = /^([a-zA-Z0-9]+[_|\_|\.]?)*[a-zA-Z0-9]+@([a-zA-Z0-9]+[_|\_|\.]?)*[a-zA-Z0-9]+\.[a-zA-Z]{2,3}$/;
            if(!regEmail.test(consignee_email)){
                layer.msg("請填寫正確的電子郵箱");return false;
            }
            if(!hcity){
                layer.msg("請選擇市縣");return false;
            }
            if(!hproper){
                layer.msg("請選擇地區");return false;
            }
            if(!harea){
                layer.msg("請選擇路段");return false;
            }
            if(!consignee_address){
                layer.msg("請填寫詳細地址");return false;
            }
        }

    </script>
@stop
@endsection
