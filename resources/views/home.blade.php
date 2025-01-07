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
                    <div class="home-container">
                        <div class="button-group">
                            <a href="{{ route('vegetablemarketdata.index') }}" class="action-button">蔬菜市場調查資料</a>
                        </div>
                    </div>
                
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
