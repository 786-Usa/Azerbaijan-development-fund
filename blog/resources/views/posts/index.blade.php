@extends('layouts.app')

@section('content')
    <div class="container-fluid px-6 py-4">
        <div class="d-flex justify-content-between align-items-center mb-4">
            <h2 class="fw-bold">📄 All Blog Posts</h2>
            <a href="{{ route('posts.create') }}" class="btn btn-success shadow-sm ms-2 ">
                <i class="bi bi-plus-circle"></i> New Post
            </a>
        </div>

        {{-- Search Bar --}}
        <form method="GET" action="{{ route('posts.index') }}" class="mb-4">
            <div class="input-group">
                <input type="text" name="search" value="{{ request('search') }}" class="form-control"
                    placeholder="Search posts by title...">
                <button class="btn btn-outline-secondary" type="submit">
                    <i class="bi bi-search"></i>
                </button>
            </div>
        </form>

        {{-- Posts Table --}}
        <div class="card shadow-lg border-0 rounded-lg">
            <div class="card-body p-0">
                <table class="table table-hover align-middle mb-0">
                    <thead class="bg-light">
                        <tr class="text-dark">
                            <th class="px-4 py-3">Title</th>
                            <th class="px-4 py-3" style="width: 120px;">Image</th>
                            <th class="px-4 py-3">Created</th>
                            <th class="px-4 py-3 text-end " style="width: 200px;">Actions</th>
                        </tr>
                    </thead>
                    <tbody>
                        @forelse ($posts as $post)
                            <tr class="hover:bg-gray-50">
                                <td class="px-4 py-3 fw-semibold">{{ $post->title }}</td>
                                <td>
                                    @if ($post->image)
                                        <img src="{{ asset('storage/' . $post->image) }}" class="img-fluid rounded"
                                            style="max-height: 70px;">
                                    @else
                                        <span class="text-muted">No image</span>
                                    @endif
                                </td>
                                <td>
                                    <small class="text-muted">
                                        {{ $post->created_at->format('M d, Y') }} <br>
                                        <em>{{ $post->created_at->diffForHumans() }}</em>
                                    </small>
                                </td>
                                <td class="text-end"> <!-- Changed to text-end for proper alignment -->
                                    <div class="btn-group btn-group-sm" role="group">
                                        <a href="{{ route('posts.edit', $post->id) }}"
                                            class="btn btn-sm btn-outline-primary me-2 rounded-pill hover:shadow-lg transition duration-200">
                                            <i class="bi bi-pencil-square"></i> Edit
                                        </a>

                                        <form action="{{ route('posts.destroy', $post->id) }}" method="POST"
                                            class="d-inline">
                                            @csrf @method('DELETE')
                                            <button type="submit"
                                                class="btn btn-sm btn-outline-danger rounded-pill hover:shadow-lg transition duration-200"
                                                onclick="return confirm('Are you sure you want to delete this post?')">
                                                <i class="bi bi-trash3"></i> Delete
                                            </button>
                                        </form>
                                    </div>
                                </td>
                            </tr>
                        @empty
                            <tr>
                                <td colspan="4" class="text-center text-muted py-4">
                                    No posts found.
                                </td>
                            </tr>
                        @endforelse
                    </tbody>
                </table>
            </div>
        </div>

        {{-- Pagination --}}
        <div class="mt-4">
            {{ $posts->links('pagination::bootstrap-5') }}
        </div>
    </div>
@endsection
