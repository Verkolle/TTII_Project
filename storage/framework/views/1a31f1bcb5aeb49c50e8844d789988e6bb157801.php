<?php $__env->startSection('content'); ?>
<div class="container">
    <div class="row">
        <div class="col-2"></div>
        <div class="col-6">

            <div class="p-3" id="username-display">
                <h1><b><?php echo e($user->username); ?></b></h1>
                <?php if (app(\Illuminate\Contracts\Auth\Access\Gate::class)->check('update', $user->profile)): ?>
                    <a href="/profile/<?php echo e($user->id); ?>/edit" class="text-md-right">#</a>
                <?php endif; ?>
            </div>

            <div class="p-3">
                <?php $__currentLoopData = $user->achievements; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $achievement): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                    <div class="flex">
                        <a href="/ach/<?php echo e($achievement->id); ?>">
                            <h3><?php echo e($achievement->title); ?></h3>
                            <p><?php echo e($achievement->description); ?></p>
                            <p><?php echo e($achievement->value); ?></p>
                        </a>
                        <a href="#">#</a>
                    </div>
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
            </div>

            <div class="p-3">
                <?php if (app(\Illuminate\Contracts\Auth\Access\Gate::class)->check('update', $user->profile)): ?>
                    <a href="/ach/create" class="justify">Add new post</a>
                <?php endif; ?>
            </div>
        </div>
        <div class="col-3">
            <div id="user_picture" class="row pb-3">
                <img src="<?php echo e($user->profile->profilePicture()); ?>" alt="" style="height:300px; max-width:400px">
            </div>
            <div id="user_bio" class="row">
                <p><?php echo e($user->profile->bio ?? ''); ?></p>
            </div>
        </div>
    </div>
</div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH D:\wamp64\www\achievements\resources\views/profiles/index.blade.php ENDPATH**/ ?>