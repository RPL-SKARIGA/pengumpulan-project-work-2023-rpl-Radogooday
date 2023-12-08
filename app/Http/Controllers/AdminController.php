<?php

namespace App\Http\Controllers;

use App\Models\Inventory;
use App\Models\ItemDota;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AdminController extends Controller
{
    public function index()
    {
        $itemsOnSale = ItemDota::where('is_sold', 'Sell')->get();
        $users = User::paginate(5);
        $totalUsers = User::count();
        $userCount = User::where('isAdmin', '0')->count();
        $adminCount = User::where('isAdmin', '1')->count();
        return view('Admin/dashboard', [
            'users' => $users,
            'totalUsers' => $totalUsers,
            'userCount' => $userCount,
            'adminCount' => $adminCount,
            'itemsOnSale' => $itemsOnSale,
        ]);
    }

    public function userList()
    {
        $adminID = Auth::id();
        $users = User::paginate(10);
        $totalUsers = User::count();
        $userCount = User::where('isAdmin', '0')->count();
        $adminCount = User::where('isAdmin', '1')->count();
        return view('Admin/userList', [
            'users' => $users,
            'totalUsers' => $totalUsers,
            'userCount' => $userCount,
            'adminCount' => $adminCount,
        ]);
    }

    public function showUser($id)
    {
        $user = User::findOrFail($id);
        return view('admin.userList', ['user' => $user]);
    }

    public function edit($id)
    {
        $data = User::find($id);
        return view('Admin/editUser', compact('data'));
    }

    public function update(Request $request, $id)
    {
        $data = User::find($id);
        $data->name = $request->input('name');
        $data->email = $request->input('email');
        $data->isAdmin = $request->input('isAdmin');

        $data->save();
        return redirect('/admin/user-list');
    }

    public function delete($id)
    {
        $user = User::find($id);
        $user->delete();

        return redirect(route('admin.Dashboard'));
    }

    public function itemList()
    {
        $itemsOnSale = ItemDota::where('is_sold', 'Sell')->get();
        $adminID = Auth::id();
        $users = User::paginate(10);
        $totalUsers = User::count();
        $userCount = User::where('isAdmin', '0')->count();
        $adminCount = User::where('isAdmin', '1')->count();
        return view('Admin/itemList', [
            'users' => $users,
            'totalUsers' => $totalUsers,
            'userCount' => $userCount,
            'adminCount' => $adminCount,
            'itemsOnSale' => $itemsOnSale,
        ]);
    }

    public function deleteItem($id)
    {
        $item = ItemDota::find($id);
        $item->delete();

        return redirect()->back();
    }
}
