@extends('layouts.admin')


{{-- admin.blade.phpの@yield('title')に'ニュースの新規作成'を埋め込む --}}
@section('title', '掲示板詳細')

{{-- admin.blade.phpの@yield('content')に以下のタグを埋め込む --}}
@section('content')
    <div class="container">
        <div class="details">
            <div class="col-md-8 mx-auto">
                @foreach($date as $bulletinboard)
                <div class=bulletinboard_title>
                タイトル：{{ ($bulletinboard->title) }}
                </div>
                <div class=bulletinboard_text>
                詳細：{{ ($bulletinboard->text) }}
                </div>
                <div class=bulletinboard_text>
                場所：{{ ($bulletinboard->area) }}
                </div>
                <div class=bulletinboard_text>
                人数：{{ ($bulletinboard->member) }}
                </div>
                @endforeach
            </div>
        </div>
    </div>
@endsection