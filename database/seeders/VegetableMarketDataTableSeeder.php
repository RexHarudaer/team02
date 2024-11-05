<?php

namespace Database\Seeders;

use Carbon\Carbon;
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
        $market = array('台北一', '三重區', '宜蘭市', '桃園縣', '台中市', '溪湖鎮', '南投市', '西螺鎮', '高雄市', '台北二');
        $types = ['蔬菜類' => ['蘿蔔', '胡蘿蔔', '馬鈴薯', '洋蔥', '洋菇', '蔥', '蒜', '薑', '蘆筍', '麻竹筍', '綠竹筍', '甘藍', '不結球白菜', '結球白菜', '芹菜', '花椰菜', '茄子', '胡瓜', '蕃茄', '辣椒', '甜椒', '豌豆', '菜豆', '毛豆'],
        '果品類' => ['香蕉', '鳳梨', '柳橙', '木瓜', '西瓜', '李', '芒果', '柿子', '桃子', '荔枝', '桶柑', '梅', '梨', '棗子', '椪柑', '番石榴', '楊桃', '葡萄', '葡萄柚', '柚子', '蓮霧', '龍眼', '檸檬'],
        '花卉類' => ['文心蘭', '康乃馨', '百合', '唐昌蒲', '火鶴', '玫瑰', '菊花'],
        '稻米及雜糧作物' => ['甘藷', '落花生']];
       
        for ($i=0; $i<500; $i++)
        {
            //$name = $firstNames[array_rand($firstNames)] . ' ' . $lastNames[array_rand($lastNames)];
            $selectedType = array_rand($types);
        // 根據類別選擇相應的植物名稱
        $selectedPlantName = $types[$selectedType][array_rand($types[$selectedType])];
            $random_datetime = Carbon::now()->subMinutes(rand(1, 55));
            //$birthdate = Carbon::now()->subYears(rand(48, 60))->subMonths(rand(0, 12))->subRealDays(rand(0,31));
           // $onboarddate = Carbon::now()->subYears(rand(18, 30))->subMonths(rand(0, 12))->subRealDays(rand(0,31));
        DB::table('vegetable_market_data')->insert([
            [
                'year' => rand(102, 105),
                'type' => $selectedType,
                'cate' => $selectedPlantName,
                'plant_picture' =>rand(5, 15),
                'total_average_price' => rand(5, 15),
                'total_yield' => rand(10000, 60000),
                'market' => $market[array_rand($market)] ,
                'average_price' => rand(5, 15),
                'yield' => rand(10000, 30000),
                'created_at' => $random_datetime,
                'updated_at' =>$random_datetime
            ],
            
        ]);
        }
    }
}
