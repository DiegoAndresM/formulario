
<?php $__env->startSection('title', 'Bienvenido'); ?>

<?php $__env->startSection('header'); ?>
##parent-placeholder-594fd1615a341c77829e83ed988f137e1ba96231##
<?php $__env->stopSection(); ?>

<?php $__env->startSection('navbar'); ?>
##parent-placeholder-c63e3c1cfa2ff651ad4cfadea3e21265ffcf8ca3##
<?php $__env->stopSection(); ?>
<?php $__env->startSection('contenido'); ?>
    <h1>Login</h1>
    <br>
    <form action="<?php echo e(action('Pintores@login')); ?>" method="post">
    <?php echo csrf_field(); ?>
    <label for= "user">User</label>
    <input type="text" name="user"> <br>

    <label for= "password">password</label>
    <input type="password" name="password"> <br>

    <input type= "submit" value= "Submit">
</form>
<?php $__env->stopSection(); ?>
<?php $__env->startSection('footer'); ?>

<?php echo $__env->make('layouts.master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\laragon\www\pintores\resources\views/login.blade.php ENDPATH**/ ?>