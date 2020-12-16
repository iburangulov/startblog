@section('title')
    Edit post
@endsection
@include('admin.templates.header')
@include('admin.templates.navbar')

<form action="{{ route('posts.update', ['post' => $id]) }}" method="post">
    @csrf
    @method('PUT')
    <input type="text" name="title" placeholder="Title" value="{{ $post['title'] }}"><br>
    <input type="text" name="subtitle" placeholder="Subitle" value="{{ $post['subtitle'] }}"><br>
    <input type="text" name="content" placeholder="Content" value="{{ $post['content'] }}"><br>
    <input type="submit">
</form>

@include('admin.templates.footer')
