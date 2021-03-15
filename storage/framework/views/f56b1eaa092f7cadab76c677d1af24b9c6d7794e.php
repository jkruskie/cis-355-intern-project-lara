
<?php $__env->startSection('content'); ?>
<div>
<p class="text-lg text-center font-bold m-5">Show Internship</p>
    <div class="mt-5 md:mt-0 md:col-span-2">
        <div class="rounded-t-lg m-5 w-full mx-auto bg-gray-800 text-gray-200">
            <div class="rounded-t-lg m-5 w-full mx-auto bg-gray-700 text-gray-200">
                <div class="text-center">
                    <div class="">
                        <label for="company_name" class="block text-sm font-medium text-white pt-4">
                        Company Name
                        </label>
                        <div class="mb-4 flex rounded-md shadow-sm">
                            <input type="text" name="company_name" id="company_name" value="<?php echo e($internship->company_name); ?>" class="margin-0-auto text-black p-1">
                        </div>
                    </div>
                </div>
                <div class="text-center">
                    <div class="">
                        <label for="company_location" class="block text-sm font-medium text-white">
                        Company Location
                        </label>
                        <div class="mb-4 flex rounded-md shadow-sm">
                            <input type="text" name="company_location" id="company_location" value="<?php echo e($internship->company_location); ?>" class="margin-0-auto text-black p-1">
                        </div>
                    </div>
                </div>
                <div class="text-center">
                    <div class="">
                        <label for="job_type" class="block text-sm font-medium text-white">
                        Job Type
                        </label>
                        <div class="mb-4 flex rounded-md shadow-sm">
                            <input type="text" name="job_type" id="job_type" value="<?php echo e($internship->job_type); ?>" class="margin-0-auto text-black p-1">
                        </div>
                    </div>
                </div>
                <?php if($internship->pdf_url): ?>
                <div class="px-4 py-3 bg-gray-50 text-right sm:px-6 pb-4 text-center">
                    <label for="job_type" class="block text-sm font-medium text-white display-table margin-0-auto pb-1">
                        Job Description
                        </label>
                    <a target="_blank" href="/pdf/<?php echo e($internship->pdf_url); ?>">
                        <button type="button" class="inline-flex justify-center py-2 px-4 border border-transparent shadow-sm text-sm font-medium rounded-md text-white bg-indigo-600 hover:bg-indigo-700 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500 margin-0-auto text-black p-1 display-table">
                        Download
                        </button>
                    </a>
                </div>
            <?php endif; ?>
            </div>
        </div>
    </div>
</div>

<p class="text-lg text-center font-bold m-5">Applications</p>
<table class="table-fixed rounded-t-lg m-5 w-full mx-auto bg-gray-800 text-gray-200" >
    <tr class="text-left border-b border-gray-300 text-center">
        <th class="px-4 py-3">Student</th>
        <th class="px-4 py-3">Date</th>
        <th class="px-4 py-3">Actions</th>
    </tr>
    <?php $__currentLoopData = $internship->applications; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $app): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
        <tr class="bg-gray-700 border-b border-white-600 border-b-2 text-center">
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
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH D:\GH Repos\cis-355-intern-project-lara\resources\views/Internships/show.blade.php ENDPATH**/ ?>