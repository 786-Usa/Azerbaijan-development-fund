@extends('layouts.app')

@section('content')
<div class="container">
    <h1>Welcome Admin</h1>
    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg p-6">
                <h3 class="text-lg font-semibold text-white mb-4">
                    Welcome to your blog dashboard 🎉
                </h3>
                <p class="text-white mb-6">
                    From here you can manage your posts and other admin content.
                </p>

                <a href="{{ route('posts.index') }}"
                   class="inline-block bg-white text-black px-5 py-2 rounded-lg shadow hover:bg-blue-700 transition">
                    📄 View All Posts
                </a>
            </div>
        </div>
    </div>
</div>
@endsection
