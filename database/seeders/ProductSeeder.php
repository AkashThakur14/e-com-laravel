<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class ProductSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        //
        DB::table('products')->insert([
          [
            'name'=>'Samsung phone',
            'price'=>'$250',
            'category'=>'mobile',
            'description'=>'A smartphone with 4gb ram and much more feature',
            'gallary'=>'https://m.media-amazon.com/images/W/MEDIAX_792452-T1/images/I/5134aj-bXnL._SX300_SY300_QL70_FMwebp_.jpg'
          ],
          [
            'name'=>'Oppo',
            'price'=>'$20',
            'category'=>'mobile',
            'description'=>'A smartphone with 8gb ram and much more feature',
            'gallary'=>'https://st3.depositphotos.com/7306286/14899/i/600/depositphotos_148992163-stock-photo-human-hand-holding-broken-oppo.jpg'
          ],
          [
            'name'=>'LG led',
            'price'=>'$300',
            'category'=>'TV',
            'description'=>'A smart TV with  more feature',
            'gallary'=>'https://4.imimg.com/data4/DP/VX/MY-17088056/lg-led-tv.jpg'
          ],
          [
            'name'=>'Samsung led',
            'price'=>'$500',
            'category'=>'TV',
            'description'=>'A smart TV with more feature',
            'gallary'=>'https://m.media-amazon.com/images/W/MEDIAX_792452-T2/images/I/71S8qt+K8hL._AC_UF1000,1000_QL80_.jpg'
          ],

        ]);
    }
}
