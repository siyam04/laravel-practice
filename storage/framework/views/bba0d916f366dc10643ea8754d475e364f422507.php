<title>Add Category</title>

<?php $__env->startSection('content'); ?>

    <p>Add Category</p>

    <form action="<?php echo e(route('store.category')); ?>" method="post">
        <?php echo csrf_field(); ?>

        <input type="text" name="category_name" placeholder="category name..."><br><br>

        <input type="text" name="slug" placeholder="slug..."><br><br>

        <button type="submit" class="btn btn-danger">SUBMIT</button>
    </form>

<?php $__env->stopSection(); ?>


<?php echo $__env->make('base', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\laravelnew\resources\views/post/add_category.blade.php ENDPATH**/ ?>