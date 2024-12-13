@extends('app')
@section('contents')
{!! Form::open(['url' => 'VegetableMarketDataController/store'])!!}
  <div class = "form-group">
    {!! Form::label('year', '年份:')!!}
    {!! Form::text('year', null, ['class'=> 'form-control'])  !!}
  </div>
  <div>
    {!! Form::label('type', '種類:')!!}
    {!! Form::text('type', null, ['class'=> 'form-control'])  !!}
  </div>  
  <div class = "form-group">
    {!! Form::label('cate', '作物:')!!}
    {!! Form::text('cate', null, ['class'=> 'form-control'])  !!}
  </div>  
  <div class = "form-group">
    {!! Form::label('plant_picture', '產地價格(元/公斤):')!!}
    {!! Form::text('plant_picture', null, ['class'=> 'form-control'])  !!}
  </div>  
  <div class = "form-group">
    {!! Form::label('total_average_price', '總平均價(元/公斤):')!!}
    {!! Form::text('total_average_price', null, ['class'=> 'form-control'])  !!}
  </div>  
  <div class = "form-group">
    {!! Form::label('total_yield', '總交易量(公噸):')!!}
    {!! Form::text('total_yield', null, ['class'=> 'form-control'])  !!}
  </div>  
  <div class = "form-group">
    {!! Form::label('market', '市場:')!!}
    {!! Form::text('market', null, ['class'=> 'form-control'])  !!}
  </div>  
  <div class = "form-group">
    {!! Form::label('average_price', '平均價(元/公斤):')!!}
    {!! Form::text('average_price', null, ['class'=> 'form-control'])  !!}
  </div>  
  <div class = "form-group">
    {!! Form::label('yield', '交易量(公噸):')!!}
    {!! Form::text('yield', null, ['class'=> 'form-control'])  !!}
  </div>    
  <div class="form-group">
    {!! Form::submit("新增",['class' => 'btn btn-primary form-control']) !!}
  </div>
  {!! Form::close() !!}  
@endsection