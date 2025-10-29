<?php require __DIR__ . '/../partials/header_minimal.php'; ?>

<div class="w-full max-w-md mx-auto flex justify-center items-center min-h-[calc(100vh-65px)] px-4">
  <div class="bg-background-light/70 dark:bg-background-dark/70 backdrop-blur-lg p-8 rounded-lg shadow-md border border-gray-200/50 dark:border-gray-800/50">
    <div class="text-center mb-8">
      <h2 class="text-3xl font-bold text-gray-900 dark:text-white">Welcome Back</h2>
      <p class="text-gray-500 dark:text-gray-400 mt-2">Sign in to continue</p>
      <?php if (isset($_SESSION['error'])): ?>
        <p class="text-red-500 mt-2"><?php echo htmlspecialchars($_SESSION['error']); unset($_SESSION['error']); ?></p>
      <?php endif; ?>
    </div>
    <form class="space-y-6" method="post">
      <div>
        <label class="text-sm font-medium text-gray-700 dark:text-gray-300" for="email">Email</label>
        <input class="form-input mt-2 block w-full rounded-lg bg-gray-100 dark:bg-gray-800/50 border-gray-300 dark:border-gray-700 focus:border-primary focus:ring focus:ring-primary focus:ring-opacity-50 text-gray-900 dark:text-gray-100 placeholder-gray-400 dark:placeholder-gray-500 p-4" id="email" name="email" placeholder="you@example.com" type="email" />
      </div>
      <div>
        <div class="flex items-center justify-between">
          <label class="text-sm font-medium text-gray-700 dark:text-gray-300" for="password">Password</label>
          <a class="text-sm text-primary hover:underline" href="#">Forgot password?</a>
        </div>
        <input class="form-input mt-2 block w-full rounded-lg bg-gray-100 dark:bg-gray-800/50 border-gray-300 dark:border-gray-700 focus:border-primary focus:ring focus:ring-primary focus:ring-opacity-50 text-gray-900 dark:text-gray-100 placeholder-gray-400 dark:placeholder-gray-500 p-4" id="password" name="password" placeholder="••••••••" type="password" />
      </div>
      <div class="flex items-center justify-between">
        <label class="flex items-center gap-2 text-sm text-gray-600 dark:text-gray-400">
          <input class="form-checkbox h-4 w-4 rounded-sm text-primary bg-gray-200 dark:bg-gray-700 border-gray-300 dark:border-gray-600 focus:ring-primary/50" type="checkbox" />
          Stay signed in
        </label>
      </div>
      <div>
        <button class="w-full flex justify-center py-3 px-4 border border-transparent rounded-lg shadow-subtle text-base font-semibold text-white bg-sky-700 hover:bg-sky-500 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-primary dark:focus:ring-offset-background-dark" type="submit">
          Sign In
        </button>
      </div>
    </form>
    <div class="mt-6">
      <div class="relative">
        <div class="absolute inset-0 flex items-center">
          <div class="w-full border-t border-gray-300 dark:border-gray-700"></div>
        </div>
        <div class="relative flex justify-center text-sm">
          <span class="px-2 bg-background-light dark:bg-background-dark text-gray-500 dark:text-gray-400">Or sign in with</span>
        </div>
      </div>
      <div class="mt-6 grid grid-cols-2 gap-4">
        <button class="w-full inline-flex justify-center items-center py-2 px-4 border border-gray-300 dark:border-gray-700 rounded-lg shadow-subtle text-sm font-medium text-gray-700 dark:text-gray-200 bg-white dark:bg-gray-800 hover:bg-gray-50 dark:hover:bg-gray-700">
          <i class="pi pi-google text-lg mr-2"></i>
          Google
        </button>
        <button class="w-full inline-flex justify-center items-center py-2 px-4 border border-gray-300 dark:border-gray-700 rounded-lg shadow-subtle text-sm font-medium text-gray-700 dark:text-gray-200 bg-white dark:bg-gray-800 hover:bg-gray-50 dark:hover:bg-gray-700">
          <i class="pi pi-facebook text-lg mr-2"></i>
          Facebook
        </button>
      </div>
    </div>
    <div class="mt-8 text-center text-xs text-gray-500 dark:text-gray-400 px-4">
      <p>For added security, we recommend enabling two-factor authentication (2FA) in your account settings.</p>
    </div>
  </div>
</div>