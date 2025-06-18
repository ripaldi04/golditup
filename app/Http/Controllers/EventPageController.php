<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\EventPage;
use Illuminate\Http\Request;

class EventPageController extends Controller
{
    public function index()
    {
        $event = EventPage::latest()->first();

        return view('event', compact('event', ));
    }
}
