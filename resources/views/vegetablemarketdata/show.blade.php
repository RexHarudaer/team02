@extends('team02.app')

@section('title', '數據詳細資訊')

@section('content')
    @if (empty($vegetablemarketdatas))
        <p>無法取得資料，請檢查控制器傳遞的內容。</p>
    @else
        <h1>蔬菜數據詳細資訊</h1>
        <table>
            <tr><td>年份:</td><td>{{ $vegetablemarketdatas->year }}</td></tr>
            <tr><td>種類:</td><td>{{ $vegetablemarketdatas->type }}</td></tr>
            <tr><td>分類:</td><td>{{ $vegetablemarketdatas->cate }}</td></tr>
            <tr><td>作物圖片:</td><td>{{ $vegetablemarketdatas->plant_picture }}</td></tr>
            <tr><td>平均總價:</td><td>{{ $vegetablemarketdatas->total_average_price }}</td></tr>
            <tr><td>總產量:</td><td>{{ $vegetablemarketdatas->total_yield }}</td></tr>
            <tr><td>市場:</td><td>{{ $vegetablemarketdatas->market }}</td></tr>
            <tr><td>平均價格:</td><td>{{ $vegetablemarketdatas->average_price }}</td></tr>
            <tr><td>產量:</td><td>{{ $vegetablemarketdatas->yield }}</td></tr>
        </table>
        <a href="{{ route('vegetablemarketdata.index') }}">返回列表</a>
    @endif
@endsection
