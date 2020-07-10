

<?php $__env->startSection('content'); ?>
<div class="w3-row">
    <div class="w3-col l1">&nbsp;</div>
        <div class="w3-col l10">
        <div class="w3-container w3-center w3-section">
            <img src="<?php echo e(asset('uploads/avatars/'.$talent->profile)); ?>" name="profile" id="profile" width="300px" alt=""> <br> <br>
            <h1> <?php echo e($talent->name); ?></h1>
        </div>
        <div class="w3-row w3-center">
            <div class="w3-col l6 w3-input w3-border w3-round w3-margin-right"> <h4>Address: <br> <?php echo e($talent->address); ?></h4> </div>
            <div class="w3-col l5 w3-input w3-border w3-round"> <h4>Phone Number: <br> <?php echo e($talent->phone); ?></h4> </div>
        </div>
        <div class="w3-row w3-section w3-center">
            <div class="w3-col l6 w3-input w3-border w3-round w3-margin-right"> <h4>State: <br> <?php echo e($talent->state); ?></h4> </div>
            <div class="w3-col l5 w3-input w3-border w3-round"> <h4>Profession: <br> <?php echo e($talent->profession); ?></h4> </div>
        </div> <hr class="w3-indigo">
        <h3 class="w3-text-indigo w3-center">Previous Work (If Any)</h3>
        <div class="w3-row">
            <?php if(empty($talent->project1)): ?>
                <h4 class="w3-red">No Project Done</h4>
            <?php else: ?>
                <h4 class=" w3-input w3-border w3-round ">Project Name: <?php echo e($talent->project1); ?></h4> <br>
            <?php endif; ?>
            
                <h4 class="w3-input w3-border w3-round">Project Location: <?php echo e($talent->location1); ?></h4>
                <h4 class="w3-input w3-border w3-round w3-section">Year of the Project: <?php echo e($talent->year1); ?></h4>
                <h4>Project Picture: <br> <img src="<?php echo e(asset('uploads/avatars/'.$talent->image1)); ?>" width="600px" height="300" alt=""></h4>
        </div> <br> <br>
        <div class="w3-row l4">
            <h4 class=" w3-input w3-border w3-round ">Project Name: <?php echo e($talent->project2); ?></h4> <br>
            <h4 class="w3-input w3-border w3-round">Project Location: <?php echo e($talent->location2); ?></h4>
            <h4 class="w3-input w3-border w3-round w3-section">Year of the Project: <?php echo e($talent->year2); ?></h4>
            <h4>Project Picture: <br> <img src="<?php echo e(asset('uploads/avatars/'.$talent->image2)); ?>" width="600px" height="300" alt=""></h4>
        </div>
        <div class="w3-row l4">
            <h4 class=" w3-input w3-border w3-round ">Project Name: <?php echo e($talent->project3); ?></h4> <br>
            <h4 class="w3-input w3-border w3-round">Project Location: <?php echo e($talent->location3); ?></h4>
            <h4 class="w3-input w3-border w3-round w3-section">Year of the Project: <?php echo e($talent->year3); ?></h4>
            <h4>Project Picture: <br> <img src="<?php echo e(asset('uploads/avatars/'.$talent->image3)); ?>" width="600px" height="300" alt=""></h4>
        </div> <br> <br>
    </div>
    <div class="w3-col l1">&nbsp;</div>
</div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.layout', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\wamp64\www\talent\resources\views/talents/show.blade.php ENDPATH**/ ?>