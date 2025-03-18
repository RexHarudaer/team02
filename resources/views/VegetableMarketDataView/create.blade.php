@extends('app')
@section('contents')
{!! Form::open(['url' => 'VegetableMarketDataController/store'])!!}
@include('form', ['submitButtonText'=>'新增'])
@include('message.list')
{!! Form::close() !!}  
@endsection
