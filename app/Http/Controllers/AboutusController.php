<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\AboutusPage;
use Illuminate\Http\Request;

class AboutusController extends Controller
{
    public function index()
    {
        $aboutus = AboutusPage::latest()->first();
        $images = [];
        if ($aboutus) {
            $images = array_filter([
                $aboutus->image1,
                $aboutus->image2,
                $aboutus->image3,
                $aboutus->image4,
                $aboutus->image5,
                $aboutus->image6,
            ]);
        }
        $points = [];

        if ($aboutus) {
            for ($i = 1; $i <= 5; $i++) {
                $points[] = [
                    'background' => $aboutus->{'background_point' . $i},
                    'header' => $aboutus->{'header_point' . $i},
                    'deskripsi' => $aboutus->{'deskripsi_point' . $i},
                ];
            }
        }

        $cards = [];

        if ($aboutus) {
            for ($i = 1; $i <= 6; $i++) {
                $cards[] = [
                    'image' => $aboutus->{'card' . $i},
                    'title' => $aboutus->{'title' . $i},
                    'desc' => $aboutus->{'deskripsi_card' . $i},
                ];
            }
        }

        return view('aboutus', compact('aboutus', 'images', 'points', 'cards'));
    }
}
