<?php $__env->startSection('content'); ?>
<div class="container">
    <div class="row">
        <div class="col-2"></div>
        <div class="col-6">
            <div class="p-3" id="username-display"><h1><b><?php echo e($user->username); ?></b></h1></div>
            <div class="p-3">
                <h3>Advancement #1</h3>
                <p>This is the description of the advancement...</p>
                <p>12</p>
            </div>
            <div class="p-3">
                <h3>Advancement #2</h3>
                <p>This is the description of the advancement...</p>
                <p>0</p>
            </div>
            <div class="p-3">
                <h3>Advancement #3</h3>
                <p>This is the description of the advancement...</p>
                <p>5</p>
            </div>
            <div class="p-3">
                <a href="..." class="justify">Add new post</a>
            </div>
        </div>
        <div class="col-3">
            <div id="user_picture" class="row pb-3">
                <img src="https://static.zerochan.net/Saber.%28Astolfo%29.full.2773948.jpg" alt="" style="height:300px">
            </div>
            <div id="user_bio" class="row">
                <p><?php echo e($user->profile->bio); ?></p>
            </div>
        </div>
    </div>
</div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH D:\wamp64\www\achievements\resources\views/index.blade.php ENDPATH**/ ?>
