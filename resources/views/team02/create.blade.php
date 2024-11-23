@extends('team02.app')

@section('title', '新增蔬菜數據')

@section('content')
    <h1>新增蔬菜數據</h1>
    <form action="{{ route('vegetablemarketdata.store') }}" method="POST" enctype="multipart/form-data">
        @csrf
        <div style="display: flex; flex-direction: column; max-width: 400px; margin: 0 auto;">
            <label for="year">年份</label>
            <input type="text" name="year" id="year" placeholder="請輸入年份" required>
            
            <label for="type">種類</label>
            <input type="text" name="type" id="type" placeholder="請輸入種類" required>
            
            <label for="cate">分類</label>
            <input type="text" name="cate" id="cate" placeholder="請輸入分類" required>
            
            <label for="plant_picture">作物圖片價格</label>
            <input type="text" name="plant_picture" id="plant_picture" placeholder="請輸入平均總價" required>

            <label for="total_average_price">平均總價</label>
            <input type="text" name="total_average_price" id="total_average_price" placeholder="請輸入平均總價" required>
            
            <label for="total_yield">總產量</label>
            <input type="text" name="total_yield" id="total_yield" placeholder="請輸入總產量" required>
            
            <label for="market">市場</label>
            <input type="text" name="market" id="market" placeholder="請輸入市場" required>
            
            <label for="average_price">平均價格</label>
            <input type="text" name="average_price" id="average_price" placeholder="請輸入平均價格" required>
            
            <label for="yield">產量</label>
            <input type="text" name="yield" id="yield" placeholder="請輸入產量" required>

            <button type="submit" style="margin-top: 20px;">新增</button>
        </div>
    </form>
    <a href="{{ route('vegetablemarketdata.index') }}" style="display: block; text-align: center; margin-top: 20px;">返回列表</a>
@endsection  


