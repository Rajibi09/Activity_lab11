@vite(['resources/js/app.js'])
<!DOCTYPE html>

<div class="container mt-3" style="max-width: 800px; margin: 0 auto;">
    <div class="card shadow-sm">
        <div class="card-body">
        <h2 class="card-title text-center">Create Post</h2> 
            <form action="{{ route('storeNewPost') }}" method="POST" class="needs-validation" novalidate>
                @csrf
            <div>
                <div class="mb-3">
                        <label for="title" class="form-label">Post title</label>
                        <input type="text" id="title" name="title" class="form-control" required>
                        <div class="invalid-feedback"><p>Kindly Enter the Title.</p></div>
                </div>
                <div class="mb-3">
                    <label for="body" class="form-label">Post content</label>
                    <textarea id="body" name="body" class="form-control" required></textarea>
                    <div class="invalid-feedback"><p>Kindly Enter your Content</p></div>
                </div>
            </div>
                <button type="submit" class="btn btn-primary w-100">Create</button>
            </form>
            <a href="{{ route('posts.index') }}" class="btn btn-secondary w-100 mt-3">Back</a>
        </div>
    </div>
</div>