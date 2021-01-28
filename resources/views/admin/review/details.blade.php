@extends('layouts.admin')


{{-- admin.blade.phpの@yield('title')に'ニュースの新規作成'を埋め込む --}}
@section('title', 'レビュー詳細')

{{-- admin.blade.phpの@yield('content')に以下のタグを埋め込む --}}
@section('content')
    <div class="container">
        <div class="details">
            <div class="col-md-8 mx-auto">
                @foreach($date as $review)
                    <img src="{{ $review->game_image }}">
                    <div class=review_game_title>
                        ゲームタイトル：{{ ($review->game_title) }}
                    </div>
                    <div class=review_play_member>
                        プレイ人数：{{ ($review->play_member) }}
                    </div>
                    <div class=review_text>
                        ゲーム詳細：{{ ($review->text) }}
                    </div>
                @endforeach
            </div>
        </div>
    </div>
@endsection