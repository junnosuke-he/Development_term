@extends('layouts.admin')


{{-- admin.blade.phpの@yield('title')に'ニュースの新規作成'を埋め込む --}}
@section('title', 'ボドゲ交流所')
{{-- admin.blade.phpの@yield('content')に以下のタグを埋め込む --}}
@section('content')
    <div class="container">
        <div class="home">
            <div class="col-md-8 mx-auto">
                <h3>サイト説明</h3>
                <p>このサイトではボードゲームを一緒に遊ぶメンバーを募集したりボードゲームについての質問ができます。</p>
                <ul>
                    <li>プロフィールページでは自分のプロフィールを作成、編集することができます。</li>
                    <li>掲示板ページではボードゲームのメンバーを新規募集したり募集に対して参加などのコメントをすることができます。</li>
                    <li>質問ページでは興味のあるボードゲームのルールや細かいプレイングなどを質問、回答することができます。</li>
                    <li>レビューページではボードゲームに対して点数をつけたりコメントでレビューをすることができます。</li>
                </ul>
            </div>
        </div>
    </div>
@endsection