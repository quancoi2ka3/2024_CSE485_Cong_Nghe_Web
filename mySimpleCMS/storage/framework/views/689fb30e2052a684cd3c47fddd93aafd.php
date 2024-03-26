
<?php $__env->startSection('main'); ?>
<h1 class="text-center">Edit Article</h1>
<form method="post" action="<?php echo e(route('articles.update',$article->id)); ?>">
  <?php echo csrf_field(); ?>
  <?php echo method_field('PUT'); ?>
  <div class="mb-3">
    <label for="exampleInputEmail1" class="form-label">ID</label>
    <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" name="id" required value="<?php echo e($article->id); ?>">
  </div>
  <div class="mb-3">
  <label for="exampleInputEmail1" class="form-label">Title</label>
    <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" name="title" required value="<?php echo e($article->title); ?>">
  </div>
  <div class="mb-3">
  <label for="exampleInputEmail1" class="form-label">Content</label>
    <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" name="content" required value="<?php echo e($article->content); ?>">
  </div>
  <div class="mb-3">
  <label for="exampleInputEmail1" class="form-label">Author</label>
    <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" name="author" required value="<?php echo e($article->author); ?>">
  </div>
  <button type="submit" class="btn btn-primary">Submit</button>
</form>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.layout', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\Users\ADMIN\mySimpleCMS\resources\views/articles/edit.blade.php ENDPATH**/ ?>