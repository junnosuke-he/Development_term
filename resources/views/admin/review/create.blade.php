@extends('layouts.admin')


{{-- admin.blade.phpの@yield('title')に'ニュースの新規作成'を埋め込む --}}
@section('title', 'レビュー新規作成')

{{-- admin.blade.phpの@yield('content')に以下のタグを埋め込む --}}
@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-8 mx-auto">
                <h1>レビュー投稿</h1>
                <form action="{{ action('Admin\ReviewController@create') }}" method="post" enctype="multipart/form-data">

                    @if (count($errors) > 0)
                        <ul>
                            @foreach($errors->all() as $e)
                                <li>{{ $e }}</li>
                            @endforeach
                        </ul>
                    @endif
                    <div class="form-group row">
                        <label class="col-md-2">ゲームタイトル</label>
                        <div class="col-md-10">
                            <input type="text" class="form-control" name="game_title" value="{{ old('game_title') }}">
                        </div>
                    </div>
                    <div class="form-group row">
                        <label class="col-md-2">プレイ人数</label>
                        <div class="col-md-10">
                            <textarea class="form-control" name="play_member" rows="20">{{ old('play_member') }}</textarea>
                        </div>
                    </div>
                    <div class="form-group row">
                        <label class="col-md-2">ゲーム詳細</label>
                        <div class="col-md-10">
                            <input type="text" class="form-control" name="text" value="{{ old('text' }}">
                        </div>
                    </div>
                    <div class>
                        <label class="col-md-2">ゲーム画像</label>
                        <div class="col-md-10">
                            <input type="file" class="form-control-file" name="game_image">
                        </div>
                    </div>
                    {{ csrf_field() }}
                    <input type="submit" class="btn btn-primary" value="更新">
                </form>
            </div>
        </div>
    </div>
@endsection