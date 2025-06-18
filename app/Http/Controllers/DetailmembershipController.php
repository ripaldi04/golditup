<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\MembershipContent;
use Illuminate\Http\Request;

class DetailmembershipController extends Controller
{
    public function index($id)
    {
        $membership = MembershipContent::with('categoryContent')->findOrFail($id); // atau relasi lain jika ada
        return view('detail_class', compact('membership'));
    }
}
