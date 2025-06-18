<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\HomePage;
use Illuminate\Http\Request;

class HomePageController extends Controller
{
    public function index()
    {
        $dashboard = HomePage::latest()->first();
        $banner1 = $dashboard?->banner1;
        $banner2 = $dashboard?->banner2;
        return view('dashboard', compact('dashboard', 'banner1', 'banner2'));
    }
}
