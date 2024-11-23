<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\VegetableMarketData;

class VegetableMarketDataController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $vegetablemarketdata = VegetableMarketData::all();
        return view('vegetablemarketdata.index', compact('vegetablemarketdata'));
        //return $vegetabledata;
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        return view('team02.create', ['hideHeader' => true]);

    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
        // 驗證請求
    $request->validate([
        'year' => 'required',
        'type' => 'required',
        'cate' => 'required',
        'plant_picture' => 'required',
        'total_average_price' => 'required',
        'total_yield' => 'required',
        'market' => 'required',
        'average_price' => 'required',
        'yield' => 'required',
    ]);

    // 儲存數據到資料庫
    VegetableMarketData::create($request->all());

    // 返回列表頁並顯示成功訊息
    return redirect()->route('vegetablemarketdata.index')->with('success', '數據新增成功！');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
      // 根據 ID 取得資料
    $data = VegetableMarketData::find($id);
    // 傳遞資料到視圖
    //return view('team02.show', compact('data'));
    return view('team02.show', ['data' => $data, 'hideHeader' => true]);

    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
