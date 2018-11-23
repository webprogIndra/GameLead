<!DOCTYPE html>
<html>
<head>
    <title>My App - <?php echo $__env->yieldContent('title'); ?></title>
    <link rel="stylesheet" type="text/css" href="css/style.css">
</head>
<body>

<div class="nav">
    <div>
        
        <a href=<?php echo e(route('showHome')); ?>>Home</a>
    </div>
    <div>
        <a href=<?php echo e(route('showProduct')); ?>>Product</a>
    </div>
</div>

<?php echo $__env->yieldContent('container'); ?>

<div class="footer">
    <p>Binus &copy; 2018</p>
</div>


</body>
</html>