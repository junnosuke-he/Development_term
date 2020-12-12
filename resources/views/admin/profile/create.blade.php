@extends('layouts.admin')


{{-- admin.blade.phpの@yield('title')に'ニュースの新規作成'を埋め込む --}}
@section('title', 'プロフィール編集')

{{-- admin.blade.phpの@yield('content')に以下のタグを埋め込む --}}
@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-8 mx-auto">
                <h1>プロフィール</h1>
                <form action="{{ action('Admin\ProfileController@create') }}" method="post" enctype="multipart/form-data">

                    @if (count($errors) > 0)
                        <ul>
                            @foreach($errors->all() as $e)
                                <li>{{ $e }}</li>
                            @endforeach
                        </ul>
                    @endif
                    <div class="profile-form">
                        <label class="col-md-3">名前</label>
                        <div class="col-md-5">
                            <input type="text" class="form-control" name="name" value="{{ old('name') }}">
                        </div>
                    </div>
                    <div class="profile-form">
                        <label class="col-md-3">性別</label>
                        <div class="col-md-5">
                            <input type="text" class="form-control" name="gender" value="{{ old('gender') }}">
                        </div>
                    </div>
                    <div class="profile-form">
                        <label class="col-md-3">住んでいる地域</label>
                        <div class="col-md-5">
                            <input type="text" class="form-control" name="area" value="{{ old('area') }}">
                        </div>
                    </div>
                    <div class="profile-form">
                        <label class="col-md-3">自己紹介</label>
                        <div class="col-md-8">
                            <textarea class="form-control" name="introduction" rows="10">{{ old('introduction') }}</textarea>
                        </div>
                    </div>
                    <div class="profile-form">
                        <label class="col-md-2">プロフィール画像</label>
                        <div class="col-md-10">
                            <input type="file" class="form-control-file" name="profile_image">
                        </div>
                    </div>
                    
                    {{ csrf_field() }}
                    <input type="submit" class="btn btn-primary" value="決定">
                </form>
                <div class="posting-itinerary">
                    <div class="posting-itinerary top"><h4>自身の投稿</h4></div>
                    <div class="posting-itinerary title"><p>メンバー募集</p></div>
                    <div class="posting-itinerary title"><p>質問</p></div>
                    <div class="posting-itinerary title"><p>レビュー</p></div>
                    <div class="posting-itinerary top"><h4>コメントを付けた投稿</h4></div>
                    <div class="posting-itinerary title"><p>メンバー募集</p></div>
                    <div class="posting-itinerary title"><p>質問</p></div>
                    <div class="posting-itinerary title"><p>レビュー</p></div>
                </div>
            </div>
        </div>
    </div>
@endsection