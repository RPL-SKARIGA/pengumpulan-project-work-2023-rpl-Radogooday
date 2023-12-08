@extends('main')
@extends('partials.navbar')
@section('title', 'Buying Page | do.trade')
@section('content')

<link rel="stylesheet" href="{{ asset('css/buying-page.css') }}">

<div class="content" style="min-height: 1001px">
    <div class="container item p-5">
        <div class="row">
            @foreach ($itemsOnSale as $item)
            <div class="col">
                <div class="single-new-trend mg-t-30">
                    <div class="card text-bg-dark" style="width: 17.5rem; margin-bottom: 25px">
                        <img src="{{ asset('storage/item-photo/' . $item->pic_item_dt) }}" class="card-img-top" alt="..." width="286" height="180">
                        <div class="card-body">
                            <p class="card-title"><b>{{ $item->nm_item_dt }}</b></p>
                            <p class="card-text">Quality: {{ $item->qual_item }} <br> Rarity: {{ $item->rty_item }} <br> Hero: {{ $item->hero }} <br> Price: {{ $item->price }} </p>
                            <div class="seller-info"  style="max-height: 24px">
                                <p class="card-text"><b>Seller: {{ $item->user->name }}</b></p>
                                @if(Auth::check() && $item->id_user !== Auth::user()->id_user)
                                    <form action="{{ route('buyItem', ['itemId' => $item->id_item_dt]) }}" method="post">
                                        @csrf
                                        <button class="btn btn-danger" type="submit">Beli</button>
                                    </form>
                                @endif
                            </div>
                        </div>
                    </div>
                </div>
            </div>        
            @endforeach
        </div>
    </div>
</div>

@endsection