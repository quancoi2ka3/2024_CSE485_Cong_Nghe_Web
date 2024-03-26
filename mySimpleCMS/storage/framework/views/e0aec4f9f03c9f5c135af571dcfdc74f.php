
<?php $__env->startSection('main'); ?>

<h1 class="text-center">Articles Home</h1>
<a href="<?php echo e(route('articles.create')); ?>"class="btn btn-success">Add</a>
<table class="table">
  <thead>
    <tr>
      <th scope="col">id</th>
      <th scope="col">Title</th>
      <th scope="col">Content</th>
      <th scope="col">Author</th>
      <th scope="col" colspan="3">Action</th>
    </tr>
  </thead>
  <tbody>
    <?php $__currentLoopData = $articles; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $article): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
    <tr>
      <th scope="row"><?php echo e($article->id); ?></th>
      <td><?php echo e($article->title); ?></td>
      <td><?php echo e($article->content); ?></td>
      <td><?php echo e($article->author); ?></td>
      <td><a href="<?php echo e(route('articles.edit',$article->id)); ?>"><i class="fa-solid fa-pen-to-square"></i></a></td>
      <td><a href=""><i class="fa-solid fa-eye"></i></a></td>
      <td>
    <a href="<?php echo e(route('articles.destroy', $article)); ?>" 
       onclick="event.preventDefault(); if(confirm('Bạn có chắc chắn muốn xóa bài viết này không?')) { document.getElementById('delete-article-<?php echo e($article->id); ?>').submit(); }">
        <i class="fa-solid fa-trash"></i>
    </a>

    <form id="delete-article-<?php echo e($article->id); ?>" 
          action="<?php echo e(route('articles.destroy', $article)); ?>" 
          method="POST" 
          style="display: none;">
        <?php echo csrf_field(); ?>
        <?php echo method_field('DELETE'); ?>
    </form>
</td>
    </tr>
    
    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
  </tbody>
</table>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.layout', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\Users\ADMIN\mySimpleCMS\resources\views/articles/index.blade.php ENDPATH**/ ?>