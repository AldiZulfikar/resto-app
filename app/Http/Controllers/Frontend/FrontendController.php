<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Category;
use App\Models\Menu;

class FrontendController extends Controller
{
    public function index()
    {
        $categories = Category::all();
        $menu = Menu::all();
        return view('pages.homepage', compact('categories', 'menu'));
    }
}
