@extends('team02.app')

@section('title', '新增蔬菜數據')

@section('content')
    <h1>新增蔬菜數據</h1>
    @include('message.list')
   {!! Form::open(['url' => 'vegetablemarketdata/store']) !!}
   <div class="form-group">
    {!! Form::label('year','年份') !!}
    {!! Form::text('year',null, ['class' => 'form-control']) !!}
   </div>
   <div class="form-group">
    {!! Form::label('type','種類') !!}
    {!! Form::text('type',null, ['class' => 'form-control']) !!}
   </div>
   <div class="form-group">
    {!! Form::label('cate','分類') !!}
    {!! Form::text('cate',null, ['class' => 'form-control']) !!}
   </div>
   <div class="form-group">
    {!! Form::label('plant_picture','作物圖片價格') !!}
    {!! Form::text('plant_picture',null, ['class' => 'form-control']) !!}
   </div>
   <div class="form-group">
    {!! Form::label('total_average_price','平均總價') !!}
    {!! Form::text('total_average_price',null, ['class' => 'form-control']) !!}
   </div>
   <div class="form-group">
    {!! Form::label('total_yield','總產量') !!}
    {!! Form::text('total_yield',null, ['class' => 'form-control']) !!}
   </div>
   <div class="form-group">
    {!! Form::label('market','市場') !!}
    {!! Form::text('market',null, ['class' => 'form-control']) !!}
   </div>
   <div class="form-group">
    {!! Form::label('average_price','平均價格') !!}
    {!! Form::text('average_price',null, ['class' => 'form-control']) !!}
   </div>
   <div class="form-group">
    {!! Form::label('yield','產量') !!}
    {!! Form::text('yield',null, ['class' => 'form-control']) !!}
   </div>
   <div class="form-group">
    {!! Form::submit("新增蔬菜資料", ['class'=>'btn btn-primary from-control']) !!}
   </div>
   {!! Form::close() !!}
   <a href="{{ route('vegetablemarketdata.index') }}" style="display: block; text-align: center; margin-top: 20px;">返回列表</a>
@endsection 