<script src="https://cdn.tailwindcss.com"></script>
<div class="flex min-h-full items-center justify-center py-12 px-4 sm:px-6 lg:px-8">
    <div class="w-full max-w-md space-y-8">
      <div>
        <h2 class="mt-6 text-center text-3xl font-bold tracking-tight text-gray-900">Welcome Back : )</h2>

      </div>
      <form class="mt-8 space-y-6" action="?p=home&a=inscription" method="POST">
        <input type="hidden" name="remember" value="true">
        <div class="-space-y-px rounded-md shadow-sm">
            <div>
                <label for="email-address" class="sr-only">Full Name</label>
                <input id="email-address" name="fullName" type="text" autocomplete="FullName" required class="relative my-4 block w-full appearance-none rounded-none rounded-t-md border border-gray-300 px-3 py-2 text-gray-900 placeholder-gray-500 focus:z-10 focus:border-sky-500 focus:outline-none focus:ring-sky-500 sm:text-sm" placeholder="Full Name">
            </div>
            <div>
                <label for="email-address" class="sr-only">Phone Number</label>
                <input id="email-address" name="phoneNumber" type="number" required class="relative my-4 block w-full appearance-none rounded-none rounded-t-md border border-gray-300 px-3 py-2 text-gray-900 placeholder-gray-500 focus:z-10 focus:border-sky-500 focus:outline-none focus:ring-sky-500 sm:text-sm" placeholder="Phone Number">
            </div>
            <div>
                <label for="email-address" class="sr-only">Adress</label>
                <input id="email-address" name="adress" type="text" required class="relative my-4 block w-full appearance-none rounded-none rounded-t-md border border-gray-300 px-3 py-2 text-gray-900 placeholder-gray-500 focus:z-10 focus:border-sky-500 focus:outline-none focus:ring-sky-500 sm:text-sm" placeholder="adress">
            </div>
            <div>
                <label for="email-address" class="sr-only">City</label>
                <input id="email-address" name="city" type="text" autocomplete="PhoneNumber" required class="relative my-4 block w-full appearance-none rounded-none rounded-t-md border border-gray-300 px-3 py-2 text-gray-900 placeholder-gray-500 focus:z-10 focus:border-sky-500 focus:outline-none focus:ring-sky-500 sm:text-sm" placeholder="City">
            </div>
          <div>
            <label for="email-address" class="sr-only">Email address</label>
            <input id="email-address" name="email" type="email" autocomplete="email" required class="relative my-4 block w-full appearance-none rounded-none rounded-t-md border border-gray-300 px-3 py-2 text-gray-900 placeholder-gray-500 focus:z-10 focus:border-sky-500 focus:outline-none focus:ring-sky-500 sm:text-sm" placeholder="Email address">
          </div>
          <div>
            <label for="password" class="sr-only">Password</label>
            <input id="password" name="password" type="password" autocomplete="current-password" required class="relative my-4 block w-full appearance-none rounded-none rounded-b-md border border-gray-300 px-3 py-2 text-gray-900 placeholder-gray-500 focus:z-10 focus:border-sky-500 focus:outline-none focus:ring-sky-500 sm:text-sm" placeholder="Password">
          </div>
        </div>
  
        <div>
          <button type="submit" name="submit" class="group relative flex w-full justify-center rounded-md border border-transparent bg-sky-700 py-2 px-4 text-sm font-medium text-white hover:bg-sky-900 focus:outline-none focus:ring-2 focus:ring-indigo-500 focus:ring-offset-2">
            <span class="absolute inset-y-0 left-0 flex items-center pl-3">
              <svg class="h-5 w-5 text-sky-500 group-hover:text-sky-600" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor" aria-hidden="true">
                <path fill-rule="evenodd" d="M10 1a4.5 4.5 0 00-4.5 4.5V9H5a2 2 0 00-2 2v6a2 2 0 002 2h10a2 2 0 002-2v-6a2 2 0 00-2-2h-.5V5.5A4.5 4.5 0 0010 1zm3 8V5.5a3 3 0 10-6 0V9h6z" clip-rule="evenodd" />
              </svg>
            </span>
            Create
          </button>
        </div>
      </form>
    </div>
  </div>