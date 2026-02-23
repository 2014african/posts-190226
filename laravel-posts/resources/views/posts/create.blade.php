<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

    <h1>Forma</h1>

<form action="/posts" method="post">
    @csrf
<div>
    <label for="name">name:</label><br>
    <input type="text" id="name" name="name"><br>
</div>
    <label for="content">content:</label><br>
    <textarea name="content" id="content"></textarea>
<div>
    <input type="submit" value="Submit">
</form>
</div>

@isset($posts)
    @foreach ($posts as $post)
        <div>
            <h3>{{ $post->name }}</h3>
            <p>{{ $post->content }}</p>
        </div>
    @endforeach
@endisset

</body>
</html>