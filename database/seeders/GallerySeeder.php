<?php

namespace Database\Seeders;

use App\Models\Gallery;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class GallerySeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Gallery::create([
            'title' => 'Foto 1',
            'image_path' => 'Galleries/fotoBareng1.jpg'
        ]);
        Gallery::create([
            'title' => 'Foto 2',
            'image_path' => 'Galleries/fotoBareng2.jpg'
        ]);
        Gallery::create([
            'title' => 'Video 1',
            'image_path' => 'Assets/Videos/VideoSatu2Derajat.mp4'
        ]);
        Gallery::create([
            'title' => 'Video 2',
            'image_path' => 'Assets/Videos/VideoDua2Derajat.mp4'
        ]);
        Gallery::create([
            'title' => 'Video 3',
            'image_path' => 'Assets/Videos/VideoTiga2Derajat.mp4'
        ]);
    }
}
