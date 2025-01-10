@extends('team02.app')

@section('title', '蔬菜市場調查資料')

@section('content')
    <h1>蔬菜市場調查資料</h1>
    <a href="{{ route('home') }}" class="btn">Home</a>
    <a href="{{ route('homepage') }}" class="btn">簡介</a>
    @can('admin')
    <a href="{{ route('vegetablemarketdata.create') }}" class="btn">新增蔬菜數據</a>
    @endcan
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
                <th>顯示</th>
                @can('admin')
                <th>編輯</th>
                <th>刪除</th>
                @endcan
                @can('manager')
                <th>編輯</th>
                @endcan
            </tr>
        </thead>
        <tbody>
            @foreach ($vegetablemarketdata as $vegetablemarketdatas)
            <tr>
                    <td>{{ $vegetablemarketdatas->year }}</td>
                    <td>{{ $vegetablemarketdatas->type }}</td>
                    <td>{{ $vegetablemarketdatas->cate }}</td>
                    <td>{{ $vegetablemarketdatas->plant_picture }}</td>
                    <td>{{ $vegetablemarketdatas->total_average_price }}</td>
                    <td>{{ $vegetablemarketdatas->total_yield }}</td>
                    <td>{{ $vegetablemarketdatas->market }}</td>
                    <td>{{ $vegetablemarketdatas->average_price }}</td>
                    <td>{{ $vegetablemarketdatas->yield }}</td>
                    <td>
                        <a href="{{ route('vegetablemarketdata.show', $vegetablemarketdatas->id) }}">顯示</a>
                    </td>
                    @can('admin')
                    <td>
                        <a href="{{ route('vegetablemarketdata.edit', $vegetablemarketdatas->id) }}">編輯</a>
                    </td>
                    <td>
                        <form action="{{ url('/vegetablemarketdata/delete', ['id' => $vegetablemarketdatas->id])}}" method="post">
                            <input class="btn btn-default" type="submit" value="刪除" />
                            @method('delete')
                            @csrf
                       </form>
                    </td>
                    @endcan
                    @can('manager')
                    <td><a href="{{ route('vegetablemarketdata.edit', $vegetablemarketdatas->id) }}">編輯</a></td>
                    @endcan           
            </tr>
            @endforeach
        </tbody>
    </table>
    <a href="{{ route('home') }}" style="display: block; text-align: center; margin-top: 20px;">
        <button style="padding: 10px 20px; background-color: #4978f9; color: white; border: none; border-radius: 5px; cursor: pointer;">
            首頁
        </button>
    </a>    
@endsection
