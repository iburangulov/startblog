@section('title')
    Register
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
<form action="{{ url('/register') }}" method="post">
    @csrf
    <input type="text" name="name" placeholder="Name"><br>
    <input type="email" name="email" placeholder="Email"><br>
    <input type="password" name="password" placeholder="Password"><br>
    <input type="password" name="password_confirmation" placeholder="Confirm password"><br>
    <input type="submit">

</form>



@include('templates.footer')
