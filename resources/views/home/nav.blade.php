<nav>
  <div class="logo">
    <a href="{{ route('home') }}">
      <img src="{{ asset('images/logo.png') }}" alt="Logo">
    </a>
  </div>
  <ul>
    <li><a href="{{ route('home') }}">Home</a></li>
    <li><a href="{{ route('about') }}">About</a></li>
    <li><a href="{{ route('programs') }}">Programs</a></li>
    <li><a href="{{ route('contact') }}">Contact</a></li>
  </ul>
  <div class="search-bar">
    
  </div>
  <button class="signup"><a href="{{ route('register') }}">Register</a></button>
  <button class="login"><a href="{{ route('login') }}">Login</a></button>
</nav>    