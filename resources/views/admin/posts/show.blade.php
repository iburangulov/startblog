@section('title')
    Post {{ $post->id }}
@endsection
@include('admin.templates.header')
@include('admin.templates.navbar')


<ul class="list-group">
    <li class="list-group-item">{{ $post->title }}</li>
    <li class="list-group-item">{{ $post->subtitle }}</li>
    <li class="list-group-item">{{ $post->content }}</li>
</ul>

@include('admin.templates.footer')
