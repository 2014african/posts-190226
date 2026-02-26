<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

    <h1>Edit post with {{ $singlePost -> id }}</h1>

<form action="/posts/{{ $singlePost -> id }}/update" method="put">
    @csrf
    @method('PUT')
<div>
    <label for="name">name:</label><br>
    <input type="text" id="name" name="name" value="{{ $singlePost->name }}"><br>
</div>
    <label for="content">content:</label><br>
    <textarea name="content" id="content">{{ $singlePost -> content }}</textarea>
<div>
    <input type="submit" value="Atjaunināt">
</form>
<a href="/posts">Show all answers</a>
</div>

@isset($posts)
    @foreach ($posts as $post)
        <div>
            <h3>{{ $post->title }}</h3>
            <p>{{ $post->content }}</p>
        </div>
    @endforeach
@endisset

</body>
</html>