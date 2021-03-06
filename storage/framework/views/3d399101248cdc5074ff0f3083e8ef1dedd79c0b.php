<?php $__env->startSection('content'); ?>
    <div class="container">
        <div>
            <h1 class="text-md-center pb-3">Add new comment</h1>
        </div>
        <form action="/comment" enctype="multipart/form-data" method="post">
            <?php echo csrf_field(); ?>
            <div class="form-group row">
                <label for="content" class="col-md-4 col-form-label text-md-right"><?php echo e(__('Your comment')); ?></label>

                <div class="col-md-6">
                    <input id="content" type="text"
                           class="form-control <?php $__errorArgs = ['content'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> is-invalid <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>"
                           name="content" value="<?php echo e(old('content')); ?>" required
                           autocomplete="content" autofocus>

                    <?php $__errorArgs = ['content'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                    <span class="invalid-feedback" role="alert">
                        <strong><?php echo e($message); ?></strong>
                    </span>
                    <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
                </div>
            </div>

            <div class="row">
                <div class="col-md-4"></div>
                <div class="col-md-6">
                    <button class="btn btn-primary" >Add new</button>
                    <a href="<?php echo e(url()->previous()); ?>"><button type="button" class="btn" >Cancel</button></a>
                </div>
            </div>
        </form>
    </div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH D:\wamp64\www\achievements\resources\views/comments/create.blade.php ENDPATH**/ ?>