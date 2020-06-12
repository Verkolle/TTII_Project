<?php $__env->startSection('content'); ?>
    <div class="container">
        <form action="/profile/<?php echo e($user->id); ?>" enctype="multipart/form-data" method="post">
            <?php echo csrf_field(); ?>
            <?php echo method_field('PATCH'); ?>

            <div>
                <h1 class="text-md-center pb-3">Edit your profile</h1>
            </div>



            <div class="form-group row">
                <label for="bio" class="col-md-4 col-form-label text-md-right"><?php echo e(__('Biography')); ?></label>

                <div class="col-md-6">
                    <input id="bio" type="text"
                           class="form-control <?php $__errorArgs = ['bio'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> is-invalid <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>"
                           name="bio"
                           value="<?php echo e(old('bio') ?? $user->profile->bio); ?>"
                           required
                           autocomplete="bio" autofocus>

                    <?php $__errorArgs = ['bio'];
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

            <div class="form-group row">
                <label for="profile_pic" class="col-md-4 col-form-label text-md-right"><?php echo e(__('Profile picture')); ?></label>
                <div class="col-md-6">
                    <input id="profile_pic" type="file"
                           value="<?php echo e(old('profile_pic') ?? $user->profile->profile_pic); ?>"
                           class="form-control-file <?php $__errorArgs = ['profile_pic'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> is-invalid <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>"
                           name="profile_pic">

                    <?php $__errorArgs = ['profile_pic'];
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
                    <button class="btn btn-primary" >Update user data</button>
                    <a href="<?php echo e(url()->previous()); ?>"><button type="button" class="btn" >Cancel</button></a>
                </div>
            </div>
        </form>
    </div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH D:\wamp64\www\achievements\resources\views/profiles/edit.blade.php ENDPATH**/ ?>