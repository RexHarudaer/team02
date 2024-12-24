@extends('team02.app')

@section('title', '編輯蔬菜數據')

@section('content')
    <h1>編輯蔬菜數據</h1>
    <form action="{{ route('vegetablemarketdata.update', $vegetablemarketdatas->id) }}" method="POST" style="max-width: 400px; margin: 0 auto;">
        @csrf
        @method('PUT')
        <div style="display: flex; flex-direction: column; max-width: 400px; margin: 0 auto;">
        <label for="year">年份</label>
        <input type="text" name="year" id="year" value="{{ $vegetablemarketdatas->year }}" required>

        <label for="type">種類</label>
        <input type="text" name="type" id="type" value="{{ $vegetablemarketdatas->type }}" required>

        <label for="cate">分類</label>
        <input type="text" name="cate" id="cate" value="{{ $vegetablemarketdatas->cate }}" required>

        <label for="plant_picture">作物圖片</label>
        <input type="text" name="plant_picture" id="plant_picture" value="{{ $vegetablemarketdatas->plant_picture }}" required>

        <label for="total_average_price">平均總價</label>
        <input type="text" name="total_average_price" id="total_average_price" value="{{ $vegetablemarketdatas->total_average_price }}" required>

        <label for="total_yield">總產量</label>
        <input type="text" name="total_yield" id="total_yield" value="{{ $vegetablemarketdatas->total_yield }}" required>

        <label for="market">市場</label>
        <input type="text" name="market" id="market" value="{{ $vegetablemarketdatas->market }}" required>

        <label for="average_price">平均價格</label>
        <input type="text" name="average_price" id="average_price" value="{{ $vegetablemarketdatas->average_price }}" required>

        <label for="yield">產量</label>
        <input type="text" name="yield" id="yield" value="{{ $vegetablemarketdatas->yield }}" required>

        <button type="submit" style="margin-top: 20px;">更新</button>
        </div>
    </form>
    <a href="{{ route('vegetablemarketdata.index') }}" style="display: block; text-align: center; margin-top: 20px;">返回列表</a>
@endsection
