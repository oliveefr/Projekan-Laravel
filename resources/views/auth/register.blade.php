<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Register</title>
    <link rel="preconnect" href="https://fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=figtree:400,500,600&display=swap" rel="stylesheet" />
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="font-sans bg-gradient-to-r from-pink-200 via-purple-200 to-blue-200 dark:from-gray-800 dark:via-gray-700 dark:to-gray-900 text-gray-800 dark:text-gray-300">

    <!-- Container -->
    <div class="flex items-center justify-center min-h-screen px-4 sm:px-6 lg:px-8">
        <div class="w-full max-w-md">
            <!-- Register Box -->
            <div class="bg-white dark:bg-gray-800 shadow-lg rounded-3xl p-8 border-4 border-dashed border-purple-400">
                <div class="text-center mb-6">
                    <div class="flex items-center justify-center w-16 h-16 mx-auto rounded-full bg-blue-300">
                        <svg xmlns="http://www.w3.org/2000/svg" class="h-8 w-8 text-white" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M12 4.5V19.5m-6-8h12" />
                        </svg>
                    </div>
                    <h2 class="text-3xl font-bold mt-4 text-purple-800 dark:text-gray-100">Buat Akun!</h2>
                    <p class="text-sm text-gray-600 dark:text-gray-400">
                        Sudah punya akun? 
                        <a href="{{ route('login') }}" class="text-blue-600 hover:underline font-medium">Masuk disini ya</a>
                    </p>
                </div>

                <!-- Register Form -->
                <form method="POST" action="{{ route('register') }}" class="space-y-6">
                    @csrf

                    <!-- Name -->
                    <div>
                        <label for="name" class="block text-sm font-medium text-purple-800 dark:text-gray-300">Nama</label>
                        <input 
                            id="name" 
                            name="name" 
                            type="text" 
                            required 
                            value="{{ old('name') }}" 
                            class="mt-2 w-full px-4 py-3 rounded-full border text-gray-800 dark:text-gray-200 bg-pink-100 dark:bg-gray-700 border-pink-300 dark:border-gray-600 focus:ring-2 focus:ring-pink-400 focus:border-pink-400"
                            placeholder="Masukkan nama Anda">
                        @error('name')
                            <p class="text-sm text-red-500 mt-1">{{ $message }}</p>
                        @enderror
                    </div>

                    <!-- Email -->
                    <div>
                        <label for="email" class="block text-sm font-medium text-purple-800 dark:text-gray-300">Email</label>
                        <input 
                            id="email" 
                            name="email" 
                            type="email" 
                            required 
                            value="{{ old('email') }}" 
                            class="mt-2 w-full px-4 py-3 rounded-full border text-gray-800 dark:text-gray-200 bg-purple-100 dark:bg-gray-700 border-purple-300 dark:border-gray-600 focus:ring-2 focus:ring-purple-400 focus:border-purple-400"
                            placeholder="Masukkan email Anda">
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
                            class="mt-2 w-full px-4 py-3 rounded-full border text-gray-800 dark:text-gray-200 bg-blue-100 dark:bg-gray-700 border-blue-300 dark:border-gray-600 focus:ring-2 focus:ring-blue-400 focus:border-blue-400"
                            placeholder="••••••••">
                        @error('password')
                            <p class="text-sm text-red-500 mt-1">{{ $message }}</p>
                        @enderror
                    </div>

                    <!-- Confirm Password -->
                    <div>
                        <label for="password_confirmation" class="block text-sm font-medium text-purple-800 dark:text-gray-300">Konfirmasi Password</label>
                        <input 
                            id="password_confirmation" 
                            name="password_confirmation" 
                            type="password" 
                            required 
                            class="mt-2 w-full px-4 py-3 rounded-full border text-gray-800 dark:text-gray-200 bg-purple-100 dark:bg-gray-700 border-purple-300 dark:border-gray-600 focus:ring-2 focus:ring-purple-400 focus:border-purple-400"
                            placeholder="••••••••">
                        @error('password_confirmation')
                            <p class="text-sm text-red-500 mt-1">{{ $message }}</p>
                        @enderror
                    </div>

                    <!-- Submit Button -->
                    <div>
                        <button 
                            type="submit" 
                            class="w-full px-4 py-3 text-white bg-gradient-to-r from-pink-400 to-purple-500 rounded-full hover:opacity-90 focus:outline-none focus:ring-4 focus:ring-pink-400">
                            Daftar Sekarang
                        </button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</body>
</html>
