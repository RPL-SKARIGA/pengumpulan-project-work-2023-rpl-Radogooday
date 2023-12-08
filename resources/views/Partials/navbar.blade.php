<link rel="stylesheet" href="{{ asset('css/navbar.css') }}">

<div class="navigation-bar">


  {{-- <div class="col-head justify-content-center d-flex items-center justify-center p-1 text-center text-sm">
    <div class="head-logo mx-2">
        <img class="mini-logo" src="{{ asset('img/Laravel-White.svg') }}">
    </div>
    <div class="head-title" style="color: white">
      Built with Laravel 10
    </div>
  </div> --}}
  
    <nav class="navbar navbar-expand">
  
      <div class="container">
  
        
        <div class="navbar-collapse text-center mt-4" style="text-align: center">
          <ul class="navbar-button">
            <li class="navbar-item">
              <a class="navbar-img" href="/" style="text-decoration: none; color: #f9322c; margin-right: 20px">
                do.trade
              </a>
            </li>
          </ul>
          <ul class="navbar-button">
            <li class="navbar-item">
              <a class="navbar-link text-center" href="{{ route('market.buyPage') }}" style="margin-right: 10px">Buy</a>
            </li>
          </ul>
  
          <ul class="navbar-button">
            @auth
              <li class="navbar-item">
                <a class="navbar-link" href="{{ route('market.sellPage') }}">Sell</a>
              </li>
            @else
              <li class="navbar-item">
                <a class="navbar-link" href="{{ route('market.locked') }}">Sell</a>
              </li>
            @endauth
          </ul>
        </div>
        
      <div class="log-button">
            @auth
                <li class="dropdown">
                  <a class="dropdown-toggle" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-person" viewBox="0 0 16 16">
                      <path d="M8 8a3 3 0 1 0 0-6 3 3 0 0 0 0 6m2-3a2 2 0 1 1-4 0 2 2 0 0 1 4 0m4 8c0 1-1 1-1 1H3s-1 0-1-1 1-4 6-4 6 3 6 4m-1-.004c-.001-.246-.154-.986-.832-1.664C11.516 10.68 10.289 10 8 10c-2.29 0-3.516.68-4.168 1.332-.678.678-.83 1.418-.832 1.664z"/>
                    </svg>
                    <?= Auth::user()->name ?>
                  </a>
                  <ul class="dropdown-menu">
                    <li><a class="dropdown-item" href="{{ route('user.Profile') }}">Profile</a></li>
                    <li><a class="dropdown-item" href="{{ route('user.Inventory') }}">Inventory</a></li>
                    <li><a class="dropdown-item" href="{{ route('history') }}">History</a></li>
                    
                    @if (Auth::user()->isAdmin == 1)
                      <li><a class="dropdown-item" href="{{ route('admin.Dashboard') }}">Dashboard</a></li>    
                    @endif

                    <li><hr class="dropdown-divider"></li>
                    <li><a class="dropdown-item" href="{{ route('market.Logout') }}" class="sign-btn-log">Logout</a></li>
                  </ul>
                </li>
            @else
              <li class="nav-btn">
                <a href="{{ route('market.loginPage') }}" class="sign-btn-log">Login</a>
              </li>
            @endauth
      </div>
      </div>
  </nav>

</div>

@if ($sessionEnd = Session::get('loginSuccess'))
    <script>
        Swal.fire({
        position: "top-end",
        icon: "success",
        title: "{{ $sessionEnd }}",
        showConfirmButton: false,
        timer: 1500
    });
    </script>
@endif