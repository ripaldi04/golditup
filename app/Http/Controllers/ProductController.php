<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\BookContent;
use App\Models\EventContent;
use App\Models\MembershipContent;
class ProductController extends Controller
{
    public function index()
    {
        $books = BookContent::with('categoryContent')->latest()->take(10)->get();
        $memberships = MembershipContent::with('categoryContent')->latest()->take(10)->get();
        $events = EventContent::with('categoryContent')->latest()->take(10)->get();

        return view('product', compact('books', 'memberships','events'));
    }
}
