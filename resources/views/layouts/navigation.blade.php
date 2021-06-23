<!-- Header -->
<header class="">
  <nav class="navbar navbar-expand-lg">
    <div class="container">
      <a class="navbar-brand" href="/">
        <h2>Expo's <em>Clothing</em></h2>
      </a>
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarResponsive">
        <ul class="navbar-nav ml-auto">
          <li class="nav-item">
            <a class="nav-link{{ request()->is('/')? ' active' : '' }}" href="/">Home</a>
          </li>
          <li class="nav-item">
            <a class="nav-link{{ request()->is('product')? ' active' : '' }}" href="/product">Our Products</a>
          </li>
          <li class="nav-item">
            <a class="nav-link{{ request()->is('about')? ' active' : '' }}" href="/about">About Us</a>
          </li>
          <li class="nav-item">
            <a class="nav-link{{ request()->is('contact')? ' active' : '' }}" href="/contact">Contact Us</a>
          </li>

          <!-- Link Auth -->
          @guest
          <li class="nav-item">
            <a class="nav-link" href="{{ route('login') }}">{{ __('Login') }}</a>
          </li>
          @else
          <li class="nav-item dropdown">
            <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
              {{ Auth::user()->name }}
            </a>

            <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
              <a class="dropdown-item" href="{{ route('logout') }}" onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                {{ __('Logout') }}
              </a>

              <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                @csrf
              </form>
            </div>
          </li>
          @endguest

          <!-- End Of link auth -->
        </ul>
      </div>
    </div>
  </nav>
</header>