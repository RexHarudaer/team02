@extends('team02.app')

@section('title', '數據詳細資訊')

@section('content')
    <h1>蔬菜數據詳細資訊</h1>
    <table>
        <tr><td>年份:</td><td>{{ $data->year }}</td></tr>
        <tr><td>種類:</td><td>{{ $data->type }}</td></tr>
        <tr><td>分類:</td><td>{{ $data->cate }}</td></tr>
        <tr><td>作物圖片:</td><td>{{ $data->plant_picture }}</td></tr>
        <tr><td>平均總價:</td><td>{{ $data->total_average_price }}</td></tr>
        <tr><td>總產量:</td><td>{{ $data->total_yield }}</td></tr>
        <tr><td>市場:</td><td>{{ $data->market }}</td></tr>
        <tr><td>平均價格:</td><td>{{ $data->average_price }}</td></tr>
        <tr><td>產量:</td><td>{{ $data->yield }}</td></tr>
    </table>
    <a href="{{ route('vegetablemarketdata.index') }}">返回列表</a>
@endsection


