<?php $__env->startSection('title', '線上訂購'); ?>
<?php $__env->startSection('style'); ?>
    <?php echo \Illuminate\View\Factory::parentPlaceholder('style'); ?>
    <link rel="stylesheet" type="text/css" href="<?php echo e(asset('static/css/product.css')); ?>"/>
    <style>
        /*.mescroll{
            position: fixed;
            top: 170px;
            bottom: 0;
            height: auto;
        }*/
        @media screen and (max-width: 960px){
            .box-content{
                padding-left: 0.25rem;padding-right: 0.25rem;
            }
            .product .item .right {
                padding-left: 0.3rem;
            }

        }
    </style>
<?php $__env->stopSection(); ?>

<?php $__env->startSection('content'); ?>
    <div class="sub-nav">
        <p><a href="/">首页</a><span class="dayu">></span><span class="hue">線上訂購</span></p>
    </div>
		<div class="box-content">


			<div class="product mescroll" id="mescroll"  >
				

				


				

			</div>


		</div>

<?php $__env->startSection('script'); ?>
    <?php echo \Illuminate\View\Factory::parentPlaceholder('script'); ?>

    <script>
        var page = 1;
        var last_page = 1;
        var scroll = 1;
        function upCallback(page){
            $('.box-content').append('<div class="bottom-loading">正在加载...</div>')
            scroll = 0;
            $.ajax({
                url:"/product?page="+page,
                method:"get",
                dataType:'json',
                success:function(data){
                    var tmp;
                    last_page = data.last_page;
                    for(var i = 0;i<data.data.length;i++){
                        tmp = '<div class="item" id="test" v-for="item in items"><div class="floating left"><a href="/product/'+data.data[i].id+'"><img src="/uploads/'+data.data[i].img+'" alt="'+data.data[i].img_alt+'"></a></div><div class="floating right"><p class="product-title" id="product-title"><a href="/product/'+data.data[i].id+'">'+data.data[i].title+'</a></p><p class="product-sub-title">【商品】羅氏鮮（奧利）</p><p class="product-sub-title">【规格】120mg/颗42颗/盒</p><p class="product-outline">'+data.data[i].brief+'</p><p class="product-price"><span>$</span>'+data.data[i].price;
                        if(data.data[i].original_price > data.data[i].price){
                            tmp += '<span class="origin-price"><span>$</span>'+data.data[i].original_price+'</span> <span class="discount">折扣:'+(100-Math.round((data.data[i].price/data.data[i].original_price)*100))+'%</span> ';
                        }
                        tmp += '</p><div class="bottom"><a href="/order/place/'+data.data[i].id+'"><button type="button">立即購買</button></a></div></div><div class="clearfix"></div></div>'
                        $('.product').append(tmp);
                    }
                    $('.bottom-loading').remove();
                    scroll = 1;
                }
            });
        }
        upCallback(1);



        $(window).scroll(function(){
            if(scroll < 1){
                return false;
            }
            if ($(window).scrollTop() + $(window).height() == $(document).height()) {
                if(last_page > page){
                    page = page+1

                    upCallback(page);

                }else{
                    /*$('.box-content').append('<div class="bottom-loading">没有了</div>')*/
                    scroll = 0;
                }

            }
        });

    </script>
<?php $__env->stopSection(); ?>

<?php $__env->stopSection(); ?>

<?php echo $__env->make('home.mobile.layout', array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?><?php /**PATH /Users/mac-2312-r/workspace/wwwroot/纤体-減肥/heavyaway/heavyaway-v1/resources/views/home/mobile/product.blade.php ENDPATH**/ ?>