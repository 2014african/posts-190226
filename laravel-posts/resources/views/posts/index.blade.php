<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Posts</title>
</head>
<body>
    <h1>All Posts</h1>

    <h2>
    <a href="/posts/create">Create New Form</a>
</h2>
    @foreach ($posts as $post)
        <div>
            <h3>{{ $post->name }}</h3>
            <p>{{ $post->content }}</p>
            <a href="/posts/{{ $post->id }}">Show</a>
        </div>
        <form action="{{ route('posts.destroy', $post->id) }}" method="POST">
    @csrf
    @method('DELETE')
    <button type="submit">Delete</button>
</form>
    @endforeach
</body>
</html>