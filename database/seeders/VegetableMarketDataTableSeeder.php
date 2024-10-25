<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class VegetableMarketDataTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('vegetable_market_data')->insert([
            [
                'year' => 102,
                'type' => '蔬菜類',
                'cate' => '蘿蔔',
                'plant_picture' => 10.87,
                'total_average_price' => 10.7,
                'total_yield' => 53996,
                'market' => '台北一',
                'average_price' => 11.5,
                'yield' => 19620,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'year' => 102,
                'type' => '蔬菜類',
                'cate' => '蘿蔔',
                'plant_picture' => 10.87,
                'total_average_price' => 10.7,
                'total_yield' => 53996,
                'market' => '三重區',
                'average_price' => 7.7,
                'yield' => 1861,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'year' => 102,
                'type' => '蔬菜類',
                'cate' => '蘿蔔',
                'plant_picture' => 10.87,
                'total_average_price' => 10.7,
                'total_yield' => 53996,
                'market' => '宜蘭市',
                'average_price' => 7.5,
                'yield' => 255,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'year' => 102,
                'type' => '蔬菜類',
                'cate' => '蘿蔔',
                'plant_picture' => 10.87,
                'total_average_price' => 10.7,
                'total_yield' => 53996,
                'market' => '桃園縣',
                'average_price' => 11.2,
                'yield' => 616,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'year' => 102,
                'type' => '蔬菜類',
                'cate' => '蘿蔔',
                'plant_picture' => 10.87,
                'total_average_price' => 10.7,
                'total_yield' => 53996,
                'market' => '台中市',
                'average_price' => 8.4,
                'yield' => 1822,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'year' => 102,
                'type' => '蔬菜類',
                'cate' => '蘿蔔',
                'plant_picture' => 10.87,
                'total_average_price' => 10.7,
                'total_yield' => 53996,
                'market' => '溪湖鎮',
                'average_price' => 9.2,
                'yield' => 1661,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'year' => 102,
                'type' => '蔬菜類',
                'cate' => '蘿蔔',
                'plant_picture' => 10.87,
                'total_average_price' => 10.7,
                'total_yield' => 53996,
                'market' => '南投市',
                'average_price' => 8.2,
                'yield' => 277,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'year' => 102,
                'type' => '蔬菜類',
                'cate' => '蘿蔔',
                'plant_picture' => 10.87,
                'total_average_price' => 10.7,
                'total_yield' => 53996,
                'market' => '西螺鎮',
                'average_price' => 9.7,
                'yield' => 14180,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'year' => 102,
                'type' => '蔬菜類',
                'cate' => '蘿蔔',
                'plant_picture' => 10.87,
                'total_average_price' => 10.7,
                'total_yield' => 53996,
                'market' => '高雄市',
                'average_price' => 16.8,
                'yield' => 2260,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'year' => 102,
                'type' => '蔬菜類',
                'cate' => '蘿蔔',
                'plant_picture' => 10.87,
                'total_average_price' => 10.7,
                'total_yield' => 53996,
                'market' => '台北二',
                'average_price' => 10.7,
                'yield' => 6248,
                'created_at' => now(),
                'updated_at' => now(),
            ],
        ]);
    }
}
