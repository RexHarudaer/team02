<?php

namespace App\Http\Controllers;

use App\Models\VegetableMarketDataModel;
use Illuminate\Http\Request;

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
        $VegetableMarketDataModels = VegetableMarketDataModel::all();
        //return view('VegetableMarketDataView.index',compact('VegetableMarketDataModels'));
        return view('VegetableMarketDataView.index')->with('VegetableMarketDataModels',$VegetableMarketDataModels);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
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
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $VegetableMarketDataModels = VegetableMarketDataModel::findOrFail($id);
        return view('show')->with('VegetableMarketDataModels',$VegetableMarketDataModels);
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
        $VegetableMarketDataModels = VegetableMarketDataModel::findOrFail($id);
        $VegetableMarketDataModels -> delete();
        return redirect('VegetableMarketDataController');
    }
}
