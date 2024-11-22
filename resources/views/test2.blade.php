<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Register Page</title>
  <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="h-screen flex items-center justify-center">
  <!-- Two-tone background -->
  <div class="absolute inset-0 flex flex-col">
    <div class="flex-1 bg-[#5C79F8]"></div> <!-- Softer blue -->
    <div class="flex-1 bg-[#C5D4FD]"></div>
  </div>

  <!-- Register Form Section -->
  <div class="relative z-10 w-full max-w-md mx-auto bg-white shadow-lg rounded-lg p-8">
    <h2 class="text-3xl font-bold text-center text-gray-800 mb-6">Register</h2>
    <form method="POST" action="{{ route('register') }}">
      @csrf

      <!-- Name -->
      <div class="mb-4">
        <label for="name" class="block text-lg font-medium text-gray-700 mb-2">Name</label>
        <input type="text" id="name" name="name" required 
               class="w-full px-4 py-2 border border-gray-300 rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-500 text-base">
      </div>

      <!-- Email Address -->
      <div class="mb-4">
        <label for="email" class="block text-lg font-medium text-gray-700 mb-2">Email</label>
        <input type="email" id="email" name="email" required 
               class="w-full px-4 py-2 border border-gray-300 rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-500 text-base">
      </div>

      <!-- Password -->
      <div class="mb-4">
        <label for="password" class="block text-lg font-medium text-gray-700 mb-2">Password</label>
        <input type="password" id="password" name="password" required 
               class="w-full px-4 py-2 border border-gray-300 rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-500 text-base">
      </div>

      <!-- Confirm Password -->
      <div class="mb-6">
        <label for="password_confirmation" class="block text-lg font-medium text-gray-700 mb-2">Confirm Password</label>
        <input type="password" id="password_confirmation" name="password_confirmation" required 
               class="w-full px-4 py-2 border border-gray-300 rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-500 text-base">
      </div>

      <button type="submit" 
              class="w-full bg-blue-500 text-white py-2 rounded-lg text-lg hover:bg-blue-600 transition duration-200">
        Register
      </button>

      <div class="text-center mt-4">
        <a href="/" class="text-blue-500 hover:underline text-base">
          Already Registered? 
        </a>
      </div>
    </form>
  </div>
</body>
</html>
