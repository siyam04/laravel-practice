<title>Write Post</title>


<?php $__env->startSection('content'); ?>

    <a href="<?php echo e(route('add.category')); ?>" class="btn btn-success">Add Category</a>
    <a href="" class="btn btn-primary">All Category</a>

    <br><br>
    <p>Add post</p>
    <form action="#" method="post">
        <?php echo csrf_field(); ?>

        <input type="text" name="title" placeholder="title..."><br><br>

        <select name="category_id">
            <option>fk</option>
            <option>fk</option>
        </select><br><br>

        <input type="text" name="details" placeholder="details..."><br><br>

        <input type="file" name="image"><br><br>

        <button type="submit" class="btn btn-warning">SUBMIT</button>
    </form>

<?php $__env->stopSection(); ?>

<?php echo $__env->make('base', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\laravelnew\resources\views/post/write_post.blade.php ENDPATH**/ ?>