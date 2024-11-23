<?php

namespace App\Http\Controllers\Client;

use App\Http\Controllers\Controller;
use Auth;
use Illuminate\Http\Request;

class RestaurantController extends Controller
{
    public function AllMenu()
    {
        $id = Auth::guard('client')->id();
        $menu = Menu::where('client_id', $id)->orderBy('id', 'desc')->get();
        return view('client.backend.menu.all_menu', compact('menu'));
    }
}
