
<?php $__env->startSection('title', 'Bienvenido'); ?>

<?php $__env->startSection('header'); ?>
##parent-placeholder-594fd1615a341c77829e83ed988f137e1ba96231##
<?php $__env->stopSection(); ?>

<?php $__env->startSection('navbar'); ?>
##parent-placeholder-c63e3c1cfa2ff651ad4cfadea3e21265ffcf8ca3##
Barra de navegacion
<?php $__env->stopSection(); ?>
<?php $__env->startSection('contenido'); ?>
<h1 class="h1">Pintores favoritos</h1>
    <h3 class="h3i"> Pablo Picasso</h3>
    <h3 class="h3i">Vincent van Gogh</h3>
    <h3 class="h3i">Claude Monet</h3>
    <h3 class="h3i">Leonardo Da Vinci</h3>
    <br>
<center><img src="/images/sticker.png" alt="20%" width="20%"></center>
<br>
<?php $__env->stopSection(); ?>
<?php $__env->startSection('footer'); ?>

<?php echo $__env->make('layouts.master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\laragon\www\pintores\resources\views/index.blade.php ENDPATH**/ ?>