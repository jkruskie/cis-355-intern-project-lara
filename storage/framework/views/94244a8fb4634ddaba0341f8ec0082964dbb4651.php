
<?php $__env->startSection('content'); ?>
<p class="text-lg text-center font-bold m-5">Edit Application</p>
<div>
    <div class="mt-5 md:mt-0 md:col-span-2">
        <form action="/applications/update/<?php echo e($application->id); ?>" method="POST" enctype="multipart/form-data">
            <?php echo csrf_field(); ?> 
            <div class="rounded-t-lg m-5 w-full mx-auto bg-gray-800 text-gray-200">
                <div class="rounded-t-lg m-5 w-full mx-auto bg-gray-700 text-gray-200">
                    <div class="text-center">
                        <div class="">
                            <label for="internship_id" class="block text-sm font-medium text-white pt-4">
                            Internship ID
                            </label>
                            <div class="mb-4 flex rounded-md shadow-sm">
                                <input type="text" name="internship_id" id="internship_id" value="<?php echo e($application->internship_id); ?>" class="margin-0-auto text-black p-1">
                            </div>
                        </div>
                    </div>
                    <div class="text-center">
                        <div class="">
                            <label for="user_id" class="block text-sm font-medium text-white">
                            User ID
                            </label>
                            <div class="mb-4 flex rounded-md shadow-sm">
                                <input type="text" name="user_id" id="user_id" value="<?php echo e($application->user_id); ?>" class="margin-0-auto text-black p-1">
                            </div>
                        </div>
                    </div>
                    <?php if(Session::has('message')): ?>
                        <span class="flex items-center font-medium tracking-wide text-red-500 text-md mt-1 ml-1 mb-1 display-table margin-0-auto">
                        <?php echo e(Session::get('message')); ?>

                        </span>
                    <?php endif; ?>
                    <div class="px-4 py-3 bg-gray-50 text-right sm:px-6">
                        <button type="submit" class="inline-flex justify-center py-2 px-4 border border-transparent shadow-sm text-sm font-medium rounded-md text-white bg-indigo-600 hover:bg-indigo-700 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500 margin-0-auto text-black p-1 display-table">
                        Save
                        </button>
                    </div>
                </div>
            </div>
        </form>
    </div>
</div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH D:\GH Repos\cis-355-intern-project-lara\resources\views/Applications/edit.blade.php ENDPATH**/ ?>