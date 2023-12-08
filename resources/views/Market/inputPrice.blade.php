@extends('main')

<div class="content" style="background-color: #1e202e">
    <div class="container inv" style="max-width: 370px; min-height: 1001px">
        <div style="position: absolute; top: 27%">
            <div class="card text-bg-dark" id="sellModal" aroa-hidden="true" style="width: 18rem;">
                <!-- Detail item -->
                <img src="{{ asset('storage/item-photo/' . $item->pic_item_dt) }}" 
                    class="card-img-top"
                    alt="..."
                    width="286"
                    height="180"
                    data-item-image="{{ asset('storage/item-photo/' . $item->pic_item_dt) }}"
                    data-item-name="{{ $item->nm_item_dt }}"
                    data-item-id="{{ $item->id }}"
                >
    
                <div class="card-body">
                    <h5 class="card-title">{{ $item->nm_item_dt }}</h5>
                    <p class="card-text">
                        Quality  : {{ $item->qual_item }} <br> 
                        Rarity   : {{ $item->rty_item }} <br> 
                        Hero  : {{ $item->hero }} 
                    </p> 
                    <form action="{{ route('publishItem', ['itemId' => $item->id_item_dt]) }}" method="POST">
                        @csrf
                        <label for="basic-url" class="form-label">Insert Sell Price</label>
                        <input type="text" name="price" value="{{ $item->price }}" />
                        <button type="submit" class="btn btn-danger">Sell</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>