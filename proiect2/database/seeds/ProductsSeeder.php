<?php

use Illuminate\Database\Seeder;

class ProductsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('products')->insert([
            'name' => 'Asus VivoBook',
            'desc'=>'VivoBook 15 (X1500, 11th gen Intel)',
            'description' => 'Sistem de operare - Windows 11 HomeCuloare - BlackAfisaj - FHD 15.6 inci, 60Hz, Luminozitate: 250 nitiProcesor - Intel Core i5-1135G7 Processor 2.4 GHz (8M Cache, up to 4.2 GHz, 4 cores)Placa video - Intel UHD GraphicsMemorie - 8 GB DDR4 on boardSpatiu de stocare - 512 GB SSD.',
            'photo' => 'https://lcdn.altex.ro/resize/media/catalog/product/K/5/2bd48d28d1c32adea0e55139a4e6434a/K513-OLED-Gold.jpg',
            'price' => 2940.88
        ]);
        DB::table('products')->insert([
            'name' => 'Samsung',
            'desc'=>'Televizor Samsung 55AU7172',
            'description' => 'Televizor Samsung 55AU7172
138 cm
Smart
4K Ultra HD
LED
Clasa G',
            'photo' => 'https://www.flanco.ro/media/catalog/product/cache/e53d4628cd85067723e6ea040af871ec/t/v/tv_samsung_ue65au7092uxxh_fata.jpg',
            'price' => 2940.88
        ]);
        DB::table('products')->insert([
            'name' => 'Samsung Lg',
            'desc'=>'Televizor OLED Smart LG 55A23LA',
            'description' => 'Televizor OLED Smart LG 55A23LA
Ultra HD 4K
HDR
139cm',
            'photo' => 'https://lcdn.altex.ro/resize/media/catalog/product/2/0/2bd48d28d1c32adea0e55139a4e6434a/2022_55_A2_A_1_Base.jpg',
            'price' => 5999.99
        ]);
        DB::table('products')->insert([
            'name' => 'Lg Led Smart',
            'desc'=>'Televizor LED SMART LG',
            'description' => 'Televizor LED SMART LG 55UQ70003LB
Ultra HD 4K
HDR
139cm',
            'photo' =>
                'https://lcdn.altex.ro/resize/media/catalog/product/u/q/2bd48d28d1c32adea0e55139a4e6434a/uq43bases.jpg',
            'price' => 2299.9
        ]);
        DB::table('products')->insert([
            'name' => 'iPhone 14 Pro Max',
            'desc'=>'Telefon mobil Apple iPhone 14 Pro Max',
            'description' => 'Telefon mobil Apple iPhone 14 Pro Max
1TB
5G
Deep Purple.',
            'photo' => 'https://s13emagst.akamaized.net/products/48592/48591242/images/res_ee69b28e2cc930d3bbdd088baaa92556.jpg?width=450&height=450&hash=7175C9CCBD2320BB1C2937B7BEFF8D5A',
            'price' => 9900
        ]);
        DB::table('products')->insert([
            'name' => 'iPhone 11 ',
            'desc'=>'iPhone 11 Pro Max',
            'description' => 'Telefon mobil Apple iPhone 11 Pro Max
256 GB
Gold',
            'photo' => 'https://encrypted-tbn1.gstatic.com/shopping?q=tbn:ANd9GcR2iskV5F9fwbqiXEh5FsBmBGCCKWqMqopV2DInU51vSYDyPY6clXxAiMSjtcD9GJXz7_97PzTyqA&usqp=CAc',
            'price' => 4300
        ]);
        DB::table('products')->insert([
            'name' => 'Lenovo',
            'desc'=>'LENOVO IdeaPad',
            'description' => 'IdeaPad 3 15ITL6
Intel Core i3 1115G4 pana la 4.1 GHz
15.6" Full HD
8GB
SSD 256GB
Intel UHD Graphics
Free Dos',
            'photo' => 'https://encrypted-tbn0.gstatic.com/shopping?q=tbn:ANd9GcT-M-UDvXSvwT04TfQ-5S1LZkRA8g02ChyFgTmXk2cc5pcVlgAFgvGl8Zgz1XtN9Q&usqp=CAc',
            'price' => 1599
        ]);
        DB::table('products')->insert([
            'name' => 'HP Pavilion Aero',
            'desc'=>'Laptop HP Pavilion Aero 13-be0031nq',
            'description' => 'HP Pavilion Aero 13-be0031nq
AMD Ryzen 5 5600U pana la 4.2 GHz
13.3"
WUXGA IPS
16GB
SSD 512GB
AMD Radeon Graphics',
            'photo'=>'https://encrypted-tbn2.gstatic.com/shopping?q=tbn:ANd9GcTH9jcxTL-xT4CNE51MI9HUXz1qjS0PkfdhgjmcNQEPnXWaxoGDQuuuK6ykZDQoj3OOxKINOBxyvw&usqp=CAc',
            'price' => 4799
        ]);
        DB::table('products')->insert([
            'name' => 'Asus Chromebook',
            'desc'=>'ASUS Chromebook Flip CX5 (CX5601, 12th Gen Intel)',
            'description' => 'Chrome OS
Procesor pana la Intel Core i7 de a 12-a generatie
Placa video pana la Intel Iris Xe
Pana la 16 GB memorie
Pana la 512 GB SSD
Display 16 WUXGA NanoEdge',
            'photo' => 'https://encrypted-tbn1.gstatic.com/shopping?q=tbn:ANd9GcSc5lp0B6t-Rb4BA-AW_wL2eaaGEXD0V-eQfzLXUKidvW1VRfe57mXg9Lh_DUUW&usqp=CAc',
            'price' => 3999.99
        ]);

        DB::table('products')->insert([
            'name' => 'Apple MacBook ',
            'desc'=>'Laptop Apple MacBook Pro 14',
            'description' => 'Apple MacBook Pro 14 (2021) cu procesor Apple M1 Pro
8 nuclee CPU and 14 nuclee GPU
16GB
512GB SSD
Space Grey
Int KB',
            'photo' => 'https://encrypted-tbn3.gstatic.com/shopping?q=tbn:ANd9GcT3qbWMVlkVIgCWWNmv_j5RVdEOIMmAU9yKPgbAiwEX69iBfMpjqt7AY8f55JCt6A&usqp=CAc',
            'price' => 9499.99
        ]);
    }
}
