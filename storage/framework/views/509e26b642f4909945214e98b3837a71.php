<?php $__env->startSection('title', '聯繫我們'); ?>
<?php $__env->startSection('style'); ?>
    <?php echo \Illuminate\View\Factory::parentPlaceholder('style'); ?>
    <link rel="stylesheet" type="text/css" href="<?php echo e(asset('static/css/order_query.css')); ?>"/>
<?php $__env->stopSection(); ?>

<?php $__env->startSection('content'); ?>
    <div class="sub-nav">
        <p><a href="/">首页</a><span class="dayu">></span><span class="hue">聯繫我們</span></p>
    </div>
		<div class="box-content">

            <form action="" method="post" id="submit_form">
                <?php echo e(csrf_field()); ?>

                <div class="box-query">
                    <div class="form-row">
                        <label>暱稱:</label>
                        <input type="text" name="nickname" id="" value="" placeholder="請輸入暱稱" />
                    </div>

                    <div class="form-row">
                        <label>郵箱:</label>
                        <input type="email" style="ime-mode:disabled" lang="en" autocapitalize="on" name="email" id=""  value="" placeholder="請輸入郵箱" />
                    </div>

                    <div class="form-row">
                        <textarea name="content" rows="" cols="" placeholder="請輸入您的留言或提出意見,我們將盡快回復!"></textarea>
                    </div>

                    <div class="form-row text-align-center">
                        <button type="submit">確認提交</button>
                    </div>


                </div>
            </form>

		</div>



<?php $__env->startSection('script'); ?>
    <?php echo \Illuminate\View\Factory::parentPlaceholder('script'); ?>
    <script>
        var submit_success = function(){
            msg("提交成功","客服會儘快反饋，請耐心等候","<?php echo e(url('contact')); ?>/")
        }
        var submit_saved = function(){
            var nickname = $('input[name="nickname"]').val();
            var email = $('input[name="email"]').val();
            var content = $('textarea[name="content"]').val();
            if(!nickname){
                layer.msg("請填寫暱稱");return false;
            }
            if(!email){
                layer.msg("請填寫電子郵箱");return false;
            }
            var email_reg = /^([a-zA-Z0-9]+[_|\_|\.]?)*[a-zA-Z0-9]+@([a-zA-Z0-9]+[_|\_|\.]?)*[a-zA-Z0-9]+\.[a-zA-Z]{2,3}$/;
            if (!email_reg.test(email)) {
                layer.msg("請填寫正確的電子郵箱");return false;
            }
            if(!content){
                layer.msg("請填寫留言內容");return false;
            }

        }
    </script>
<?php $__env->stopSection(); ?>


<?php $__env->stopSection(); ?>

<?php echo $__env->make('home.mobile.layout', array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?><?php /**PATH /Users/mac-2312-r/workspace/wwwroot/纤体-減肥/heavyaway/heavyaway-v1/resources/views/home/mobile/contact.blade.php ENDPATH**/ ?>