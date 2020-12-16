<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Posts</title>
</head>
<body>
@include('admin.header')

@foreach($all as $post)
    <div style="border: 1px solid #000000; display: block; margin: 4px;">
    <p>{{ $post['id'] }}</p>
    <p>{{ $post['title'] }}</p>
    <p>{{ $post['subtitle'] }}</p>
        <a href="{{ route('posts.edit', ['post' => $post['id']]) }}">Edit</a>
    </div>
@endforeach


</body>
</html>
