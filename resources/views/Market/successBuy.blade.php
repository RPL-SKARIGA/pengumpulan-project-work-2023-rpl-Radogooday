@extends('main')

<style>
    .content {
    position: relative;
    height: 100vh;
    display: grid;
    place-items: center;
    }

    .container {
        max-width: 563px;
        max-height: 863px;
        position: absolute;
        top: 50%;
        left: 50%;
        transform: translate(-50%, -50%);
        text-align: center;
    }
</style>

<div class="content" style="background-color: #13151d; color: white">
    <div class="container" style="max-width: 563px; max-height: 863px">
        <svg xmlns="http://www.w3.org/2000/svg" width="75" height="75" fill="currentColor" class="bi bi-bag-check-fill" viewBox="0 0 16 16" style="color: greenyellow" class="img">
            <path fill-rule="evenodd" d="M10.5 3.5a2.5 2.5 0 0 0-5 0V4h5zm1 0V4H15v10a2 2 0 0 1-2 2H3a2 2 0 0 1-2-2V4h3.5v-.5a3.5 3.5 0 1 1 7 0m-.646 5.354a.5.5 0 0 0-.708-.708L7.5 10.793 6.354 9.646a.5.5 0 1 0-.708.708l1.5 1.5a.5.5 0 0 0 .708 0l3-3z"/>
        </svg>
        <h1>Transaction Completed!</h1>
        <hr>

        <h2>Detail</h2>
        <h5>ID Transaction : {{ $transaction->id_transaksi }}</h5>
        <h5>Transaction Date : {{ $transaction->tanggal_transaksi }}</h5>

        <hr>
        <h2>Name</h2>
        <h5>Seller : {{ $transaction->nm_penjual }}</h5>
        <h5>Buyer : {{ $transaction->nm_pembeli }}</h5>

        <hr>
        <h2>Item Detail</h2>
        <p>Item Name : {{ $transaction->nm_item_dt }}</p>

        <hr>
        <h2>Price</h2>
        <p>{{ $transaction->price }}</p>

        <a href="/" class="btn bg-success bg-opacity-50" style="color: green">Confirm</a>
    </div>
</div>