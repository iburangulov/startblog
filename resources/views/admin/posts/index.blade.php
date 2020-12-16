@section('title')
    Posts
@endsection
@include('admin.templates.header')
@include('admin.templates.navbar')

<div class="container">
@foreach($all as $post)
<div class="card m-2" style="width: 18rem;">
    <div class="card-body">
        <h5 class="card-title"><a href="{{ route('posts.show', $post['id']) }}">{{ $post['title'] }}</a></h5>
        <h6 class="card-subtitle mb-2 text-muted">{{ $post['subtitle'] }}</h6>
        <p class="card-text">Large content</p>
        <form action="{{ route('posts.edit', ['post' => $post['id']]) }}">
            @csrf
            @method('GET')
            <input type="submit" value="Edit">
        </form>
        <form action="{{ route('posts.destroy', [$post['id']]) }}" method="POST">
            @csrf
            @method('DELETE')
            <input type="submit" value="Delete">
        </form>
    </div>
</div>
@endforeach
</div>

@include('admin.templates.footer')
