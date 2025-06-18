<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\BookContent;
use Illuminate\Http\Request;

class DetailbookController extends Controller
{
    public function index($id)
    {
        $book = BookContent::with('categoryContent')->findOrFail($id); // atau relasi lain jika ada
        return view('detail_book', compact('book'));
    }
}
