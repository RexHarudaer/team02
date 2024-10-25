<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateVegetableMarketDataTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('vegetable_market_data', function (Blueprint $table) {
            $table->id(); // 自增主鍵
            $table->integer('year')->comment('年份'); // 年份
            $table->string('type')->comment('類別'); // 類別
            $table->string('cate')->comment('植物名稱'); // 植物名稱
            $table->double('plant_picture')->comment('植物圖片價格'); // 植物圖片價格
            $table->double('total_average_price')->comment('總平均價格'); // 總平均價格
            $table->integer('total_yield')->comment('總產量'); // 總產量
            $table->string('market')->comment('市場名稱'); // 市場名稱
            $table->double('average_price')->comment('市場的平均價格'); // 市場的平均價格
            $table->integer('yield')->comment('市場的產量'); // 市場的產量
            $table->timestamps(); // 自動生成的 created_at 和 updated_at 欄位
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('vegetable_market_data');
    }
}
