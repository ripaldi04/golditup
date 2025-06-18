<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\MembershipContent;
use Illuminate\Http\Request;

class MembershipController extends Controller
{
    public function index()
    {
        $memberships = MembershipContent::with('categoryContent')->latest()->take(10)->get();

        return view('product', compact('memberships'));
    }

}
