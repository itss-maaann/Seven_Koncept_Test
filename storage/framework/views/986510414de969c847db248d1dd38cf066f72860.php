<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Seven Koncept</title>

    <!-- Latest compiled and minified CSS -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">

<!-- Jquery -->
<script src="https://code.jquery.com/jquery-3.5.1.min.js" integrity="sha256-9/aliU8dGd2tb6OSsuzixeV4y/faTqgFtohetphbbj0=" crossorigin="anonymous"></script>

<!-- Latest compiled and minified JavaScript -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>

</head>
<body>
    <?php echo e(View::make('header')); ?>

    <?php echo $__env->yieldContent('content'); ?>
    <?php echo e(View::make('footer')); ?>

    
</body>

<style>
    .custom-login
    {
        height: 500px;
        padding-top: 70px;
        padding-bottom: 500px;
    }
    .custom-profile {
        height: 10px;
        padding-top: 10px;
        padding-bottom: 500px;
    }  
    .custom-table{
        height: 10px;
        padding-top: 10px;
        padding-bottom: 500px;
    }  
</style>

<?php
/*<script>
    $(document).ready(function()
    {
        $("button").click(function()
            {
                alert("All set")
            })
    })
</script>*/
?>

</html><?php /**PATH C:\xampp\htdocs\Laravel 8\Seven-Koncepts\resources\views/master.blade.php ENDPATH**/ ?>