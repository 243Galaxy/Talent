

<?php $__env->startSection('content'); ?>
<div class="w3-row">
    <div class="w3-col l4">
        </div>
    <div class="w3-col l8">
        <p class="mssg w3-large w3-text-indigo w3-center"> <?php echo e(session('mssg')); ?> </p>
        <table class="w3-table-all w3-section w3-striped w3-margin">
            <thead>
            <tr class="w3-light-blue w3-text-indigo">
            <th>Full Name</th>
            <th>State</th>
            <th>Trade</th>
            <th>View</th>
            <th>Edit</th>
            <th>Disapprove</th>
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
                    <a href="/talents/<?php echo e($talent->id); ?>" class="w3-text-black">View</a></div></td>
                   <td><a href="/talents/<?php echo e($talent->id); ?>/edit" class="w3-button w3-small w3-btn w3-round w3-yellow">Edit</a></td> 
                <td>
                    <!-- <form action="/talents/ <?php echo e($talent->id); ?>" class="delete_form" method="POST">
                        <?php echo csrf_field(); ?>
                        <?php echo method_field('DELETE'); ?>
                        <button type="submit" class="w3-red w3-btn w3-button w3-round">Reject</button> <br><br>
                    </form> -->
                </td>
                <td><form action="/talents/ <?php echo e($talent->id); ?>" method="POST">
                    <?php echo csrf_field(); ?>
                    
                    <button type="submit" class="approve_user">Approve</button>
                </td>
                </tr>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
        </tbody>
        </table>
    </div>
</div>

<script>
    $(document).ready(function(){
        $('.approve_user').on('submit', function(){
            if(confirm("Are you sure you want to Approve it?"))
            {
                return true;
            }
            else
            {
                return false;
            }
        });
    });

</script>

<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.layout', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\wamp64\www\talent\resources\views/talents/index.blade.php ENDPATH**/ ?>