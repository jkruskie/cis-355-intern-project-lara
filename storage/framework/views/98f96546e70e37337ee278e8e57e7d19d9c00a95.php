<header class="border-b md:flex md:items-center md:justify-between p-4 pb-0 shadow-lg md:pb-4">
  
    <!-- Logo text or image -->
    <div class="flex items-center justify-between mb-4 md:mb-0">
        <a class="no-underline text-grey-darkest hover:text-black" href="/">
            <img src="/images/logo_200x85.png" alt="JobCorse">
        </a>
    </div>
    <!-- END Logo text or image -->
    
    <!-- Global navigation -->
    <nav>
      <ul class="list-reset md:flex md:items-center">
        <?php if(Auth::check()): ?>
          <li class="md:ml-4">
            <a href="/internships" class="text-center text-center border-t block no-underline hover:underline py-2 text-grey-darkest hover:text-black md:border-none md:p-0">
              <button class="py-2 rounded-lg border-2 border-red-500 px-4 bg-white text-black font-semibold rounded-lg shadow-md hover:bg-red focus:outline-none focus:ring-2 focus:ring-red-500 focus:ring-opacity-75">
                Home
              </button>
            </a>
          </li>
        <?php else: ?>
          <li class="md:ml-4">
            <a href="/login" class="text-center border-t block no-underline hover:underline py-2 text-grey-darkest hover:text-black md:border-none md:p-0">
              <button class="py-2 rounded-lg border-2 border-red-500 px-4 bg-white text-black font-semibold rounded-lg shadow-md hover:bg-red focus:outline-none focus:ring-2 focus:ring-red-500 focus:ring-opacity-75">
                Login
              </button>
            </a>
          </li>
          <li class="md:ml-4">
            <a href="/register-question" class="text-center block no-underline hover:underline py-2 text-grey-darkest hover:text-black md:border-none md:p-0">
              <button class="py-2 rounded-lg border-2 border-red-500 px-4 bg-white text-black font-semibold rounded-lg shadow-md hover:bg-red focus:outline-none focus:ring-2 focus:ring-red-500 focus:ring-opacity-75">
                Register
              </button>
            </a>
          </li>
        <?php endif; ?>
      </ul>
    </nav>
    <!-- END Global navigation -->
  
  </header><?php /**PATH D:\GH Repos\cis-355-intern-project-lara\resources\views/layouts/navbar.blade.php ENDPATH**/ ?>