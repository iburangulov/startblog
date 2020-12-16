<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Edit {{ $id }}</title>
</head>
<body>
@include('admin.header')

<form action="{{ route('posts.update', ['post' => $id]) }}" method="post">
    @csrf
    @method('PUT')
    <input type="text" name="title" placeholder="Title" value="{{ $post['title'] }}"><br>
    <input type="text" name="subtitle" placeholder="Subitle" value="{{ $post['subtitle'] }}"><br>
    <input type="text" name="content" placeholder="Content" value="{{ $post['content'] }}"><br>
    <input type="submit">
</form>

</body>
</html>
