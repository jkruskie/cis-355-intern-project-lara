<footer class="bg-gray-50 text-gray-600 px-12 py-12">
    <div class="max-w-screen-xl mx-auto grid md:grid-cols-2 lg:grid-cols-3 gap-6">
      <div>
        <h5 class="text-xl font-semibold text-gray-700">About</h5>
        <nav class="mt-4">
          <ul class="space-y-2">
            <li>
              <p class="font-normal text-base">JobCorse wants to be a simple and effective way to help upcoming college students build their career. JobCorse focuses on providing an efficient and easy way for students to apply for jobs and internships.</p>
            </li>
          </ul>
        </nav>
      </div>
      <div>
        <h5 class="text-xl font-semibold text-gray-700">Made With</h5>
        <nav class="mt-4">
          <ul class="space-y-2">
            <li><a href="https://cakephp.org/">CakePHP</a></li>
            <li><a href="https://getcomposer.org/">Composer</a></li>
            <li><a href="https://milligram.io/">Milligram</a></li>
            <li><a href="https://www.php.net/">PHP</a></li>
            <li><a href="https://mariadb.org/">MariaDB</a></li>
            <li><a href="https://www.nginx.com/">NGINX</a></li>
          </ul>
        </nav>
      </div>
      <div>
        <h5 class="text-xl font-semibold text-gray-700">Quick Links</h5>
        <nav class="mt-4">
          <ul class="space-y-2">
            <?php if(\Auth::check()): ?>
            <li>
              <a href="/internships" class="font-normal text-base hover:text-gray-400">Internships</a>
            </li>
            <li>
              <a href="/applications" class="font-normal text-base hover:text-gray-400">Applications</a>
            </li>
            <li>
              <a href="/users" class="font-normal text-base hover:text-gray-400">Users</a>
            </li>
            <li>
              <a href="/logout" class="font-normal text-base hover:text-gray-400">Logout</a>
            </li>
            <?php else: ?>
            <li>
              <a href="/login" class="font-normal text-base hover:text-gray-400">Login</a>
            </li>
            <li>
              <a href="/register" class="font-normal text-base hover:text-gray-400">Register</a>
            </li>
            <?php endif; ?>
          </ul>
        </nav>
      </div>
    </div>
    <div class="max-w-screen-xl mx-auto flex flex-col md:flex-row justify-between items-center space-y-4 mt-16 lg:mt-20 border-t-2 border-gray-200 pt-8 ">
      <div class="text-sm space-y-4 md:space-y-1 text-center md:text-left">
        <p>Copyright &copy;2021 All Rights Reserved by JobCorse.</p>
        <p>Wisdom is easily acquired when hiding under the bed with a saucepan on your head.</p>
      </div>
    </div>
  </footer><?php /**PATH D:\GH Repos\cis-355-intern-project-lara\resources\views/layouts/footer.blade.php ENDPATH**/ ?>