<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\EventContent;
use Carbon\Carbon;
use Illuminate\Http\Request;

class DetaileventController extends Controller
{
    public function index($id)
    {
        Carbon::setLocale('id'); // bisa set locale di sini jika perlu
        $event = EventContent::with('categoryContent')->findOrFail($id); // atau relasi lain jika ada
        return view('detail_event', compact('event'));
    }
}
