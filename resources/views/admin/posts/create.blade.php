@section('title')
    Create post
@endsection
@include('admin.templates.header')
@include('admin.templates.navbar')


<form action="{{ route('posts.store') }}" method="post">
    @csrf
    <input type="text" name="title" placeholder="Title"><br>
    <input type="text" name="subtitle" placeholder="Subitle"><br>
    <input type="text" name="content" placeholder="Content"><br>
    <input type="submit">
</form>


@include('admin.templates.footer')
