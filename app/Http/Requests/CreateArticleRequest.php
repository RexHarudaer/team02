<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class CreateArticleRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        return [
        'year'  => 'required|numeric|min:100|max:10000',
        'type' => 'required|string|min:1|max:190'  ,
        'cate'  => 'required|string|min:1|max:190' ,
        'plant_picture' => 'required|numeric|min:300|max:10000',
        'total_average_price' => 'required|numeric|min:100|max:14000' ,
        'total_yield' => 'required|numeric|min:60|max:300000' ,
        'market'  => 'required|string|min:1|max:190' ,
        'average_price' => 'required|numeric|min:1|max:26000',
        'yield' => 'required|numeric|min:100|max:65100',
        ];
    }
    public function messages()
    {
    return [
        'year.required'  => '年份為必填欄位。',
        'year.numeric'   => '年份必須是數字。',
        'year.min'       => '年份必須至少是 100。',
        'year.max'       => '年份不得超過 10000。',
        
        'type.required'  => '種類為必填欄位。',
        'type.string'    => '種類必須是文字。',
        'type.min'       => '種類最少需有 1 個字元。',
        'type.max'       => '種類最多只能有 190 個字元。',
        
        'cate.required'  => '分類為必填欄位。',
        'cate.string'    => '分類必須是文字。',
        'cate.min'       => '分類最少需有 1 個字元。',
        'cate.max'       => '分類最多只能有 190 個字元。',
        
        'plant_picture.required' => '作物圖片為必填欄位。',
        'plant_picture.numeric'  => '作物圖片必須是數字。',
        'plant_picture.min'      => '作物圖片的價格必須至少是 300。',
        'plant_picture.max'      => '作物圖片的價格不得超過 10000。',
        
        'total_average_price.required' => '平均總價為必填欄位。',
        'total_average_price.numeric'  => '平均總價必須是數字。',
        'total_average_price.min'      => '平均總價必須至少是 100。',
        'total_average_price.max'      => '平均總價不得超過 14000。',
        
        'total_yield.required' => '總產量為必填欄位。',
        'total_yield.numeric'  => '總產量必須是數字。',
        'total_yield.min'      => '總產量必須至少是 60。',
        'total_yield.max'      => '總產量不得超過 300000。',
        
        'market.required'  => '市場為必填欄位。',
        'market.string'    => '市場必須是文字。',
        'market.min'       => '市場最少需有 1 個字元。',
        'market.max'       => '市場最多只能有 190 個字元。',
        
        'average_price.required' => '平均價格為必填欄位。',
        'average_price.numeric'  => '平均價格必須是數字。',
        'average_price.min'      => '平均價格必須至少是 1。',
        'average_price.max'      => '平均價格不得超過 26000。',
        
        'yield.required' => '產量為必填欄位。',
        'yield.numeric'  => '產量必須是數字。',
        'yield.min'      => '產量必須至少是 100。',
        'yield.max'      => '產量不得超過 65100。',
    ];
    }

}
