<nav>
  <div class="logo">
    <a href="{{ route('home') }}">
      <img src="{{ asset('images/logo.png') }}" alt="Logo">
    </a>
  </div>
  <ul class="nav-links">
    <li><a href="{{ route('home') }}">Home</a></li>
    <li><a href="{{ route('about') }}">About</a></li>
    <li><a href="{{ route('programs') }}">Programs</a></li>
    <li><a href="{{ route('contact') }}">Contact</a></li>
    <li><a href="{{ route('news') }}">News</a></li>
    <li><a href="{{ route('faqs') }}">FAQs</a></li>
  </ul>
  <div class="search-bar"></div>
    <form action="{{ route('search') }}" method="GET">
      <input type="text" name="query" placeholder="Search...">
      <button type="submit">Search</button>
    </form>  
  </div>
  <button class="signup"><a href="{{ route('register') }}">Register</a></button>
  <button class="login"><a href="{{ route('login') }}">Login</a></button>
</nav>    

<!----responsive nav bar---->
