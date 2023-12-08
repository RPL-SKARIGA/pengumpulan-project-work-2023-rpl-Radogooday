@extends('main')
@extends('partials.navbar')
@section('title', 'do.trade')
@section('content')

<link rel="stylesheet" href="{{ asset('css/index.css') }}">
<link rel="stylesheet" href="{{ asset('fonts/font.css') }}">

<div class="background-container">
    <div class="container">
        <div class="row d-flex justify-content-center">
            <div class="col md-6 lg-4">
                <div class="login-wrap py-5">

                    <div class="img d-flex align-items-center justify-content-center" style="margin-top: 200px">
                        <img src="{{ asset('img/logo2.svg') }}" alt="header-card" class="header-card d-inline-block align-text-top" width="120" height="120">
                    </div>

                    <div class="headline d-flex align-items-center justify-content-center">
                        <h1 class="text-center mb-5 mt-3">a website for buy and sell<br>cosmetics item Dota 2</h1>
                    </div>
                    
                    <div class="subHeadline d-flex align-items-center justify-content-center">
                        <p class="text-center">Sell and buy the items easier and faster on do.trade <br> Without worrying about being scammed</p>
                    </div>
                    
                </div>
            </div>
        </div>
    </div>
</div>

@if ($loginSuccess = Session::get('loginSuccess')) 
<script>
    Swal.fire({
    position: "top-end",
    icon: "success",
    title: {{ $loginSuccess }},
    showConfirmButton: false,
    timer: 1500
});
</script>
@endif

@if ($accessDenied = Session::get('accessDenied')) 
    <script>
        Swal.fire({
        icon: "error",
        title: "Oops...",
        text: "{{ $accessDenied }}",
    });
    </script>
@endif

@endsection