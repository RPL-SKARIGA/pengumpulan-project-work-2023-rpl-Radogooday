<?php

namespace App\Http\Controllers;

use App\Models\Inventory;
use App\Models\ItemDota;
use App\Models\Transaksi;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class MarketController extends Controller
{
    public function buyItem(Request $request, $itemId)
    {
        $buyer = Auth::user();
        $buyerName = Auth::user()->name;

        $item = ItemDota::findOrFail($itemId);

        $seller = $item->user;
        $sellerName = $item->user->name;

        if ($buyer->id_user === $seller->id_user) {
            return redirect()->back();
        }

        if ($buyer->balance < $item->price) {
            return redirect()->back()->with('error', 'Insufficient balance.');
        }

        $transaction = Transaksi::create([
            'id_penjual' => $seller->id_user,
            'nm_penjual' => $sellerName,
            'id_pembeli' => $buyer->id_user,
            'nm_pembeli' => $buyerName,
            'id_item_dt' => $item->id_item_dt,
            'nm_item_dt' => $item->nm_item_dt,
            'price' => $item->price,
            'tanggal_transaksi' => now(),
        ]);

        $seller->balance += $item->price;
        $seller->save();

        $buyer->balance -= $item->price;
        $buyer->save();

        $item->id_user = $buyer->id_user;
        $item->is_sold = 'Keep';
        $item->price = 0;
        $item->save();

        return redirect()->route('transaction', ['id' => $transaction->id_transaksi]);
    }
}
