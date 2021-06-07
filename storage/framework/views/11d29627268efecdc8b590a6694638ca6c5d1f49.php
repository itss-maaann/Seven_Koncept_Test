
<?php $__env->startSection('content'); ?>
<!DOCTYPE html>
<html lang="en">
<head>

  <title>Users List</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
</head>
<body>

<div class="container custom-table">
  <h2>All Users List Table</h2>            
  <table class="table">
    <thead>
      <tr>
        <th>Id</th>
        <th>Name</th>
        <th>Email</th>
        <th>Operations</th>
      </tr>
    </thead>
    <tbody>
        <?php $__currentLoopData = $Users; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $user): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
      <tr>
        <td><?php echo e($user['id']); ?></td>
        <td><?php echo e($user['name']); ?></td>
        <td><?php echo e($user['email']); ?></td>
        <td><a class="btn btn-primary"  href=<?php echo e("edit_user/".$user['id']); ?>>Edit</a>
        <a class="btn btn-danger"  href=<?php echo e("delete_user/".$user['id']); ?>>Delete</a></td>
      </tr>
      <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
    </tbody>
  </table>
  <a class="btn btn-primary" href="sign_up">Add New User</a>

</div>

</body>
</html>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\Laravel 8\Seven-Koncepts\resources\views/displayusers.blade.php ENDPATH**/ ?>