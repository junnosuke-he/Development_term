@extends('layouts.admin')


{{-- admin.blade.phpの@yield('title')に'ニュースの新規作成'を埋め込む --}}
@section('title', '質問一覧')

{{-- admin.blade.phpの@yield('content')に以下のタグを埋め込む --}}
@section('content')
    <div class="container">
        <div class="question">
            <h2>質問一覧</h2>
        <div class="row">
            <div class="col-md-4">
                <a href="{{ action('Admin\QuestionController@add') }}" role="button" class="btn btn-primary">新規作成</a>
            </div>
            <div class="col-md-8">
                <form action="{{ action('Admin\QuestionController@index') }}" method="get">
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
                            </tr>
                        </thead>
                        <tbody>
                            @foreach($posts as $question)
                                <tr>
                                    <td>{{ \Str::limit($question->title, 100) }}</td>
                                    <td>{{ \Str::limit($question->text, 250) }}</td>
                                    <td><div><a href="{{ action('Admin\QuestionDetailsController@index', ['id' => $question->question_id]) }}">詳細</a></div></td>
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