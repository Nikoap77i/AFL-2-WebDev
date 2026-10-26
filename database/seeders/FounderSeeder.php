<?php

namespace Database\Seeders;

use App\Models\Founder;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class FounderSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Founder::create([
            'name' => 'Nathanael Evan Purnomo',
            'description' => 'Nathanael Evan Purnomo adalah seorang pengusaha muda yang memiliki visi untuk menciptakan tempat nongkrong yang nyaman dan menyenangkan bagi semua orang. Dengan pengalaman dalam industri kopi dan manajemen bisnis, Nathanael berkomitmen untuk memberikan pelayanan terbaik dan kualitas produk yang unggul.',
            'image_path' => 'Founders/evan2derajat.jpeg'
        ]);

        Founder::create([
            'name' => 'Calvin',
            'description' => 'Calvin adalah seorang pengusaha muda yang memiliki visi untuk menciptakan tempat nongkrong yang nyaman dan menyenangkan bagi semua orang. Dengan pengalaman dalam industri kopi dan manajemen bisnis, Calvin berkomitmen untuk memberikan pelayanan terbaik dan kualitas produk yang unggul.',
            'image_path' => 'Founders/evan2derajat.jpeg'
        ]);

        Founder::create([
            'name' => 'Komang Wibisana',
            'description' => 'Komang Wibisana adalah seorang pengusaha muda yang memiliki visi untuk menciptakan tempat nongkrong yang nyaman dan menyenangkan bagi semua orang. Dengan pengalaman dalam industri kopi dan manajemen bisnis, Komang berkomitmen untuk memberikan pelayanan terbaik dan kualitas produk yang unggul.',
            'image_path' => 'Founders/evan2derajat.jpeg'
        ]);

        Founder::create([
            'name' => 'Samsut',
            'description' => 'Samsut adalah seorang pengusaha muda yang memiliki visi untuk menciptakan tempat nongkrong yang nyaman dan menyenangkan bagi semua orang. Dengan pengalaman dalam industri kopi dan manajemen bisnis, Samsut berkomitmen untuk memberikan pelayanan terbaik dan kualitas produk yang unggul.',
            'image_path' => 'Founders/evan2derajat.jpeg'
        ]);

        Founder::create([
            'name' => 'Kevin',
            'description' => 'Kevin adalah seorang pengusaha muda yang memiliki visi untuk menciptakan tempat nongkrong yang nyaman dan menyenangkan bagi semua orang. Dengan pengalaman dalam industri kopi dan manajemen bisnis, Kevin berkomitmen untuk memberikan pelayanan terbaik dan kualitas produk yang unggul.',
            'image_path' => 'Founders/evan2derajat.jpeg'
        ]);
    }
}
