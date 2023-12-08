@extends('main')
@section('title', 'Sign Up | do.trade')
@section('content')

<link rel="stylesheet" href="{{ asset('css/login.css') }}">

<section class="login-card-section">
  <div class="background-container container">
      <div class="row d-flex">
          <div class="mini-card px-4 py-3" style="width: 400px; height: 560px;">
              <div class="login-wrap lg-4 py-5">
                  <div class="img d-flex align-items-center justify-content-center">
                      <a href="/">
                        <img src="{{ asset('img/Laravel.png') }}" alt="header-card" class="header-card">
                      </a>
                  </div>
                  <h3 class="title text-center mb-0">REGISTER</h3>
                  <p class="desc-title text-center">Create account by entering information below</p>

                  <form action="{{ route('market.Register') }}" method="POST">
                      @csrf
                      
                      <div class="form-group">
                        <div class="icon d-flex align-items-center justify-content-center"><span class="fa fa-user"></span></div>
                        <input type="text" class="form-control <?= $errors->has('email') ? 'is-invalid' : '' ?>" placeholder="Email" name="email" value="{{ old('email') }}">
                        @if (count($errors) > 0)
                            <div class="div" style="color: white">
                              {{ $errors -> first('email') }}
                            </div>
                        @endif
                      </div>
                      
                      <div class="form-group">
                          <div class="icon d-flex align-items-center justify-content-center"><span class="fa fa-user"></span></div>
                          <input type="text" class="form-control <?= $errors->has('name') ? 'is-invalid' : '' ?>" placeholder="Username" name="name" value="{{ old('name') }}">
                          @if (count($errors) > 0)
                              <div class="div" style="color: white">
                                {{ $errors -> first('name') }}
                              </div>
                          @endif
                      </div>

                      <div class="form-group">
                          <div class="icon d-flex align-items-center justify-content-center"><span class="fa fa-lock"></span></div>
                          <input type="password" class="form-control <?= $errors->has('password') ? 'is-invalid' : '' ?>" placeholder="Password" name="password" value="{{ old('password') }}">
                          @if (count($errors) > 0)
                            <div class="div" style="color: white">
                                {{ $errors -> first('password') }}
                            </div>
                          @endif
                      </div>

                      <div class="form-group">
                      <button type="submit" class="btn form-control submit">Get Started</button>
                    </div>
                      
                  </form>

                  <div class="text-center text">
                      Don't have a account? <a class="link" href="{{ url('/login') }}">Register</a>
                  </div>

              </div>
          </div>
      </div>    
  </div>    
</section> 

@if ($messageInvalid = Session::get('failed')) 
    <script>
        Swal.fire({
        icon: "error",
        title: "Oops...",
        text: "{{ $messageInvalid }}",
    });
    </script>
@endif

@endsection