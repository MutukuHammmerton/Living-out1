<nav class="navbar navbar-expand-md navbar-light shadow-sm">
    <div class="container">
      <ul class="navbar-nav">
        <a class="navbar-brand" href="{{ url('/home') }}">
          {{ config('app.name', 'Living out.ke') }}
      </a>  
    </ul>
        {{-- Right side  --}}
      <ul class="navbar-nav  desktop-list ml-auto">
      @if (Auth:: guest())
        <li class="nav-item">
          <a class="nav-link" href="{{ route('login') }}">Login</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="{{ route('register') }}">{{ __('Register') }}</a>
    </li>
     @else
     {{-- <div class = "desktop-list"> --}}
        <li class="nav-item" >
          <a class="nav-link" data-widget="navbar-search" href="#" role="button">
            <i class="fas fa-search"></i>
          </a>
        </li>
     
      <li class="nav-item">
        <a class="nav-link" data-toggle="dropdown" href="#">
          <i class="far fa-comments"></i>
          {{-- <span class="badge badge-danger navbar-badge">3</span> --}}
        </a>
      </li>

      <li class="nav-item">
        <a class="nav-link" data-toggle="dropdown" href="#">
          <i class="far fa-bell"></i>
          {{-- <span class="badge badge-warning navbar-badge">15</span> --}}
        </a>
      </li>

    <li class="nav-item dropdown">
        <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
          <img src="{{ asset('img')}}/{{auth()->user()->avatar == '' ? 'default.jpg': auth()->user()->avatar}}"  class="rounded-circle avatarUser" width="25" height="25" />
            {{-- {{ Auth::user()->name }} --}}
        </a>

        <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
          <a class ="dropdown-item" href="/home">panel Admin</a>
          <div class="dropdown-divider"></div>
          <a class ="dropdown-item" href="/home">Dashboard</a>
          <div class="dropdown-divider"></div>
          <a class ="dropdown-item" href="/home">Edit Profile</a>
          <div class="dropdown-divider"></div>
            <a class="dropdown-item" href="{{ route('logout') }}"
               onclick="event.preventDefault();
                             document.getElementById('logout-form').submit();">
                {{ __('Logout') }}
            </a>

            <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                @csrf
            </form>
        </div>
    </li>
      </ul>
  
      <ul class ="mobile-list navbar-nav shadow-sm ">
      <div class="nav-item"> <li><i class="fas fa-home-lg"></i></li> </div>
      <div class="nav-item">  <li><i class="far fa-comments"></i></li> </div>
       <div class="nav-item"> <li> <i class="far fa-bell"></i></li> </div>
       <div class="nav-item"> <li><i class="fas fa-user"></i></li></div>
      </ul>
      @endif

       
        {{-- <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="{{ __('Toggle navigation') }}">
            <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <!-- Left Side Of Navbar -->
            <ul class="navbar-nav mr-auto">
             
            </ul> --}}

            <!-- Right Side Of Navbar -->
            {{-- <ul class="navbar-nav ml-auto"> --}}
                <!-- Authentication Links -->
                {{-- <li class="nav-item">
                  <a class="nav-link" data-widget="navbar-search" href="#" role="button">
                    <i class="fas fa-search"></i>
                  </a>
                  { <div class="navbar-search-block">
                    <form class="form-inline">
                      <div class="input-group input-group-sm">
                        <input class="form-control form-control-navbar" type="search" placeholder="Search" aria-label="Search">
                        <div class="input-group-append">
                          <button class="btn btn-navbar" type="submit">
                            <i class="fas fa-search"></i>
                          </button>
                          <button class="btn btn-navbar" type="button" data-widget="navbar-search">
                            <i class="fas fa-times"></i>
                          </button>
                        </div>
                      </div>
                    </form>
                  </div>  --}}
                {{-- </li>
                <li class="nav-item">
                  <a class="nav-link" data-toggle="dropdown" href="#">
                    <i class="far fa-comments"></i>
                    {{-- <span class="badge badge-danger navbar-badge">3</span> --}}
                  {{-- </a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" data-toggle="dropdown" href="#">
                    <i class="far fa-bell"></i>
                    {{-- <span class="badge badge-warning navbar-badge">15</span> --}}
                  {{-- </a>
                </li> --}} 
                {{-- @guest
                    @if (Route::has('login'))
                        <li class="nav-item">
                            <a class="nav-link" href="{{ route('login') }}">{{ __('Login') }}</a>
                        </li>
                    @endif
                    
                    @if (Route::has('register'))
                        <li class="nav-item">
                            <a class="nav-link" href="{{ route('register') }}">{{ __('Register') }}</a>
                        </li>
                    @endif
                @else
              
                    <li class="nav-item dropdown">
                     
                       
                   
                        <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                            {{ Auth::user()->name }}
                        </a>

                        <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                          <a class ="dropdown-item" href="/home">Dashboard</a>
                            <a class="dropdown-item" href="{{ route('logout') }}"
                               onclick="event.preventDefault();
                                             document.getElementById('logout-form').submit();">
                                {{ __('Logout') }}
                            </a>

                            <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                                @csrf
                            </form>
                        </div>
                    </li>
                @endguest
            </ul> --}}
        {{-- </div> --}}
    </div>
</nav>
