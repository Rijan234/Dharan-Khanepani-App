<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Login</title>
  <link rel="icon" type="image/x-icon" href="{{ asset('photos/logos.png') }}">
  <script src="https://cdn.tailwindcss.com"></script>
  <style>
    .logo {
      mix-blend-mode: multiply;
    }
  </style>
</head>
<body class="h-screen flex items-center justify-center">
  <!-- Two-tone background -->
  <div class="absolute inset-0 flex flex-col">
    <div class="flex-1 bg-[#5C79F8]"></div> <!-- Softer blue -->
    <div class="flex-1 bg-[#C5D4FD]"></div>
  </div>

  <!-- Login form with logo -->
  <div class="relative z-10 w-full max-w-4xl mx-auto bg-white shadow-lg rounded-lg p-10 flex">
    <!-- Logo Section -->
    <div class="w-1/2 flex items-center justify-center border-r border-gray-300">
      <img src="{{ asset('photos/er.png') }}" alt="Logo" class="w-65 h-65 p-4 logo">
    </div>

    <!-- Login Form Section -->

       <!-- Session Status -->
       <x-auth-session-status  class="mb-4 " :status="session('status')" />
    <div class="w-1/2 p-10">
      <h2 class="text-3xl font-bold text-center text-gray-800 mb-8">Login</h2>
      <form action="{{ route('login') }}"  method="POST"  >
        @csrf
        <div class="mb-6">
          <label for="email" class="block text-lg font-medium text-gray-700 mb-3">Email</label>
          <input type="email" id="email" name="email" required  autocomplete="off"
                 class="w-full px-5 py-3 border border-gray-300 rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-500 text-lg">
                 <x-input-error :messages="$errors->get('email')" class="mt-2" />
        </div>
        <div class="mb-8">
          <label for="password" class="block text-lg font-medium text-gray-700 mb-3">Password</label>
          <input type="password" id="password" name="password" required 
                 class="w-full px-5 py-3 border border-gray-300 rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-500 text-lg">
                 <x-input-error :messages="$errors->get('password')" class="mt-2" />
        </div>
        <button type="submit" 
                class="w-full bg-blue-500 text-white py-3 px-5 rounded-lg text-lg hover:bg-blue-600 transition duration-200">
          Login
        </button>
       
        <div class="text-center mt-6">
          <a href="/register" class="text-blue-500 hover:underline text-lg">
            Create New Account
          </a>
        </div>
      </form>
    </div>
  </div>
</body>
</html>
