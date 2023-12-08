@extends('main')

<link rel="stylesheet" href="{{ asset('css/User/profile.css') }}">

<div class="content">
  <div class="container" style="max-width: 650px; min-height: 1001px">
      <div class="col d-flex p-4">
          <a href="/" class="back">
              <svg xmlns="http://www.w3.org/2000/svg" width="27" height="27" fill="currentColor" class="bi bi-arrow-left mx-3" viewBox="0 0 16 16">
                  <path fill-rule="evenodd" d="M15 8a.5.5 0 0 0-.5-.5H2.707l3.147-3.146a.5.5 0 1 0-.708-.708l-4 4a.5.5 0 0 0 0 .708l4 4a.5.5 0 0 0 .708-.708L2.707 8.5H14.5A.5.5 0 0 0 15 8"/>
              </svg>
          </a>
          History Transaction
      </div>

      @foreach($transactionHistory as $transaction)
      <a href="" style="text-decoration: none">
      <div class="card mt-3" style="width: 39rem;">
        <div class="card-header bg-success bg-opacity-25">
          <div class="text-success" style="text-align: center">Completed!</div>
        </div>
        <div class="card-body" style="background-color: #1e202e; color: white; border: white 1px solid">
          <p class="card-text">{{ $transaction->tanggal_transaksi }}</p>
          <hr>
          <h5 class="card-title">{{ $transaction->nm_item_dt }}</h5>
          <h6 class="card-text">Seller : {{ $transaction->nm_penjual }}</h6>
          <hr>
          <h6 class="card-text">Spent : <br> {{ $transaction->price }}</h6>
          {{-- <a href="#" class="btn btn-danger">Detail</a> --}}
        </div>
      </div>
      </a>
      @endforeach
  </div>
</div>
