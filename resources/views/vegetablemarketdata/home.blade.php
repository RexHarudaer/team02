@extends('team02.app')

@section('title', '首頁')

@section('content')
    <div class="home-container">
        <div class="button-group">
            <a href="{{ route('vegetablemarketdata.index') }}" class="action-button">查看數據列表</a>
        </div>
    </div>
@endsection
