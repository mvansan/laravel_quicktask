<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Create new post</title>
</head>
<body>
    <h1>Create new post</h1>
    <form action="{{ route('admin.posts.store') }}" method="POST">
        @csrf
        <div>
            <label for="title">Title:</label>
            <input type="text" name="title" id="title" required>
        </div>
        <div>
            <label for="content">Content:</label>
            <textarea name="content" id="content" required></textarea>
        </div>
        <div>
            <label for="category">Category:</label>
            <input type="text" name="category" id="category">
        </div>
        <button type="submit">Create</button>
    </form>
</body>
</html>
