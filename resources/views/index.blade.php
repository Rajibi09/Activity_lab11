@vite(['resources/js/app.js'])

<!DOCTYPE html>
<div class="container mt-3" style="max-width: 800px; margin: 0 auto;">

        <div class="card shadow-sm">
    <div class="card-body">
            <div class="text-center">
            <h2 class="mb-3">Blog App</h2>
            <p class="lead mb-2">Welcome to my the Blog App</p>
            </div>

            @if(session('success'))
                <div class="alert alert-success">
                    {{ session('success') }}
                </div>
            @endif

            <div class="task-list">
                <div class="d-flex justify-content-between align-items-center mb-3">
                <h3>All Blog Post</h3>
                <a href="{{ route('posts.create') }}" type="button" class="btn btn-primary btn-md">Add blog</a>
                </div>

                @foreach($posts as $post)
                    <div class="task-item border p-3 mb-2">
                        <div class="d-flex justify-content-between align-items-center">
                            <h3>{{ $post->title }}</h3>
                            <div>
                            <a href="{{ route('posts.show', $post->id) }}" class="btn btn-info btn-sm">Show</a>
                        <a href="{{ route('posts.edit', $post->id) }}" class="btn btn-warning btn-sm">Edit</a>
                        <form action="{{ route('posts.destroy', $post->id) }}" method="POST" class="d-inline">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="btn btn-danger btn-sm">Delete</button>
                        </form>
                            </div>
                        </div>
                        
                    </div>
                @endforeach

                @if($posts->isEmpty())
                    <p>There is no available post.</p>
                @endif
            </div>
    </div>
        </div>
</div>