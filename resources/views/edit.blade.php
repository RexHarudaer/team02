@extends('app')
@section('contents')
{!!Form::model($VegetableMarketDataModels, ['method'=>'PATCH', 'action'=>['\App\Http\Controllers\VegetableMarketDataController@update', $VegetableMarketDataModels->id]])!!}
@include('form',['submitButtonText'=>'修改'])
@include('message.list')
{!!Form::close()!!} 
@endsection