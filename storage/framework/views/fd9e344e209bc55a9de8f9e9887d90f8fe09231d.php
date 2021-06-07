
<?php $__env->startSection('content'); ?>
<div class="container custom-login">
    <div class="row">
        <div class="col-sm-4 col-sm-offset-4">
<h1><b>Update Your Record</b></h1>

<form action="/edit_user" method="POST">
    <div class="form-group">
<?php echo csrf_field(); ?>

<input type="hidden" name="id" value=<?php echo e($edit['id']); ?> />
<label for="UpdateUserName">Edit Name</label>
<br>
<input type="text" name="name"  />
<br>
<span style="color: red"><?php $__errorArgs = ['name'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?><?php echo e($message); ?><?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?></span>
<br>
<label for="UpdateEmail1Address">Edit Email</label>
<br>
<input type="text" name="email" />
<br>
<span style="color: red"><?php $__errorArgs = ['email'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?><?php echo e($message); ?><?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?></span>
<br>
<label for="UpdatePassword">Edit Password</label>
<br>
<input type="password" name="password" />
<br>
<span style="color: red"><?php $__errorArgs = ['password'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?><?php echo e($message); ?><?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?></span>
<br>
    </div>
<button class="btn btn-primary" type="submit">Update Record</button>
</form>
</div>
</div>
</div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\Laravel 8\Seven-Koncepts\resources\views/edit.blade.php ENDPATH**/ ?>