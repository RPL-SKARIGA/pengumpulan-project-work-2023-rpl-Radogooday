@extends('main')
@extends('partials.navbar')
@section('content')

<link rel="stylesheet" href="{{ asset('css/buying-page.css') }}">
<style>
    .key {
        height: 80px;
        width: auto;
        justify-content: center;
        justify-items: center;
    }
</style>

<div class="background-container">
    <div class="content" style="min-height: 913px">
        <div style="position: absolute; top: 40%; left: 40%;">
            <div class="img-wrap d-flex justify-items-center">
                <img src="{{ asset('img/keys.svg') }}" class="key">
            </div>
            <div class="text">
                <h1>Market Closed!</h1>
            </div>
            <div class="mini-text">
                <p>you need login to access Sell page</p>
            </div>
        </div>
    </div>
</div>

@endsection