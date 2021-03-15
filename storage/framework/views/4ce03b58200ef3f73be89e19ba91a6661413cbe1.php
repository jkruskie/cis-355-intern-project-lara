
<?php $__env->startSection('content'); ?>
<p class="text-lg text-center font-bold m-5">Update Internship</p>
<div>
    <div class="mt-5 md:mt-0 md:col-span-2">
        <form action="/internships/update/<?php echo e($internship->id); ?>" method="POST" enctype="multipart/form-data">
            <?php echo csrf_field(); ?> 
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
                    <div class="px-4 py-3 bg-gray-50 text-right sm:px-6 pb-4">
                        <a target="_blank" href="/pdf/<?php echo e($internship->pdf_url); ?>">
                            <button type="button" class="inline-flex justify-center py-2 px-4 border border-transparent shadow-sm text-sm font-medium rounded-md text-white bg-indigo-600 hover:bg-indigo-700 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500 margin-0-auto text-black p-1 display-table">
                            Download Job Description
                            </button>
                        </a>
                    </div>
                    <div class="text-center">
                        <div class="">
                            <label for="job_description" class="block text-sm font-medium text-white">
                            Upload Job Description
                            </label>
                            <div class="mb-4 flex rounded-md shadow-sm pt-2 display-table margin-0-auto">
                                <input type="file" name="job_description" class="form-control"  accept="application/pdf">
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
<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH D:\GH Repos\cis-355-intern-project-lara\resources\views/Internships/edit.blade.php ENDPATH**/ ?>