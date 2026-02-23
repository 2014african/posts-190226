<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Posts</title>
</head>
<body>
    <h1>All Posts</h1>

    @foreach ($posts as $post)
        <div>
            <h3>{{ $post->name }}</h3>
            <p>{{ $post->content }}</p>
            <a href="/posts/{{ $post->id }}">Show</a>
        </div>
    @endforeach
</body>
</html>