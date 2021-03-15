
<?php $__env->startSection('content'); ?>
<p class="text-lg text-center font-bold m-5">Show User</p>
<div>
    <div class="mt-5 md:mt-0 md:col-span-2">
        <div class="rounded-t-lg m-5 w-full mx-auto bg-gray-800 text-gray-200">
            <div class="rounded-t-lg m-5 w-full mx-auto bg-gray-700 text-gray-200">
                <div class="text-center">
                    <div class="">
                        <label for="name" class="block text-sm font-medium text-white pt-4">
                        Name
                        </label>
                        <div class="mb-4 flex rounded-md shadow-sm">
                            <input type="text" name="name" id="name" value="<?php echo e($user->name); ?>" class="margin-0-auto text-black p-1" readonly="readonly">
                        </div>
                    </div>
                </div>
                <div class="text-center">
                    <div class="">
                        <label for="email" class="block text-sm font-medium text-white">
                        Email
                        </label>
                        <div class="mb-4 flex rounded-md shadow-sm">
                            <input type="text" name="email" id="email" value="<?php echo e($user->email); ?>" class="margin-0-auto text-black p-1" readonly="readonly">
                        </div>
                    </div>
                </div>
                <div class="text-center">
                    <div class="">
                        <label for="major" class="block text-sm font-medium text-white">
                        Major
                        </label>
                        <div class="mb-4 flex rounded-md shadow-sm">
                            <input type="text" name="major" id="major" value="<?php echo e($user->major); ?>" class="margin-0-auto text-black p-1" readonly="readonly">
                        </div>
                    </div>
                </div>
                <div class="text-center">
                    <div class="">
                        <label for="school_years" class="block text-sm font-medium text-white">
                        School Years
                        </label>
                        <div class="mb-4 flex rounded-md shadow-sm">
                            <input type="text" name="school_years" id="school_years" value="<?php echo e($user->school_years); ?>" class="margin-0-auto text-black p-1" readonly="readonly">
                        </div>
                    </div>
                </div>
                <div class="text-center">
                    <div class="">
                        <label for="user_type" class="block text-sm font-medium text-white">
                        User Type
                        </label>
                        <div class="mb-4 flex rounded-md shadow-sm">
                            <input type="text" name="user_type" id="user_type" value="<?php echo e($user->user_type); ?>" class="margin-0-auto text-black p-1" readonly="readonly">
                        </div>
                    </div>
                </div>
                <div class="text-center pb-4">
                    <div class="">
                        <label for="created_at" class="block text-sm font-medium text-white">
                        Created At
                        </label>
                        <div class="mb-4 flex rounded-md shadow-sm">
                            <input type="text" name="created_at" id="created_at" value="<?php echo e($user->created_at); ?>" class="margin-0-auto text-black p-1" readonly="readonly">
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <p class="text-lg text-center font-bold m-5">Related Applications</p>
    <table class="table-fixed rounded-t-lg m-5 w-full mx-auto bg-gray-800 text-gray-200" >
        <tr class="text-left border-b border-gray-300 text-center">
            <th class="px-4 py-3">Company</th>
            <th class="px-4 py-3">Student</th>
            <th class="px-4 py-3">Date</th>
            <th class="px-4 py-3">Actions</th>
        </tr>
        <?php $__currentLoopData = $user->Applications; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $app): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
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

</div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH D:\GH Repos\cis-355-intern-project-lara\resources\views/Users/show.blade.php ENDPATH**/ ?>