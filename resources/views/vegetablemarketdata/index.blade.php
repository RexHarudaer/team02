@extends('team02.app')

@section('title', '蔬菜市場調查資料')

@section('content')
    <h1>蔬菜市場調查資料</h1>
    <a href="{{ route('vegetablemarketdata.create') }}" class="btn">新增蔬菜數據</a>
    <table>
        <thead>
            <tr>
                <th>年份</th>
                <th>種類</th>
                <th>分類</th>
                <th>作物圖片價格</th>
                <th>平均總價</th>
                <th>總產量</th>
                <th>市場</th>
                <th>平均價格</th>
                <th>產量</th>
                <th>詳細內容</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($vegetablemarketdata as $data)
            <tr>
                    <td>{{ $data->year }}</td>
                    <td>{{ $data->type }}</td>
                    <td>{{ $data->cate }}</td>
                    <td>{{ $data->plant_picture }}</td>
                    <td>{{ $data->total_average_price }}</td>
                    <td>{{ $data->total_yield }}</td>
                    <td>{{ $data->market }}</td>
                    <td>{{ $data->average_price }}</td>
                    <td>{{ $data->yield }}</td>
                    <td>
                        <a href="{{ route('vegetablemarketdata.show', $data->id) }}">查看</a>
                    </td>           
            </tr>
            @endforeach
        </tbody>
    </table>
@endsection
