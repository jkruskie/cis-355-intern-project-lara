

<?php $__env->startSection('content'); ?>
<form method="post" action="/login">
    <?php echo csrf_field(); ?>
    <div class="bg-white shadow-lg rounded px-8 pt-6 pb-8 mb-4 flex flex-col mt-4">
      <?php if(Session::has('error')): ?>
        <span class="flex items-center font-medium tracking-wide text-red-500 text-md mt-1 ml-1 mb-1">
          <?php echo e(Session::get('error')); ?>

        </span>
      <?php endif; ?>
      <div class="mb-4">
        <label class="block text-grey-darker text-sm font-bold mb-2" for="email">
          Email
        </label>
        <input class="shadow border rounded w-full py-2 px-3 text-grey-darker" name="email" id="email" type="text" placeholder="Email">
      </div>
      <div class="mb-6">
        <label class="block text-grey-darker text-sm font-bold mb-2" for="password">
          Password
        </label>
        <input class="shadow border border-red rounded w-full py-2 px-3 text-grey-darker mb-3" name="password" id="password" type="password" placeholder="******************">
      </div>
      <div class="flex items-center justify-between">
        <button type="submit" class="rounded-lg border-2 border-red-500 bg-blue hover:bg-blue-dark text-black font-bold py-2 px-4 rounded" type="button">
          Sign In
        </button>
      </div>
    </div>
</form>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH D:\GH Repos\cis-355-intern-project-lara\resources\views/Auth/login.blade.php ENDPATH**/ ?>