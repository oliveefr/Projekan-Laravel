<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <link rel="preconnect" href="https://fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=figtree:400,500,600&display=swap" rel="stylesheet" />
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="font-sans bg-gradient-to-r from-blue-200 via-purple-200 to-pink-200 dark:from-gray-800 dark:via-gray-700 dark:to-gray-900 text-gray-800 dark:text-gray-300">

    <!-- Container -->
    <div class="flex items-center justify-center min-h-screen px-4 sm:px-6 lg:px-8">
        <div class="w-full max-w-md">
            <!-- Login Box -->
            <div class="bg-white dark:bg-gray-800 shadow-lg rounded-3xl p-8 border-4 border-dashed border-purple-400">
                <div class="text-center mb-6">
                    <div class="flex items-center justify-center w-16 h-16 mx-auto rounded-full bg-pink-300">
                        <svg xmlns="http://www.w3.org/2000/svg" class="h-8 w-8 text-white" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M13.875 18.825V17.1a3.6 3.6 0 013.6-3.6H19.2a3.6 3.6 0 013.6 3.6v1.725M4.8 10.8a5.4 5.4 0 1110.8 0 5.4 5.4 0 01-10.8 0z" />
                        </svg>
                    </div>
                    <h2 class="text-3xl font-bold mt-4 text-purple-800 dark:text-gray-100">Selamat Datang!</h2>
                    <p class="text-sm text-gray-600 dark:text-gray-400">
                        Belum punya akun? 
                        <a href="{{ route('register') }}" class="text-blue-600 hover:underline font-medium">Daftar sekarang</a>
                    </p>
                </div>

                <!-- Session Status -->
                @if (session('status'))
                    <div class="mt-4 text-sm text-green-600 dark:text-green-400">
                        {{ session('status') }}
                    </div>
                @endif

                <!-- Login Form -->
                <form method="POST" action="{{ route('login') }}" class="space-y-6">
                    @csrf

                    <!-- Email -->
                    <div>
                        <label for="email" class="block text-sm font-medium text-purple-800 dark:text-gray-300">Email</label>
                        <input 
                            id="email" 
                            name="email" 
                            type="email" 
                            required 
                            value="{{ old('email') }}" 
                            class="mt-2 w-full px-4 py-3 rounded-full border text-gray-800 dark:text-gray-200 bg-blue-100 dark:bg-gray-700 border-blue-300 dark:border-gray-600 focus:ring-2 focus:ring-blue-400 focus:border-blue-400"
                            placeholder="Masukkan email">
                        @error('email')
                            <p class="text-sm text-red-500 mt-1">{{ $message }}</p>
                        @enderror
                    </div>

                    <!-- Password -->
                    <div>
                        <label for="password" class="block text-sm font-medium text-purple-800 dark:text-gray-300">Password</label>
                        <input 
                            id="password" 
                            name="password" 
                            type="password" 
                            required 
                            class="mt-2 w-full px-4 py-3 rounded-full border text-gray-800 dark:text-gray-200 bg-purple-100 dark:bg-gray-700 border-purple-300 dark:border-gray-600 focus:ring-2 focus:ring-purple-400 focus:border-purple-400"
                            placeholder="••••••••">
                        @error('password')
                            <p class="text-sm text-red-500 mt-1">{{ $message }}</p>
                        @enderror
                    </div>

                    <!-- Forgot Password -->
                    <div class="flex items-center justify-between">
                        @if (Route::has('password.request'))
                            <a href="{{ route('password.request') }}" class="text-sm text-blue-500 hover:underline">Lupa password?</a>
                        @endif
                    </div>

                    <!-- Submit Button -->
                    <div>
                        <button 
                            type="submit" 
                            class="w-full px-4 py-3 text-white bg-gradient-to-r from-purple-500 to-pink-500 rounded-full hover:opacity-90 focus:outline-none focus:ring-4 focus:ring-purple-400">
                            Login
                        </button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</body>
</html>
