<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class FrontendReservationController extends Controller
{
    public function stepOne()
    {
        return view('pages.menus');
    } 
}
