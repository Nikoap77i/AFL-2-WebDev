<?php

namespace Database\Seeders;

use App\Models\Menu;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class MenuSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Menu::create([
            'name' => 'Butterscotch',
            'category' => 'drink',
            'description' => 'Espresso dengan susu segar dicampur dengan sirup butterscotch.',
            'price' => 17000.00,
            'image_path' => 'menus/butterscotch.jpg'
        ]);
            
        Menu::create([
            'name' => 'Berry Americano',
            'category' => 'drink',
            'description' => 'Americano yang dipadukan dengan sirup rasa berry.',
            'price' => 16000.00,
            'image_path' => 'menus/berryAmericano.jpg'
        ]);
        Menu::create([
            'name' => 'Kopi Susu',
            'category' => 'drink',
            'description' => 'Espresso dengan susu segar dicampur dengan sirup butterscotch.',
            'price' => 15000.00,
            'image_path' => 'menus/kopiSusu.jpg'
        ]);
        Menu::create([
            'name' => 'Americano',
            'category' => 'drink',
            'description' => 'Espresso yang dicampur dengan air dan es.',
            'price' => 12000.00,
            'image_path' => 'menus/Americano.jpg'
        ]);
        Menu::create([
            'name' => 'Air Mineral',
            'category' => 'drink',
            'description' => 'Air mineral segar.',
            'price' => 5000.00,
            'image_path' => 'menus/airMineral.jpg'
        ]);
        Menu::create([
            'name' => 'Es Coklat',
            'category' => 'drink',
            'description' => 'Minuman coklat dingin yang lezat.',
            'price' => 17000.00,
            'image_path' => 'menus/esCoklat.jpg'
        ]);
        Menu::create([
            'name' => 'Salted Caramel Latte',
            'category' => 'drink',
            'description' => 'Espresso dengan susu segar dicampur dengan sirup salted caramel.',
            'price' => 17000.00,
            'image_path' => 'menus/saltedCaramelLatte.jpg'
        ]);
        Menu::create([
            'name' => 'Ube Tiramisu ',
            'category' => 'drink',
            'description' => 'Minuman berbasis ube dengan tiramisu.',
            'price' => 17000.00,
            'image_path' => 'menus/ubeTiramisu.jpg'
        ]);
        Menu::create([
            'name' => 'Kopi Susu Gula Aren',
            'category' => 'drink',
            'description' => 'Espresso dengan susu segar dicampur dengan gula aren.',
            'price' => 17000.00,
            'image_path' => 'menus/kopiSusuGulaAren.jpg'
        ]);
        Menu::create([
            'name' => 'Roti Bakar Coklat',
            'category' => 'food',
            'description' => 'Roti bakar dengan coklat.',
            'price' => 16000.00,
            'image_path' => 'menus/rotiBakarCoklat.jpg'
        ]);
        Menu::create([
            'name' => 'Roti Bakar Keju',
            'category' => 'food',
            'description' => 'Roti bakar dengan keju.',
            'price' => 16000.00,
            'image_path' => 'menus/rotiBakarKeju.jpg'
        ]);
        Menu::create([
            'name' => 'Roti Bakar Coklat Keju',
            'category' => 'food',
            'description' => 'Roti bakar dengan coklat dan keju.',
            'price' => 18000.00,
            'image_path' => 'menus/rotiBakarCoklatKeju.jpg'
        ]);
        Menu::create([
            'name' => 'Indomie Single Goreng',
            'category' => 'food',
            'description' => 'Indomie goreng klasik.',
            'price' => 8000.00,
            'image_path' => 'menus/indomieSingleGoreng.jpg'
        ]);
        Menu::create([
            'name' => 'Indomie Single Kuah',
            'category' => 'food',
            'description' => 'Indomie kuah klasik.',
            'price' => 8000.00,
            'image_path' => 'menus/indomieSingleKuah.jpg'
        ]);
        Menu::create([
            'name' => 'Indomie Double Goreng',
            'category' => 'food',
            'description' => 'Indomie goreng double klasik.',
            'price' => 12000.00,
            'image_path' => 'menus/indomieDoubleGoreng.jpg'
        ]);
        Menu::create([
            'name' => 'Indomie Double Kuah',
            'category' => 'food',
            'description' => 'Indomie kuah double klasik.',
            'price' => 12000.00,
            'image_path' => 'menus/indomieDoubleKuah.jpg'
        ]);
        Menu::create([
            'name' => 'Roti Maryam Polos',
            'category' => 'food',
            'description' => 'Roti maryam klasik.',
            'price' => 8000.00,
            'image_path' => 'menus/rotiMaryamPolos.jpg'
        ]);
        Menu::create([
            'name' => 'Roti Maryam Coklat',
            'category' => 'food',
            'description' => 'Roti maryam dengan coklat.',
            'price' => 10000.00,
            'image_path' => 'menus/rotiMaryamCoklat.jpg'
        ]);
        Menu::create([
            'name' => 'Roti Maryam Kari',
            'category' => 'food',
            'description' => 'Roti maryam dengan kari.',
            'price' => 10000.00,
            'image_path' => 'menus/rotiMaryamKari.jpg'
        ]);
        Menu::create([
            'name' => 'Oatmilk',
            'category' => 'addon_drink',
            'description' => 'Tukar susu dengan oatmilk.',
            'price' => 2000.00,
            'image_path' => 'menus/oatmilk.jpg'
        ]);
        Menu::create([
            'name' => 'Telur',
            'category' => 'addon_food',
            'description' => 'Tambahan telur untuk makanan anda.',
            'price' => 3500.00,
            'image_path' => 'menus/telur.jpg'
        ]);
    }
}
