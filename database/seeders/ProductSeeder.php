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
        DB::table('products')->insert([
        //     'name'=>'Videocon',
        //     'price'=>'20000',
        //     'category'=>'TV',
        //      'gallary'=>'https://i.gadgets360cdn.com/products/televisions/large/1548154937_832_videocon_42-inch-led-full-hd-tv-vnw42fh58saf.jpg?downsize=*:420&output-quality=80'  ,
        //     'description'=>'a SmartTv with Smart Looks and much more feature'
        // ],
        // [
        //     'name'=>'Vivo V3',
        //     'price'=>'15000',
        //     'category'=>'mobile', 
        //     'gallary' =>'https://m.media-amazon.com/images/I/51PRbrSvmML.jpg',
        //     'description'=>'a smartphone with 6gb ram and much more feature'
        // ],
        
            'name'=>'Fridge',
            'price'=>'25000',
            'category'=>'Double Door Fridge ',
             'gallary'=>'https://media-ik.croma.com/prod/https://media.croma.com/image/upload/v1673263461/Croma%20Assets/Large%20Appliances/Refrigerator/Images/224939_0_kx1cil.png?tr=w-640', 
            'description'=>'a fridge with double door and much more feature'
        ],
        

        );
    }
}
