@extends('main')
@include('partials.navbar')
@section('content')

<link rel="stylesheet" href="{{ asset('css/User/inventory.css') }}">

    <div class="content" style="min-height: 1001px">
        <div class="container item p-5">
            <a href="{{ route('user.newItem') }}" class="btn btn-danger mt-3 mb-3">Input New Item</a>
            <div class="row">
                @foreach ($inventoryItems as $item)
                <div class="col">
                    <div class="single-new-trend mg-t-30">
                        <div class="card text-bg-dark" style="width: 17.5rem; margin-bottom: 25px">
                            <img src="{{ asset('storage/item-photo/' . $item->item->pic_item_dt) }}" class="card-img-top" alt="..." width="286" height="180">
                            <div class="card-body">
                                <p class="card-title"><b>{{ $item->nm_item_dt }}</b></p>
                                <p class="card-text">Quality  : {{ $item->item->qual_item }} <br> Rarity   : {{ $item->item->rty_item }} <br> hero    : {{ $item->item->hero }} </p>
                                <a href="{{ route('user.deleteItem', $item->item->id_item_dt) }}" class="btn btn-danger">Delete</a>
                            </div>
                        </div>
                    </div>
                </div>        
                @endforeach
            </div>
        </div>
    </div>
@endsection