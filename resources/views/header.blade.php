<ul>
    <li><a href="{{ url('/') }}">Home</a></li>
    @auth
        <li><a href="{{ url('/logout') }}">Logout</a></li>
    @endauth
    @guest
        <li><a href="{{ url('/login') }}">Login</a></li>
        <li><a href="{{ url('/register') }}">Register</a></li>
    @endguest
</ul>
