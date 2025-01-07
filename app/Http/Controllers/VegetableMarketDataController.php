<?php

namespace App\Http\Controllers;

use App\Models\VegetableMarketDataModel;
use App\Http\Requests\CreatDemoRequest;
use Illuminate\Http\Request;

class VegetableMarketDataController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function __construct()
    {
        $this->middleware('auth');
    }
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
       
        return view("VegetableMarketDataView.create");
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(\App\Http\Requests\CreatDemoRequest $request)
    {
       
        VegetableMarketDataModel::create($request->all());
        return redirect('VegetableMarketDataController');
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
      

        //$team = Team::findOrFail($id);
       // return view('teams.edit', ['team'=>$team]);
        $VegetableMarketDataModels = VegetableMarketDataModel::findOrFail($id);
        return view('edit')->with('VegetableMarketDataModels',$VegetableMarketDataModels);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(\App\Http\Requests\CreatDemoRequest $request, $id)
    {
        $VegetableMarketDataModels = VegetableMarketDataModel::findOrFail($id);
        
        $data  = $request -> only([
           'year',
            'type',
            'cate',
            'plant_picture',
            'total_average_price',
            'total_yield',
            'market',
            'average_price',
            'yield'
        ]);

        $VegetableMarketDataModels->fill($data);
        $VegetableMarketDataModels->save();
        return redirect('VegetableMarketDataController');
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
