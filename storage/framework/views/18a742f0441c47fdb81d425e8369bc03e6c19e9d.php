

<?php $__env->startSection('content'); ?>

<div class="text-center">
    <div>
        <em class="text-3">Are you a...</em>
    </div>
</div>

<div class="grid grid-cols-3 pl-20 pr-20">
    <div class="">
        <a href="/register/student" class="text-center text-center block no-underline hover:underline py-2 text-grey-darkest hover:text-black md:border-none md:p-0">
            <button class="py-2 rounded-lg border-2 border-red-500 px-4 bg-white text-black font-semibold rounded-lg shadow-md hover:bg-red focus:outline-none focus:ring-2 focus:ring-red-500 focus:ring-opacity-75">
              Student
            </button>
          </a>
    </div>
    <div class="text-center">
        <h1 class="bold">OR</h1>
    </div>
    <div class="">
        <a href="/register/employer" class="text-center text-center block no-underline hover:underline py-2 text-grey-darkest hover:text-black md:border-none md:p-0">
            <button class="py-2 rounded-lg border-2 border-red-500 px-4 bg-white text-black font-semibold rounded-lg shadow-md hover:bg-red focus:outline-none focus:ring-2 focus:ring-red-500 focus:ring-opacity-75">
              Employer
            </button>
          </a>
    </div>
</div>



<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH D:\GH Repos\cis-355-intern-project-lara\resources\views/Auth/register.blade.php ENDPATH**/ ?>