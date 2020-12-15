<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Add new post</title>
</head>
<body>
@include('admin.header')
<form action="{{ route('posts.store') }}" method="post">
    @csrf
    <input type="text" name="title" placeholder="Title"><br>
    <input type="text" name="subtitle" placeholder="Subitle"><br>
    <textarea name="content" cols="30" rows="10" placeholder="Content"></textarea><br>
    <input type="submit">
</form>
</body>
</html>

