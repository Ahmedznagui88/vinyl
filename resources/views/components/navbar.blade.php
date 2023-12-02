
<nav class="navbar navbar-expand-lg bg-trasparent" data-bs-theme="dark">
  <div class="container-fluid ">
     <a class="navbar-brand text-warning" href="./">STORE</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse " id="navbarSupportedContent">
      <ul class="navbar-nav me-auto mb-2 mb-lg-0">
        
        
        <li class="nav-item ">
          <a class="nav-link active text-warning" href="{{ route('vinyl.index') }}">Your Store</a>
        </li>
        
        <li class="nav-item ">
          <a class="nav-link active text-warning" href="{{ route('console.index') }}">Turntables</a>
        </li>
        @auth
        <li class="nav-item ">
          <a class="nav-link active text-warning" href="{{ route('vinyl.create') }}">Sell</a>
        </li>

        <li class="nav-item ">
          <a class="nav-link active text-warning" href="{{ route('console.create') }}">Add turntable</a>
        </li>

       
        
        @endauth


        @auth 
        <li class="nav-item ">
          <a class="nav-link active text-warning" aria-current="page" href="{{ route('profile') }}">Profile</a>
        </li>
        
        <li class="nav-item ">
          <a class="nav-link active text-warning" href="">{{ Auth::user()->name }}</a>
        </li>
        <li class="nav-item ">
          <a class="nav-link active text-warning" onclick="event.preventDefault(); document.querySelector('#form-logout').submit();" href="">logout</a>
        </li>
        <form action="{{ route('logout') }}" method="POST" id="form-logout">
          @csrf
        </form>
      </ul>
      @endauth

      @guest
      <li class="nav-item ">
        <a class="nav-link active text-warning" href="{{ route('login') }}">login</a>
      </li>
      <li class="nav-item ">
        <a class="nav-link active text-warning" href="{{ route('register') }}">Sign in</a>
      </li>
      <li class="nav-item ">
        <a class="nav-link active text-warning" href="">Welcom</a>
      </li>
    </ul>
    @endguest

    </div>
  </div>
</nav>

{{--  --}}