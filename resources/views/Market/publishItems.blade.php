@extends('main')
@extends('partials.navbar')
@section('do.trade - Selling')
@section('content')

<link rel="stylesheet" href="{{ asset('css/sell.css') }}">

<div class="content">
    <div class="container inv" style="max-width: 1440px; min-height: 863px">
        <div class="item-game p-5">
            <ul>
                {{-- @foreach ($inventoryItems as $item)
                    <form action="{{ route('publishItems', ['itemID' => $item->id_user]) }}" method="POST">
                        @csrf
                        <div class="card" style="width: 18rem;">
                            <img src="{{ asset('storage/item-photo/' . $item->item->pic_item_dt) }}" class="card-img-top" alt="..." width="286" height="180">
                            <div class="card-body">
                            <h5 class="card-title">{{ $item->item->nm_item_dt }}</h5>
                            <p class="card-text">Quality  : {{ $item->item->qual_item }} <br> Rarity   : {{ $item->item->rty_item }} </p>
                            <div class="form-check">
                                <select name="is_sold" id="is_sold">
                                    <option value="true">Sell</option>
                                    <option value="false">Keep</option>
                                </select>
                            </div>
                            <button type="submit">Sell</button>
                        </div>
                    @endforeach --}}

                    @foreach ($inventoryItems as $item)
                    <div class="card" style="width: 18rem;">
                        <!-- Card content here -->

                        <div class="card-body">
                            <!-- Card body content -->

                            <form action="{{ route('publishItem', ['itemId' => $item->id_item_dt]) }}" method="post">
                                @csrf
                                <div class="form-check">
                                    <label for="is_sold">Choose:</label>
                                    <select name="is_sold" id="is_sold">
                                        <option value="true">Sell</option>
                                        <option value="false">Keep</option>
                                    </select>
                                    <button type="submit">Publish</button>
                                </div>
                            </form>
                        </div>
                    </div>
                @endforeach
                </ul>
            </div>
        </form>
    </div>
</div>

@endsection