
<?php $__env->startSection('content'); ?>

<div class="container custom-profile">
    <div class="row">
        <div class="col-sm-offset-1">
<h1><b>Welcome to your Profile</h1>

<h2><b>Hello, <?php echo e(Session::get('user')['name']); ?></h2>
<br><br>

<a class="btn btn-primary" href="/users">View All Users</a>
        </div>
    </div>
</div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\Laravel 8\Seven-Koncepts\resources\views/profile.blade.php ENDPATH**/ ?>