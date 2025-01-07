@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Dashboard') }}</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                           
                        </div>
                    @endif

                    {{ __('You are logged in!') }}
                    <li><a href= http://127.0.0.1:8001/VegetableMarketDataController >表格</a></li>
                    <li><a href="http://127.0.0.1:8001/">首頁</a></li>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
