<x-guest-layout >
    <!-- Session Status -->
    <x-auth-session-status  class="mb-4 " :status="session('status')" />

    <form method="POST" action="{{ route('login') }}" >
        @csrf

        <!-- Email Address -->
        <div >
            

            <div class="relative flex items-center focus-within:text-gray-1000">
                <div class="absolute ml-2 mt-3">
                <i class="fas fa-envelope text-white"></i>
            </div>
            <input  type="email" placeholder="Email ID" autocomplete="off" class="bg-transparent mt-3 w-full rounded-md pl-10 pr-3 border-2 border-white placeholder-white"  name="email" />
            <!-- <x-text-input class="pl-50" id="email" class=" mt-1 w-full" type="email" name="email" :value="old('email')"  /> -->
            
        </div>
        </div>

        <!-- Password -->
             
        <div >
            

            <div class="relative flex items-center focus-within:text-gray-600">
                <div class="absolute ml-2 mt-3 ">
                <i class="fa-solid fa-lock text-white "></i>
            </div>
            <input  type="password" placeholder="Password" autocomplete="off" class="bg-transparent mt-3 w-full rounded-md pl-10 pr-3 border-2 border-white placeholder-white"  name="password" />
            <!-- <x-text-input class="pl-50" id="email" class=" mt-1 w-full" type="email" name="email" :value="old('email')"  /> -->
            
        </div>
        </div>
        <!-- Remember Me -->
        <div class="block mt-4">
            <label for="remember_me" class="inline-flex items-center">
                <input id="remember_me" type="checkbox" class="rounded border-gray-300 text-indigo-600 shadow-sm focus:ring-indigo-500 " name="remember">
                <span class="ms-2 text-sm text-gray-1000">{{ __('Remember me') }}</span>
            </label>
        </div>

        <div class="flex items-center justify-end mt-4">
            @if (Route::has('password.request'))
                <a class="underline text-sm text-gray-1000 hover:text-white rounded-md focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500" href="{{ route('password.request') }}">
                    {{ __('Forgot your password?') }}
                </a>
            @endif

            <x-primary-button class="ms-3">
                {{ __('Log in') }}
            </x-primary-button>
        </div>
    </form>
</x-guest-layout>
