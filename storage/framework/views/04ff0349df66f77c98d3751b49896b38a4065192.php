

<?php $__env->startSection('content'); ?>
<p class="text-lg text-center font-bold m-5">Users</p>
<table class="table-fixed rounded-t-lg m-5 w-full mx-auto bg-gray-800 text-gray-200" >
    <tr class="text-left border-b border-gray-300 text-center">
        <th class="px-4 py-3">Id</th>
        <th class="px-4 py-3">First Name</th>
        <th class="px-4 py-3">Last Name</th>
        <th class="px-4 py-3">Email</th>
        <th class="px-4 py-3">School Years</th>
        <th class="px-4 py-3">Major</th>
        <th class="px-4 py-3">User Type</th>
        <th class="px-4 py-3">Created At</th>
        <th class="px-4 py-3">Actions</th>
    </tr>
    <?php $__currentLoopData = $users; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $user): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
        <tr class="bg-gray-700 border-b border-white-600 border-b-2 text-center">
            <td class="px-4 py-3"><?php echo e($user->id); ?></td>
            <td class="px-4 py-3"><?php echo e($user->first_name); ?></td>
            <td class="px-4 py-3"><?php echo e($user->last_name); ?></td>
            <td class="px-4 py-3"><?php echo e($user->email); ?></td>
            <td class="px-4 py-3"><?php echo e($user->school_years); ?></td>
            <td class="px-4 py-3"><?php echo e($user->major); ?></td>
            <td class="px-4 py-3"><?php echo e($user->user_type); ?></td>
            <td class="px-4 py-3"><?php echo e($user->created_at); ?></td>
            <td class="px-4 py-3">
                <a href="/users/show/<?php echo e($user->id); ?>">View</a>
                <a href="/users/edit/<?php echo e($user->id); ?>">Edit</a>
                <a href="/users/delete/<?php echo e($user->id); ?>">Delete</a>
            </td>
        </tr>    
    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
</table>
<?php echo e($users->links()); ?>

<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH D:\GH Repos\cis-355-intern-project-lara\resources\views/Users/index.blade.php ENDPATH**/ ?>