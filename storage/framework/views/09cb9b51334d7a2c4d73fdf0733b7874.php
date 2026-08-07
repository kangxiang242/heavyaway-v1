<!DOCTYPE html>
<html lang="zh-TW">
	<head>
		<meta charset="utf-8" />
        <meta http-equiv="content-language" content="zh-tw">
		<meta name="viewport" content="width=device-width,initial-scale=1.0,maximum-scale=1.0,user-scalable=no,minimal-ui">
        <meta name="format-detection" content="telephone=no" />
        <?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><!--[if BLOCK]><![endif]--><?php endif; ?><?php if(isset($layout['seo'])): ?>
            <title><?php echo e(isset($layout['seo'])?$layout['seo']->title:""); ?></title>
        <?php else: ?>
            <?php if (! empty(trim($__env->yieldContent('title')))): ?>
                <title><?php echo $__env->yieldContent('title'); ?></title>
            <?php else: ?>
                <title><?php echo e(isset($layout['seo'])?$layout['seo']->title:""); ?></title>
            <?php endif; ?><?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><!--[if ENDBLOCK]><![endif]--><?php endif; ?>
        <?php endif; ?><?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><!--[if ENDBLOCK]><![endif]--><?php endif; ?>
        <?php if (! empty(trim($__env->yieldContent('keywords')))): ?>
            <meta name="keywords" content="<?php echo $__env->yieldContent('keywords'); ?>"/>
        <?php else: ?>
            <meta name="keywords" content="<?php echo e(isset($layout['seo'])?$layout['seo']->key_word:""); ?>"/>
        <?php endif; ?><?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><!--[if ENDBLOCK]><![endif]--><?php endif; ?>

        <?php if (! empty(trim($__env->yieldContent('description')))): ?>
            <meta name="description" content="<?php echo $__env->yieldContent('description'); ?>"/>
        <?php else: ?>
            <meta name="description" content="<?php echo e(isset($layout['seo'])?$layout['seo']->description:""); ?>"/>
        <?php endif; ?><?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><!--[if ENDBLOCK]><![endif]--><?php endif; ?>
        <link rel="canonical" href="<?php echo e(url()->full()); ?>/" />
        <link rel="icon" href="/favicon.ico">
        <?php $__env->startSection('style'); ?>
            <link rel="stylesheet" type="text/css" href="<?php echo e(asset('static/css/style.css')); ?>"/>
            <link rel="stylesheet" type="text/css" href="<?php echo e(asset('static/css/common.css')); ?>"/>
            <link rel="stylesheet" href="<?php echo e(asset('static/css/tips.css')); ?>">
            <link rel="stylesheet" href="<?php echo e(asset('static/layer-v3.1.1/layer/mobile/need/layer.css')); ?>">
            <link rel="stylesheet" href="<?php echo e(asset('static/swiper/package/swiper-bundle.css')); ?>">
            <link rel="stylesheet" href="<?php echo e(asset('static/font/iconfont.css')); ?>">
        <?php echo $__env->yieldSection(); ?>
        <script>

            window.onload = function(){
                // 注意这里使用的ES6语法
                //setTimeout(() => window.scrollTo(0,0), 150); // 返回页面顶部
            };

        </script>
        <script type="text/javascript">
			(function(doc, win) {

                    var docEl = doc.documentElement,
                        isIOS = navigator.userAgent.match(/\(i[^;]+;( U;)? CPU.+Mac OS X/),
                        dpr = isIOS ? Math.min(win.devicePixelRatio, 3) : 1,
                        dpr = window.top === window.self ? dpr : 1, //被iframe引用时，禁止缩放
                        dpr = 1,
                        scale = 1 / dpr,
                        resizeEvt = 'orientationchange' in window ? 'orientationchange' : 'resize';
                    docEl.dataset.dpr = dpr;
                    var metaEl = doc.createElement('meta');
                    metaEl.name = 'viewport';
                    metaEl.content = 'initial-scale=' + scale + ',maximum-scale=' + scale + ', minimum-scale=' + scale;
                    docEl.firstElementChild.appendChild(metaEl);
                    var recalc = function() {
                        var width = docEl.clientWidth;
                        if (width / dpr > 750) {
                            width = 750 * dpr;
                        }
                        // 乘以100，px : rem = 100 : 1
                        docEl.style.fontSize = 100 * (width / 750) + 'px';
                        if(docEl.clientWidth >= 960){
                            docEl.style.fontSize =  '16px';
                        }
                    };
                    recalc()
                    if (!doc.addEventListener) return;
                    win.addEventListener(resizeEvt, recalc, false);

			})(document, window);
		</script>
		<script type="text/javascript">
			/*(function () {
				if(document.documentElement.clientWidth >= 960){
					function setRootFontSize() {
					    let rem, rootWidth;
					    let rootHtml = document.documentElement;
					    //限制展现页面的最小宽度
					    rootWidth = rootHtml.clientWidth < 1366 ? 1366 : rootHtml.clientWidth;
					    // 19.2 = 设计图尺寸宽 / 100（ 设计图的rem = 100 ）
					    rem = rootWidth / 19.2;
					    // 动态写入样式
					    rootHtml.style.fontSize = `${rem}px`;
					}
					setRootFontSize();
					window.addEventListener("resize", setRootFontSize, false);
				}

			})();*/
		</script>
        <!-- Google tag (gtag.js) -->
        <script async src="https://www.googletagmanager.com/gtag/js?id=G-VF3HS4VX8B"></script>
        <script>
            window.dataLayer = window.dataLayer || [];
            function gtag(){dataLayer.push(arguments);}
            gtag('js', new Date());

            gtag('config', 'G-VF3HS4VX8B');
        </script>
	</head>
	<body>
		<div class="header">
            <div class="header-box">
			<div class="logo"><a href="<?php echo e(url('/')); ?>"><img alt="LOGO" src="<?php echo e(asset('static/img/logo.png')); ?>" ></a></div>
                <div class="nav-row pc-mobile">
                    <ul class="nav_ul nav_ul_1">
                        <li><a href="<?php echo e(url('/')); ?>">羅氏鮮首頁</a></li>
                        <li><a href="<?php echo e(url('about')); ?>/">品牌故事</a></li>
                        <li><a href="<?php echo e(url('product')); ?>/">線上訂購</a></li>
                        <li><a href="javascript:;">購買流程</a></li>
                        <li><a href="<?php echo e(url('article')); ?>/">瘦身資訊</a></li>
                        <li><a href="<?php echo e(url('question')); ?>/">常見問題</a></li>
                        <li><a href="<?php echo e(url('contact')); ?>/">聯繫我們</a></li>
                        <li><a href="<?php echo e(url('check')); ?>">訂單查詢</a></li>
                    </ul>
                </div>

			


			<div class="page">
                <div class="search-input-box hide"><input name="keyword" type="text" placeholder="請輸入搜索內容"></div>
                <a class="search-icon" href="javascript:;"><img src="<?php echo e(asset('static/img/search.png')); ?>" ></a>

            </div>
                <div class="clearfix"></div>
            </div>

		</div>

		<div class="nav mobile-nav">
			<div class="nav-row">
				<ul class="nav_ul nav_ul_1">
                    <li><a href="<?php echo e(url('/')); ?>">羅氏鮮首頁</a></li>
                    <li><a href="<?php echo e(url('about')); ?>/">品牌故事</a></li>
                    <li><a href="<?php echo e(url('product')); ?>/">線上訂購</a><span class="ideo">優惠</span></li>
                    <li><a href="javascript:;">購買流程</a></li>

				</ul>
			</div>
			<div class="nav-row">
				<ul class="nav_ul">

                    <li><a href="<?php echo e(url('article')); ?>/">瘦身資訊</a></li>
                    <li><a href="<?php echo e(url('question')); ?>/">常見問題</a></li>
                    <li><a href="<?php echo e(url('contact')); ?>/">聯繫我們</a></li>
                    <li><a href="<?php echo e(url('check')); ?>">訂單查詢</a></li>
				</ul>
			</div>

		</div>
        <?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><!--[if BLOCK]><![endif]--><?php endif; ?><?php if(isset($layout['banner']) && !$layout['banner']->isEmpty()): ?>
		<div class="swiper-container banner">
            <div class="swiper-wrapper">
            <?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><!--[if BLOCK]><![endif]--><?php endif; ?><?php $__currentLoopData = $layout['banner']; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                <?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><!--[if BLOCK]><![endif]--><?php endif; ?><?php if($item): ?>
                    <div class="swiper-slide"><img src="<?php echo e(asset('uploads/'.$item->img)); ?>" alt="轮播图"></div>
                <?php endif; ?><?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><!--[if ENDBLOCK]><![endif]--><?php endif; ?>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?><?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><!--[if ENDBLOCK]><![endif]--><?php endif; ?>
            </div>

		</div>
        <?php endif; ?><?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><!--[if ENDBLOCK]><![endif]--><?php endif; ?>


        <?php echo $__env->yieldContent('content'); ?>
        <footer>
            <div class="footer-box">
                <div class="footer-header">
                    <div class="box">
                        <img src="<?php echo e(asset('static/img/footer_logo.png')); ?>" alt="">
                        <p>羅氏鮮 · 台灣</p>
                    </div>
                </div>
                <div class="footer-nav">
                    <div class="twin-fiercely">
                        <div class="footer-header-icon">
                            <div class="icon">
                                <img class="icon-img" src="<?php echo e(asset('static/img/footer-icon-1.png')); ?>" alt="">
                            </div>
                            <div class="text">
                                <span>選單連結</span>
                            </div>
                            <div class="clearfix"></div>
                        </div>
                        <div class="footer-link">
                            <div class="item">
                                <div class="list"><span class="dayuhao">></span><span class="nav-a"><a href="/">羅氏鮮首頁</a></span></div>
                                <div class="list"><span class="dayuhao">></span><span class="nav-a"><a href="<?php echo e(url('about')); ?>/">品牌故事</a></span></div>
                                <div class="clearfix"></div>
                            </div>
                            <div class="item">
                                <div class="list"><span class="dayuhao">></span><span class="nav-a"><a href="/product/">線上訂購</a></span></div>
                                <div class="list"><span class="dayuhao">></span><span class="nav-a"><a href="/article/">瘦身資訊</a></span></div>
                                <div class="clearfix"></div>
                            </div>
                            <div class="item">
                                <div class="list"><span class="dayuhao">></span><span class="nav-a"><a href="/question/">常見問題</a></span></div>
                                <div class="clearfix"></div>
                            </div>
                        </div>
                    </div>
                    <div class="twin-fiercely">
                        <div class="footer-header-icon">
                            <div class="icon">
                                <img class="icon-img" src="<?php echo e(asset('static/img/footer-icon-2.png')); ?>" alt="">
                            </div>
                            <div class="text">
                                <span>服務及說明</span>
                            </div>
                            <div class="clearfix"></div>
                        </div>
                        <div class="footer-link">
                            <div class="item">

                                <div class="list"><span class="dayuhao">></span><span class="nav-a"><a href="javascript:;">購物流程</a></span></div>
                                <div class="list"><span class="dayuhao">></span><span class="nav-a"><a href="/check">訂單查詢</a></span></div>
                                <div class="clearfix"></div>
                            </div>
                            <div class="item">

                                <div class="list"><span class="dayuhao">></span><span class="nav-a"><a href="/contact/">聯繫我們</a></span></div>
                                <div class="clearfix"></div>
                            </div>
                            </div>
                        </div>
                    </div>
                </div>
                
            </div>
        </footer>




        <?php $__env->startSection('script'); ?>
        <script src="<?php echo e(asset('static/jquery-3.5.1/jquery-3.5.1.min.js')); ?>"></script>
        
        <script src="<?php echo e(asset('static/layer-v3.1.1/layer/layer.js')); ?>"></script>
        <script src="<?php echo e(asset('static/swiper/package/swiper-bundle.js')); ?>"></script>

        <script>
            var mySwiper = new Swiper ('.swiper-container', {

                autoplay: true,//可选选项，自动滑动

                watchOverflow:true,//只有1个slide，swiper会失效且隐藏导航等
                <?php if(isset($layout['banner']) && !$layout['banner']->isEmpty() && count($layout['banner'])>1): ?>
                loop: true, // 循环模式选项
                <?php endif; ?>

            })
            var is_search_status = 0;
            $('.search-icon').click(function(){
                if(!is_search_status){
                    $('.search-input-box').show();
                    is_search_status = 1;
                }else{
                    window.location.href='/article/?keyword='+$('input[name="keyword"]').val()
                }

            });
        </script>

        <script>
            /*;!function(){
                var layer = layui.layer
                    ,form = layui.form;
            }();*/
        </script>
        <script>

            function msg(msg,sub_msg,jump,skin){
                var tmp = "<div class=\"tips\">\n" +
                    "            <div class=\"tips-box\">\n" +
                    "                <p class=\"main "+skin+"\">"+msg+"</p>\n" +
                    "                <p class=\"sub-main\">"+sub_msg+"</p>\n" +
                    "            </div>\n" +
                    "        </div>";
                layer.open({
                    type: 1,
                    title: false,
                    closeBtn: 0,
                    shadeClose: true,
                    time:2000,
                    content: tmp,
                    end : function() {
                        if(jump){
                            window.location.href=jump;
                        }
                    }
                });
            }

            $('#submit_form').submit(function(){
                var load;
                if(typeof(submit_saved)!="undefined"){
                    var is_through = submit_saved($(this))
                    if(is_through==false){
                        return false;
                    }
                }

                var method = $(this).attr('method');
                var url = $(this).attr('action');
                if(method == 'get'){
                    url = url+'?'+$(this).serialize()
                }
                $.ajax({
                    type : method,
                    url : url,
                    data : new FormData($(this)[0]),
                    dataType : 'json',
                    cache: false,
                    processData: false,
                    contentType: false,
                    success : function(data){

                        if(typeof(submit_success)!="undefined"){
                            submit_success(data);
                        }else{
                            msg(data.message,"数据已提交")
                        }
                    },
                    error:function(XMLHttpRequest, textStatus, errorThrown){
                        var error = XMLHttpRequest.responseText;
                        if (typeof error == 'string') {
                            error = JSON.parse(XMLHttpRequest.responseText);
                        }
                        var sub_message = error.sub_message?error.sub_message:"請確認輸入信息是否有誤";
                        msg(error.message,sub_message,'','error')

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
                return false;
            });

        </script>
        <?php echo $__env->yieldSection(); ?>
	</body>
</html>
<?php /**PATH /Users/mac-2312-r/workspace/wwwroot/纤体-減肥/heavyaway/heavyaway-v1/resources/views/home/mobile/layout.blade.php ENDPATH**/ ?>