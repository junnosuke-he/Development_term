@extends('layouts.admin')


{{-- admin.blade.phpの@yield('title')に'ニュースの新規作成'を埋め込む --}}
@section('title', 'レビュー詳細')

{{-- admin.blade.phpの@yield('content')に以下のタグを埋め込む --}}
@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-8 mx-auto">
                <h1>レビュー詳細を表示</h1>
             @foreach($date as $review)
             {{ ($review->game_title) }}
             @endforeach
            </div>
        </div>
    </div>
@endsection