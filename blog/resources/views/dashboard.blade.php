{{-- resources/views/dashboard.blade.php --}}
<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Dashboard') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg p-6">
                <h3 class="text-lg font-semibold text-gray-700 mb-4">
                    Welcome to your blog dashboard 🎉
                </h3>
                <p class="text-gray-600 mb-6">
                    From here you can manage your posts and other admin content.
                </p>

                <a href="{{ route('posts.index') }}"
                   class="inline-block bg-blue-600 text-black px-5 py-2 rounded-lg shadow hover:bg-blue-700 transition">
                    📄 View All Posts
                </a>
            </div>
        </div>
    </div>
</x-app-layout>
