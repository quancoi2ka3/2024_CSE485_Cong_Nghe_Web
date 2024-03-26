
<?php $__env->startSection('main'); ?>
<?php if(session('success')): ?>
    <div class="alert alert-success">
        <?php echo e(session('success')); ?>

    </div>
<?php elseif(session('edit success')): ?>
<div class="alert alert-success">
        <?php echo e(session('edit success')); ?>

    </div>
<?php endif; ?>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.layout', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\Users\ADMIN\mySimpleCMS\resources\views/articles/show.blade.php ENDPATH**/ ?>