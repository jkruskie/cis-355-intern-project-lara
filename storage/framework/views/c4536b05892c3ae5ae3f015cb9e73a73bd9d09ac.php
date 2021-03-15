

<?php $__env->startSection('content'); ?>
<p class="text-lg text-center font-bold m-5">Applications</p>
<table class="table-fixed rounded-t-lg m-5 w-full mx-auto bg-gray-800 text-gray-200" >
    <tr class="text-left border-b border-gray-300 text-center">
        <th class="px-4 py-3">Company</th>
        <th class="px-4 py-3">Student</th>
        <th class="px-4 py-3">Date</th>
        <th class="px-4 py-3">Actions</th>
    </tr>
    <?php $__currentLoopData = $applications; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $app): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
        <tr class="bg-gray-700 border-b border-white-600 border-b-2 text-center">
            <td class="px-4 py-3"><?php echo e($app->internship->company_name); ?></td>
            <td class="px-4 py-3"><?php echo e($app->user->name); ?></td>
            <td class="px-4 py-3"><?php echo e($app->created_at); ?></td>
            <td class="px-4 py-3">
                <a href="/applications/show/<?php echo e($app->id); ?>">View</a>
                <a href="/applications/edit/<?php echo e($app->id); ?>">Edit</a>
                <a href="/applications/delete/<?php echo e($app->id); ?>">Delete</a>
            </td>
        </tr>    
    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
</table>
<?php echo e($applications->links()); ?>

<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH D:\GH Repos\cis-355-intern-project-lara\resources\views/Applications/index.blade.php ENDPATH**/ ?>