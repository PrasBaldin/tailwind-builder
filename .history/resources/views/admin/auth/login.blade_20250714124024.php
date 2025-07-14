@extends('admin.layouts.auth')

@section('content')
    <div class="w-full sm:max-w-md mx-auto px-8 md:px-0">
        @include('components.alerts')

        <div class="bg-white p-6 bg-white shadow-lg rounded-lg">
            <h2 class="text-2xl font-bold text-center text-gray-700 mb-6">Login</h2>
            <form method="POST" action="{{ route('login.submit') }}" class="space-y-6">
                @csrf
                <!-- Username / Email-->
                <div>
                    <label for="usernameOrEmail" class="block text-gray-700 font-semibold">Username atau Email</label>
                    <input id="usernameOrEmail" type="text" name="usernameOrEmail" value="{{ old('username') }}" required autofocus class="w-full p-3 border border-gray-300 rounded-lg focus:ring-2 focus:ring-blue-500 focus:outline-none">
                </div>

                <!-- Password -->
                <div>
                    <label for="password" class="block text-gray-700 font-semibold">Password</label>
                    <input id="password" type="password" name="password" required class="w-full p-3 border border-gray-300 rounded-lg focus:ring-2 focus:ring-blue-500 focus:outline-none">
                </div>

                <!-- Remember Me -->
                <div class="flex items-center">
                    <input type="checkbox" name="remember" {{ old('remember') ? 'checked' : '' }} class="w-4 h-4 text-blue-500 border-gray-300 rounded">
                    <label class="ml-2 text-gray-600">Remember Me</label>
                </div>

                <!-- Submit Button -->
                <button type="submit" class="w-full bg-blue-500 hover:bg-blue-700 text-white font-bold py-3 px-6 rounded-lg transition duration-300">
                    Login
                </button>
            </form>
        </div>

        <!-- Back to Home -->
        <div class="text-center mt-4">
            <a href="{{ url('/') }}" class="inline-flex items-center text-gray-500 hover:text-blue-500 transition">
                <i class="fas fa-arrow-left"></i>
                <span class="ml-2">Back to home page</span>
            </a>
        </div>
    </div>
@endsection
