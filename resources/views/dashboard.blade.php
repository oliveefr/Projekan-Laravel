<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-2xl text-gray-800 dark:text-gray-200 leading-tight">
            {{ __('Dashboard') }}
        </h2>
    </x-slot>

    <!-- Gradient Background -->
    <div class="py-12 bg-gradient-to-r from-pink-300 via-purple-300 to-indigo-400 min-h-screen flex items-center justify-center">
        <!-- Welcome Card -->
        <div class="bg-white p-8 rounded-3xl shadow-xl text-center transform transition duration-300 hover:scale-105">
            <!-- Animated Emoji -->
            <div class="flex justify-center mb-4">
                <div class="w-16 h-16 bg-yellow-300 rounded-full flex items-center justify-center shadow-lg">
                    <span class="text-4xl">🎉</span>
                </div>
            </div>

            <!-- Welcome Message -->
            <h2 class="text-4xl font-bold text-gray-800 mb-4">
                Selamat Datang, <span class="text-purple-500">{{ Auth::user()->name }}</span>!
            </h2>
            <p class="text-lg text-gray-600">
                Kami sangat senang melihatmu di sini. Semoga harimu menyenangkan!
            </p>
        </div>
    </div>

    <!-- Additional Styling -->
    <style>
        .bg-gradient-to-r {
            background: linear-gradient(to right, #F9A8D4, #C084FC, #818CF8); /* Pink to Indigo gradient */
        }
    </style>
</x-app-layout>
