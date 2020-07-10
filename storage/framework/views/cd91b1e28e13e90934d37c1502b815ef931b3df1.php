           
<?php $__env->startSection('content'); ?>
    <div class="w3-row w3-section w3-center">
        <a href="<?php echo e(url('talents/create')); ?>" class="w3-btn w3-round w3-light-blue w3-margin-left">Register</a>
        <a href="<?php echo e(url('/talents')); ?>" class="w3-btn w3-round w3-light-blue w3-margin-left">List</a>
        <a href="" class="w3-btn w3-round w3-light-blue w3-margin-left">Contact Us</a>
    </div>
    <div class="w3-row">
       <p class="mssg w3-large w3-text-indigo w3-center"> <?php echo e(session('mssg')); ?> </p>
        <div class="w3-col l6 w3-padding">
            <div class="w3-container w3-light-blue">
                Gallery Gallery Gallery Gallery Gallery Gallery Gallery Gallery Gallery Gallery Gallery Gallery Gallery Gallery Gallery Gallery Gallery Gallery Gallery Gallery Gallery Gallery Gallery Gallery Gallery Gallery Gallery Gallery Gallery Gallery Gallery Gallery Gallery Gallery Gallery Gallery Gallery Gallery Gallery Gallery Gallery Gallery Gallery Gallery Gallery Gallery Gallery Gallery Gallery Gallery Gallery Gallery Gallery Gallery Gallery Gallery Gallery Gallery Gallery Gallery Gallery Gallery Gallery Gallery Gallery Gallery Gallery Gallery Gallery Gallery Gallery Gallery Gallery Gallery Gallery Gallery Gallery Gallery Gallery Gallery Gallery Gallery Gallery Gallery
            </div>
        </div>
        <div class="w3-col l6 w3-padding w3-right">
            <div class="w3-container w3-light-blue">
               Gallery Gallery Gallery Gallery Gallery Gallery Gallery Gallery Gallery Gallery Gallery Gallery Gallery Gallery Gallery Gallery Gallery Gallery Gallery Gallery Gallery Gallery Gallery Gallery Gallery Gallery Gallery Gallery Gallery Gallery Gallery Gallery Gallery Gallery Gallery Gallery Gallery Gallery Gallery Gallery Gallery Gallery Gallery Gallery Gallery Gallery Gallery Gallery Gallery Gallery Gallery Gallery Gallery Gallery Gallery Gallery Gallery Gallery Gallery Gallery Gallery Gallery Gallery Gallery Gallery Gallery Gallery Gallery Gallery Gallery Gallery Gallery Gallery Gallery Gallery Gallery Gallery Gallery Gallery Gallery Gallery Gallery Gallery Gallery
            </div>
        </div>
    </div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.layout', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\wamp64\www\talents\resources\views/welcome.blade.php ENDPATH**/ ?>