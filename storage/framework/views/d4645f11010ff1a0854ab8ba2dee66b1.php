<?php $__env->startSection('title', '常見問題'); ?>
<?php $__env->startSection('style'); ?>
    <?php echo \Illuminate\View\Factory::parentPlaceholder('style'); ?>
    <link rel="stylesheet" type="text/css" href="<?php echo e(asset('static/css/question.css')); ?>"/>
    <link rel="stylesheet" type="text/css" href="<?php echo e(asset('static/css/page.css')); ?>"/>
<?php $__env->stopSection(); ?>

<?php $__env->startSection('content'); ?>

    <div class="sub-nav">
        <p><a href="/">首页</a><span class="dayu">></span><span class="hue">常見問題</span></p>
    </div>
		<div class="box-content">



			<div class="question-box">
                <div class="question-title">
                    <div class="suspension-left">
                        <div class="line"><div class="dot"></div></div>
                    </div>
                    <div>
                        <p class="p1">FAQ</p>
                        <p class="p2">常見問題</p>
                    </div>
                    <div class="suspension-right"><div class="line"><div class="dot"></div></div></div>
                </div>

                <div class="question-list">

                    <?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><!--[if BLOCK]><![endif]--><?php endif; ?><?php $__currentLoopData = $data; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                        <div class="item">
                            <div class="ask"  onclick="window.location.href='<?php echo e(url('question/'.$item->id)); ?>'">
                                <p class="p1">Q : <?php echo e($item->title); ?></p>
                                <p class="p2">></p>
                                <div class="clearfix"></div>
                            </div>
                            <div class="answer">

                                <p style="    padding-left: 0.5rem;text-indent: -0.44rem;">
                                    <span class="span1">A : </span>
                                    <span class="span2"><?php echo \Illuminate\Support\Str::limit(strip_tags($item->answer),75 ); ?></span>
                                </p>
                            </div>
                        </div>

                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?><?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><!--[if ENDBLOCK]><![endif]--><?php endif; ?>



                </div>


			</div>



            <div class="pagination-box">
                <?php echo e($data->links()); ?>

                <div class="clearfix"></div>
            </div>

		</div>
    
<?php $__env->stopSection(); ?>

<?php echo $__env->make('home.mobile.layout', array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?><?php /**PATH /Users/mac-2312-r/workspace/wwwroot/纤体-減肥/heavyaway/heavyaway-v1/resources/views/home/mobile/question.blade.php ENDPATH**/ ?>