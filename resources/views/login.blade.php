@section('title')
    Login
@endsection
@include('templates.header')
@include('templates.navbar')
@if($errors->any())
        @foreach($errors->all() as $error)
            <div class="alert alert-warning" role="alert">
                {{ $error }}
            </div>
        @endforeach
@endif
<form action="{{ url('/login') }}" method="post">
    @csrf
    <input type="email" name="email" placeholder="Email"><br>
    <input type="password" name="password" placeholder="Password"><br>
    <input type="submit">
</form>



@include('templates.footer')
