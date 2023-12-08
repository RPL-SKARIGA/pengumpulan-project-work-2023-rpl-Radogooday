@extends('main')
@extends('partials.navbar')
@section('do.trade - Selling')
@section('content')

<link rel="stylesheet" href="{{ asset('css/sell.css') }}">

<div class="content" style="min-height: 1001px">
    <div class="container item p-5">
        <div class="row">
            @foreach ($inventoryItems as $item)
            <div class="col">
                <div class="single-new-trend mg-t-30">
                    <div class="card text-bg-dark" style="width: 17.5rem; margin-bottom: 25px">
                        <img src="{{ asset('storage/item-photo/' . $item->item->pic_item_dt) }}" class="card-img-top" alt="..." width="286" height="180">
                        <div class="card-body">
                            <p class="card-title"><b>{{ $item->item->nm_item_dt }}</b></p>
                            <p class="card-text">Quality: {{ $item->item->qual_item }} <br> Rarity: {{ $item->item->rty_item }} <br> Hero: {{ $item->item->hero }}</p>
                                @if ($item->item->is_sold == 'Sell')
                                    <form action="{{ route('user.keepItem', ['itemId' => $item->id_item_dt]) }}" method="POST">
                                        @csrf
                                        <button type="submit" class="btn btn-warning">Keep</button>
                                    </form>
                                @elseif ($item->item->is_sold == 'Keep')
                                    <form action="{{ route('user.inputPrice', ['itemId' => $item->id_item_dt]) }}" method="GET">
                                        @csrf
                                        @method('PUT')
                                        <button type="submit" class="btn btn-danger" data-bs-toggle="sell" data-bs-target="sellModal">Sell</button>
                                    </form>
                                @endif
                            </div>
                        </div>
                    </div>
                </div>        
                @endforeach
        </div>
    </div>
</div>

@endsection