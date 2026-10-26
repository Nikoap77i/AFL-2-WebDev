<?php

namespace Database\Seeders;

use App\Models\Testimony;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class TestimonySeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Testimony::create([
            'name' => 'Komang Wibisana',
            'comment' => 'Tempatnya cozy banget, cocok buat nongkrong bareng temen!',
            'rating' => 5,
            'image_path' => 'Testimonies/komangwibi.jpeg',
            'is_featured' => true
        ]);
        Testimony::create([
            'name' => 'Samsut',
            'comment' => 'Pelayanannya ramah dan kopinya enak enak semua!',
            'rating' => 5,
            'image_path' => 'Testimonies/samsut.jpeg',
            'is_featured' => true
        ]);
    }
}
