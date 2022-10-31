<?php $__env->startSection('container'); ?>
    <?php if($errors->any()): ?>
    <center>
        <strong><?php echo e($errors->first()); ?></strong>
    </center>
    <?php endif; ?>

<center>
<div class="container-fluid" style="background-color: 0F141A; height: 100vh;">
    <form action="/input" method="POST" enctype="multipart/form-data">
        <?php echo csrf_field(); ?>
        <div class="container">
             <div class="form-group">
                <h5>Agent Name</h5>
                <input type="text" class="form-control" name="agent_name">
            </div>

            <div class="form-group">
                <h5>Agent Description</h5>
                <input type="text" class="form-control" name="agent_desc">
            </div>

            <div class="form-group">
                <h5>Agent Picture</h5>
                <input type="url" class="form-control" name="agent_pict">
            </div>

            <button class="btn btn-primary" type="submit">Submit</button>
        </div>
    </form>

    <a href="/">
        <button class="btn btn-secondary" type="submit">Cancel</button>
    </a>
</div>
</center>
<?php $__env->stopSection(); ?>

<style>
    .form-group h5 {
       color: white;
    }
</style>

<?php echo $__env->make('layouts.main', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\GSLC-ValorantAgents\resources\views/add.blade.php ENDPATH**/ ?>