<?php $__env->startSection('container'); ?>
<div class="d-flex justify-content-center" style = "background-color: 0F141A">
    <div class="container-fluid row justify-content-center my-3">
        <?php $__currentLoopData = $agents; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $agent): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
            <div class="container col-lg-3 py-2">
                <div class="card" style="background-color: 7399BF">
                    <img src="<?php echo e($agent->agent_pict); ?>" class="card-img-top mt-3" style="float: center; height: 300px;object-fit: contain;" alt="<?php echo e($agent->agent_name); ?>">

                    <div class="card-body" style = "height: auto">
                        <h4 class="fw-normal text-center text-bold"><?php echo e($agent->agent_name); ?></h4>
                        <p class="card-text fw-bold mt-3" style = "margin-top: -5px;"><?php echo e(Str ::limit($agent->agent_desc, 180)); ?></p>
                    </div>
                </div>
            </div>
        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
    </div>
</div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.main', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\GSLC-ValorantAgents\resources\views/agent1.blade.php ENDPATH**/ ?>