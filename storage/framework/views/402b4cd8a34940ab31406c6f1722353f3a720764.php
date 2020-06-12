<?php $__env->startSection('content'); ?>
    <div class="container">
        <h1>
            <?php echo e($achievement->title); ?> <small><i>by</i></small>
            <a href="/profile/<?php echo e($achievement->user->id); ?>"><?php echo e($achievement->user->username); ?></a>
        </h1>
        <p><?php echo e($achievement->description); ?></p>
        <p><?php echo e($achievement->value); ?></p>

        <div>
            <a href="/comment/create" class="pb-3"><button class="btn btn-primary">Add comment</button></a>
        </div>

        <div class="pt-6">
            <div>
                <h3>User 1</h3>
                <p>You suck!!! Boooo!!!!</p>
                <p>12.06.2020<p>
            </div>
            <div>
                <h3>User 2</h3>
                <p>No u! Ha, gottem</p>
                <p>12.06.2020<p>
            </div>
            <div>
                <h3><?php echo e($achievement->user->username); ?></h3>
                <p>Guys can you like stfu?!</p>
                <p>12.06.2020<p>
            </div>
        </div>
    </div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH D:\wamp64\www\achievements\resources\views/achievements/show.blade.php ENDPATH**/ ?>