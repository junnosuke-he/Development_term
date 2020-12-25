<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <!-- CSRF Token -->
         {{-- 後の章で説明します --}}
        <meta name="csrf-token" content="{{ csrf_token() }}">

        {{-- 各ページごとにtitleタグを入れるために@yieldで空けておきます。 --}}
        <title>@yield('title')</title>

        <!-- Scripts -->
         {{-- Laravel標準で用意されているJavascriptを読み込みます --}}
        <script src="{{ secure_asset('js/app.js') }}" defer></script>

        <!-- Fonts -->
        <link rel="dns-prefetch" href="https://fonts.gstatic.com">
        <link href="https://fonts.googleapis.com/css?family=Raleway:300,400,600" rel="stylesheet" type="text/css">

        <!-- Styles -->
        {{-- Laravel標準で用意されているCSSを読み込みます --}}
        <link href="{{ secure_asset('css/app.css') }}" rel="stylesheet">
        <link href="{{ secure_asset('css/admin.css') }}" rel="stylesheet">
        <link href="{{ secure_asset('css/home.css') }}" rel="stylesheet">
	
	
    </head>
    <body>
        <div class="bodoge">
            <div class="nav-top">
                <div class="top"><a href="/">ボードーゲーム交流所</a></div>
                <div class="login"><a href="/profile">プロフィール</a></div>
            </div>
            <div class="nav-menu">
                <div class="menu"><a href="/bulletin_board">メンバー募集</a></div>
                <div class="menu"><a href="/question">質問</a></div>                    
                <div class="menu"><a href="/review">ボドゲレビュー</a></div>
            </div>
            <main class="py-4">
            {{-- コンテンツをここに入れるため、@yieldで空けておきます。 --}}                    
            @yield('content')
            </main>
        </div>
    </body>
</html>