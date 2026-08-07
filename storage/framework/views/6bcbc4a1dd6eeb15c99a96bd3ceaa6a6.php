<?php $__env->startSection('style'); ?>
    <?php echo \Illuminate\View\Factory::parentPlaceholder('style'); ?>
    <link rel="stylesheet" type="text/css" href="<?php echo e(asset('static/css/acticle.css')); ?>"/>
    <link rel="stylesheet" type="text/css" href="<?php echo e(asset('static/css/page.css')); ?>"/>
<?php $__env->stopSection(); ?>

<?php $__env->startSection('content'); ?>

    <div class="sub-nav">
        <p><a href="/">首页</a><span class="dayu">></span><span class="hue">瘦身資訊</span></p>
    </div>
		<div class="box-content">



			<div class="related">
                <?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><!--[if BLOCK]><![endif]--><?php endif; ?><?php $__currentLoopData = $article; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                    <div class="news">
                        <div class="left">
                            <p><img src="<?php echo e(asset('uploads/'.$item->img)); ?>" alt="<?php echo e($item->img_alt); ?>"></p>

                        </div>
                        <div class="right">
                            <p class="p-title"><a href="<?php echo e(url('article/'.$item->id)); ?>"><?php echo e($item->title); ?></a></p>
                            <p  class="p-sub-title">
                                <?php echo e($item->intro); ?>

                            </p>
                            <div class="button">
                                <a href="<?php echo e(url('article/'.$item->id)); ?>"><button type="button">閱讀全文</button></a>
                            </div>
                            <div class="clearfix"></div>
                        </div>
                        <div class="clearfix"></div>

                    </div>
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?><?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><!--[if ENDBLOCK]><![endif]--><?php endif; ?>



			</div>


            <div class="pagination-box"><?php echo e($article->links()); ?></div>
		</div>



<?php $__env->startSection('script'); ?>
    <?php echo \Illuminate\View\Factory::parentPlaceholder('script'); ?>
    <script>
        if(document.documentElement.clientWidth < 960){
            var page = 1;
            var last_page = <?php echo e($article->lastPage()); ?>;
            var scroll = 1;
            function upCallback(page){
                $('.box-content').append('<div class="bottom-loading">正在加载...</div>')
                scroll = 0;
                $.ajax({
                    url:"<?php echo e(url('article')); ?>?page="+page,
                    method:"get",
                    dataType:'json',
                    success:function(data){
                        var tmp;
                        last_page = data.last_page;
                        for(var i = 0;i<data.data.length;i++){
                            tmp = '<div class="news"><div class="left"><p><img src="/uploads/'+data.data[i].img+'" alt=""></p></div><div class="right"><p class="p-title">'+data.data[i].title+'</p><p  class="p-sub-title"></p><div class="button"><a href="/article/"'+data.data[i].id+'"><button type="button">閱讀全文</button></a></div><div class="clearfix"></div></div><div class="clearfix"></div></div>';
                            $('.related').append(tmp);
                        }
                        $('.bottom-loading').remove();
                        scroll = 1;
                    }
                });
            }

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
        }
    </script>
<?php $__env->stopSection(); ?>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('home.mobile.layout', array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?><?php /**PATH /Users/mac-2312-r/workspace/wwwroot/纤体-減肥/heavyaway/heavyaway-v1/resources/views/home/mobile/article.blade.php ENDPATH**/ ?>