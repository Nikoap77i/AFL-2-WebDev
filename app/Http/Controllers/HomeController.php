<?php

namespace App\Http\Controllers;

use App\Models\Gallery;
use App\Models\Menu;
use App\Models\Testimony;

class HomeController extends Controller
{
    public function index()
    {
        return view('pages.home', [
            // YouTube video IDs: the part after "v=" in a watch URL.
            // Replace these placeholders with your own videos.
            'heroVideo' => 'Assets/Videos/VideoDua2Derajat.mp4',
            'videos'    => [
                'Assets/Videos/VideoSatu2Derajat.mp4',
                'Assets/Videos/VideoTiga2Derajat.mp4'
            ],

            'photos'      => Gallery::latest()->take(5)->get(),

            // "Menu Favorit": the 4 newest items. To hand-pick, add an `is_favorite` column.
            'menus'      => Menu::latest()->take(4)->get(),
            'categories' => Menu::CATEGORIES,


            // Only some testimonies on the home page.
            // To hand-pick them, add an `is_featured` column and use ->where('is_featured', true)
            'testimonies' => Testimony::latest()->where('is_featured', true)->take(2)->get(),
        ]);
    }
}
