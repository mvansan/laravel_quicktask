<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Posts List</title>
</head>
<body>
    <h1>Posts List</h1>
    <a href="{{ route('admin.posts.create') }}">Create new post</a>
    <ul>
        @foreach ($posts as $post)
            <li>{{ $post->title }} - {{ $post->category }}</li>
        @endforeach
    </ul>
</body>
</html>
