<?php

namespace App\Http\Controllers;

use App\Models\ItemDota;
use App\Models\User;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Routing\Controller as BaseController;
use Illuminate\Support\Facades\Auth;

class Controller extends BaseController
{
    use AuthorizesRequests, ValidatesRequests;

    function Index()
    {
        return view('Market/index');
    }

    function showBuyPage()
    {
        $itemsOnSale = ItemDota::where('is_sold', 'Sell')->get();
        return view('Market/buy', compact('itemsOnSale'));
    }

    function showSellPage()
    {
        $user = Auth::user();
        $inventoryItems = $user->inventories()->with('item')->get();

        return view('Market/sell', compact('inventoryItems'));
    }

    function showLoginPage()
    {
        return view('Market/login');
    }

    function showRegisterPage()
    {
        return view('Market/register');
    }

    function showMarketLock()
    {
        return view('market-lock');
    }
}
