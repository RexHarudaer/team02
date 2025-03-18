<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class CreatDemoRequest extends FormRequest
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
            'year' => 'required|numeric|max:5000',
            'type'=> 'required|string|max:200',
            'cate'=> 'required|string|max:200',
            'plant_picture'=> 'required|numeric|max:100000',
            'total_average_price'=> 'required|numeric|max:100000',
            'total_yield'=> 'required|numeric|max:100000',
            'market'=> 'required|string|max:200',
            'average_price'=> 'required|numeric|max:100000',
            'yield'=> 'required|numeric|max:100000'
        ];
    }
    public function messages()
    {
        return[
           'year.required' => '請填入年分',
            'year.numeric' => '年分請填入數字。',
            'type.required'=> '種類不得為空',
            'cate.required'=> '作物不得為空',
            'plant_picture.required'=> '請填入產地價格',
            'plant_picture.numeric'=> '產地價格請填入數字',
            'total_average_price.required' => '請填入總平均價',
            'total_average_price.numeric' => '總平均價請填入數字。',
            'total_yield.required' => '請填入總交易量',
            'total_yield.numeric' => '總交易量請填入數字。',
            'market.required'=> '請填入市場',
            'average_price.required' => '請填入平均價',
            'average_price.numeric' => '平均價請填入數字。',
            'yield.required' => '請填入交易量',
            'yield.numeric' => '交易量請填入數字。',
        ];
    }
}
