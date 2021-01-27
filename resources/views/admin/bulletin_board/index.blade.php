@extends('layouts.admin')


{{-- admin.blade.phpの@yield('title')に'ニュースの新規作成'を埋め込む --}}
@section('title', '掲示板一覧')

{{-- admin.blade.phpの@yield('content')に以下のタグを埋め込む --}}
@section('content')
    <div class="container">
        <div class="bulletinboard">
            <h2>メンバー募集一覧</h2>
        <div class="row">
            <div class="col-md-4">
                <a href="{{ action('Admin\BulletinBoardController@add') }}" role="button" class="btn btn-primary">新規作成</a>
            </div>
            <div class="col-md-8">
                <form action="{{ action('Admin\BulletinBoardController@index') }}" method="get">
                    <div class="form-group row">
                        <label class="col-md-2">タイトル</label>
                        <div class="col-md-8">
                            <input type="text" class="form-control" name="cond_title" value="{{ $cond_title }}">
                        </div>
                        <div class="col-md-2">
                            {{ csrf_field() }}
                            <input type="submit" class="btn btn-primary" value="検索">
                        </div>
                    </div>
                </form>
            </div>
        </div>
        <div class="row">
            <div class="list-bulletinboard col-md-12 mx-auto">
                <div class="row">
                    <table class="table table-dark">
                        <thead>
                            <tr>
                                <th width="20%">タイトル</th>
                                <th width="40%">本文</th>
                                <th width="20%">遊ぶ場所</th>
                                <th width="10%">募集人数</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach($posts as $bulletinboard)
                                <tr>
                                    <td>{{ \Str::limit($bulletinboard->title, 100) }}</td>
                                    <td>{{ \Str::limit($bulletinboard->text, 250) }}</td>
                                    <td>{{ \Str::limit($bulletinboard->area, 30) }}</td>
                                    <td>{{ \Str::limit($bulletinboard->member, 10) }}</td>
                                    <td><div><a href="{{ action('Admin\BulletinBoardDetailsController@index', ['id' => $bulletinboard->id]) }}">詳細</a></div></td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
    </div>
@endsection