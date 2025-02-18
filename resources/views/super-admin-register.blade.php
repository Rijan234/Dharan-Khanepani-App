<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Register </title>
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
            <di class="mb-4">
                <label for="name" class="block text-lg font-medium text-gray-700 mb-2">Name</label>
                <x-text-input id="name" class="w-full px-4 py-2 border border-gray-300 rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-500 text-base" type="text" name="name" :value="old('name')" required autofocus autocomplete="name" />
              
                <x-input-error :messages="$errors->get('name')" class="mt-2" />
            </di>

            <!-- Email Address -->
            <div class="mt-4">
            <label for="email" class="block text-lg font-medium text-gray-700 mb-2">Email</label>
                <x-text-input id="email" class="w-full px-4 py-2 border border-gray-300 rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-500 text-base" type="email" name="email" :value="old('email')" required autocomplete="username" />
                <x-input-error :messages="$errors->get('email')" class="mt-2" />
            </div>

            <!-- Password -->
            <div class="mt-4">
            <label for="password" class="block text-lg font-medium text-gray-700 mb-2">Password</label>

                <x-text-input id="password" class="w-full px-4 py-2 border border-gray-300 rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-500 text-base"
                    type="password"
                    name="password"
                    required autocomplete="new-password" />

                <x-input-error :messages="$errors->get('password')" class="mt-2" />
            </div>

            <!-- Confirm Password -->
            <div class="mt-4">
            <label for="password_confirmation" class="block text-lg font-medium text-gray-700 mb-2">Confirm Password</label>

                <x-text-input id="password_confirmation" class="w-full px-4 py-2 border border-gray-300 rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-500 text-base"
                    type="password"
                    name="password_confirmation" required autocomplete="new-password" />

                <x-input-error :messages="$errors->get('password_confirmation')" class="mt-2" />
            </div>
            <button type="submit" 
              class="w-full bg-blue-500 text-white mt-2 py-2 rounded-lg text-lg hover:bg-blue-600 transition duration-200">
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