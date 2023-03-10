<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Menu;

class FrontendMenuController extends Controller
{
    public function index()
    {
        $menu = Menu::all();
        return view('pages.menus', compact('menu'));
    }

    public function show(Menu $menu)
    {
        return view('pages.menu-detail', compact('menu'));
    }
}
