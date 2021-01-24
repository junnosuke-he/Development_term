@extends('layouts.admin')


{{-- admin.blade.phpの@yield('title')に'ニュースの新規作成'を埋め込む --}}
@section('title', '質問詳細')

{{-- admin.blade.phpの@yield('content')に以下のタグを埋め込む --}}
@section('content')
    <div class="container">
        <div class="details">
            <div class="col-md-8 mx-auto">
                @foreach($date as $question)
                <div class=question_title>
                タイトル：{{ ($question->title) }}
                </div>
                <div class=question_text>
                詳細：{{ ($question->text) }}
                </div>
                @endforeach
            </div>
        </div>
    </div>
@endsection