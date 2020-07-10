

<?php $__env->startSection('content'); ?>
<div class="w3-row">
    <div class="w3-col l4">
        <form action="/search", method="GET">
            <?php echo csrf_field(); ?>
            <input name="name" placeholder="title">
            <input name="state" placeholder="category">
        
            
        </form>
        
     </div>
    <div class="w3-col l8">
        <table class="w3-table-all w3-section w3-striped">
            <thead>
            <tr class="w3-light-blue w3-text-indigo">
            <th>Full Name</th>
            <th>State</th>
            <th>Profession</th>
            <th>View</th>
            <th>Approve</th>
            </tr>
        </thead>
        <tbody>
            <?php $__currentLoopData = $talents; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $talent): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                <tr>
                <td><?php echo e($talent['name']); ?></td>
                <td><?php echo e($talent['state']); ?></td>
                <td><?php echo e($talent['profession']); ?></td>
                <td><div class="w3-btn w3-button w3-blue w3-small w3-round w3-hover-indigo w3-border">
                    <a href="/talents/<?php echo e($talent->id); ?>" class="w3-text-black">View</a></td>
                </tr>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
        </tbody>
        </table>
    </div>
</div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.layout', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\wamp64\www\talent\resources\views//talents/index.blade.php ENDPATH**/ ?>