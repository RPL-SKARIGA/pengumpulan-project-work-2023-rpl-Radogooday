<?php

namespace App\Http\Controllers;

use App\Models\Inventory;
use App\Models\ItemCSGO;
use App\Models\ItemDota;
use App\Models\Transaksi;
use App\Models\User;
use Illuminate\Contracts\Validation\Rule;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Storage;
use Illuminate\Validation\Rule as ValidationRule;

class UserController extends Controller
{
    function index()
    {
        return view('User/profile');
    }

    public function update(Request $request)
    {
        $user = Auth::user();

        $request->validate([
            'name' => 'required',
            'email' => 'required',
            'photo' => 'image|mimes:jpeg,png,jpg,gif|max:2048',
        ]);

        $user->name = $request->name;
        $user->email = $request->email;
        $user->number = $request->number;
        $user->gender = $request->gender;

        $oldPhoto = $user->photo;

        if ($request->hasFile('photo')) {
            $image = $request->file('photo');
            $fileName = time() . '_' . $image->getClientOriginalName();
            $image->storeAs('public/photo', $fileName);

            if ($oldPhoto && $oldPhoto !== 'blank.jpg') {
                Storage::delete('public/photo/' . $oldPhoto);
            }

            $user->photo = $fileName;

            // @phpstan-ignore-next-line
            $user->save();
        }


        return redirect()->back();
    }

    public function inventory()
    {
        $user = Auth::user();
        $inventoryItems = $user->inventories()->with('item')->get();

        return view('User/inventory', compact('inventoryItems'));
    }

    public function newItem()
    {
        return view('User/newItem');
    }

    public function insertItem(Request $request)
    {
        $user = Auth::user();

        $request->validate([
            'nm_item_dt' => 'required',
            'pic_item_dt' => 'required|image|mimes:jpeg,png,jpg,gif|max:2048',
            'hero' => 'required',
        ]);

        if ($request->hasFile('pic_item_dt')) {
            $image = $request->file('pic_item_dt');
            $imageName = time() . '_' . $image->getClientOriginalName();
            $image->storeAs('public/item-photo/' . $imageName);
        }

        $item = $user->items()->create([
            'nm_item_dt' => $request->nm_item_dt,
            'pic_item_dt' => $imageName,
            'qual_item' => $request->qual_item,
            'rty_item' => $request->rty_item,
            'hero' => $request->hero,
        ]);

        $user->inventories()->create([
            'id_item_dt' => $item->id_item_dt,
        ]);

        return redirect(route('user.Inventory'));
    }

    public function itemDetail()
    {
        return view('User/itemDetail');
    }

    public function delete($itemId)
    {
        $item = Inventory::find($itemId);
        $item->item->delete();
        $item->delete();

        return redirect()->route('user.Inventory');
    }

    public function inputPrice($itemId)
    {
        $item = ItemDota::findOrFail($itemId);

        return view('Market/inputPrice', compact('item'));
    }

    public function publishItem(Request $request, $itemId)
    {
        $item = ItemDota::find($itemId);

        if ($item) {
            $item->is_sold = 'Sell';

            $priceUp = $request->input('price');
            if ($priceUp !== null) {
                $item->price = $priceUp;
            }

            $item->save();
        }

        return redirect(route('market.sellPage'));
    }

    public function keepItem(Request $request, $itemId)
    {
        $item = ItemDota::find($itemId);

        if ($item && $item->is_sold === 'Sell') {
            // Mengubah status item menjadi 'Keep'
            $item->is_sold = 'Keep';

            $priceUp = $request->input('price');
            if ($priceUp !== null) {
                $item->price = $priceUp;
            }

            $item->save();
        }

        return redirect()->back();
    }


    public function showTransactionDetail($id)
    {
        $transaction = Transaksi::findOrFail($id);

        return view('Market/successBuy', ['transaction' => $transaction]);
    }

    public function showTransaction()
    {
        $user = Auth::user();

        $transactionHistory = Transaksi::where('id_penjual', $user->id_user)
            ->orWhere('id_pembeli', $user->id_user)
            ->orderBy('tanggal_transaksi', 'desc')
            ->get();

        return view('Market/History', ['transactionHistory' => $transactionHistory]);
    }
}
