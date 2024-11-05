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
      for ($i = 0; $i < 25; $i++)
      {
        $years = [102, 103];
        $markets = ['三重市', '三重區', '台中市', '台中市場', '台北一', '台北二', '台北市場', '台東市', '台南市場', '永靖鄉', '西螺鎮', '宜蘭市', '東勢區', '東勢鎮', '花蓮市', '南投市', '屏東市', '桃園縣', '高雄市', '高雄市場', '溪湖鎮', '嘉義市', '彰化市場', '鳳山市', '鳳山區'];
        $types = ['蔬菜類' => ['蘿蔔', '胡蘿蔔', '馬鈴薯', '洋蔥', '洋菇', '蔥', '蒜', '薑', '蘆筍', '麻竹筍', '綠竹筍', '甘藍', '不結球白菜', '結球白菜', '芹菜', '花椰菜', '茄子', '胡瓜', '蕃茄', '辣椒', '甜椒', '豌豆', '菜豆', '毛豆'],
        '果品類' => ['香蕉', '鳳梨', '柳橙', '木瓜', '西瓜', '李', '芒果', '柿子', '桃子', '荔枝', '桶柑', '梅', '梨', '棗子', '椪柑', '番石榴', '楊桃', '葡萄', '葡萄柚', '柚子', '蓮霧', '龍眼', '檸檬'],
        '花卉類' => ['文心蘭', '康乃馨', '百合', '唐昌蒲', '火鶴', '玫瑰', '菊花'],
        '稻米及雜糧作物' => ['甘藷', '落花生']];
        $selectedType = array_rand($types);
        // 根據類別選擇相應的植物種類名稱
        $selectedPlantName = $types[$selectedType][array_rand($types[$selectedType])];
        DB::table('vegetable_market_data')->insert([
            [
                'year' => $years[array_rand($years)],
                'type' => $selectedType,
                'cate' => $selectedPlantName,
                'plant_picture' => number_format(rand(368, 9953) / 100, 2),
                'total_average_price' =>number_format(rand(880, 13490) / 100, 1),
                'total_yield' =>  rand(60, 207530),
                'market' => $markets[array_rand($markets)],
                'average_price' => number_format(rand(0, 26190) / 100, 1),
                'yield' => rand(0, 63109),
                'created_at' => now(),
                'updated_at' => now(),
            ]
        ]);
      }
    }
        
}
