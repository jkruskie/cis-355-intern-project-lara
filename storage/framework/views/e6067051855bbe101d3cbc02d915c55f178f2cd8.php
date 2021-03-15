

<?php $__env->startSection('content'); ?>
<p class="text-lg text-center font-bold m-5">Internships</p>
<?php if(Session::has('message')): ?>
    <span class="flex items-center font-medium tracking-wide text-red-500 text-md mt-1 ml-1 mb-1 display-table margin-0-auto">
    <?php echo e(Session::get('message')); ?>

    </span>
<?php endif; ?>
<table class="table-fixed rounded-t-lg m-5 w-full mx-auto bg-gray-800 text-gray-200" >
    <tr class="text-left border-b border-gray-300 text-center">
        <th class="px-4 py-3">Company</th>
        <th class="px-4 py-3">Location</th>
        <th class="px-4 py-3">Job Position</th>
        <th class="px-4 py-3">Actions</th>
    </tr>
    <?php $__currentLoopData = $internships; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $internship): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
        <tr class="bg-gray-700 border-b border-white-600 border-b-2 text-center">
            <td class="px-4 py-3"><?php echo e($internship->company_name); ?></td>
            <td class="px-4 py-3"><?php echo e($internship->company_location); ?></td>
            <td class="px-4 py-3"><?php echo e($internship->job_type); ?></td>
            <?php if(Auth::user()->user_type == 0): ?>
                <td class="px-4 py-3"><a href="/applications/create/<?php echo e($internship->id); ?>">Apply</a></td>
            <?php else: ?>
            <td class="px-4 py-3">
                <a href="/internships/show/<?php echo e($internship->id); ?>">View</a>
                <a href="/internships/edit/<?php echo e($internship->id); ?>">Edit</a>
                <a href="/internships/delete/<?php echo e($internship->id); ?>">Delete</a>
            </td>
            <?php endif; ?>
        </tr>    
    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
</table>

<?php if(\Auth::user()->user_type == 1): ?>
    <a href="/internships/create" class="text-center text-center border-t block no-underline hover:underline py-2 text-grey-darkest hover:text-black md:border-none md:p-0">
        <button class="py-2 rounded-lg border-2 border-red-500 px-4 bg-white text-black font-semibold rounded-lg shadow-md hover:bg-red focus:outline-none focus:ring-2 focus:ring-red-500 focus:ring-opacity-75">
        NEW INTERNSHIP
        </button>
    </a>
<?php endif; ?>
<?php echo e($internships->links()); ?>

<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH D:\GH Repos\cis-355-intern-project-lara\resources\views/Internships/index.blade.php ENDPATH**/ ?>