<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Freeks') }}</title>

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>
    <script src="https://kit.fontawesome.com/058b18d539.js" crossorigin="anonymous"></script>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">

    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <link href="{{ asset('css/style.css') }}" rel="stylesheet">
    
</head>
<body>
    <div id="app" class="font_space_all">
        <nav class="navbar navbar-expand-md navbar-light bg-white shadow-sm">
            <div class="container py-2">
                <!-- ロゴ -->
                <a class="navbar-brand" href="{{ url('/') }}">
                <img style="width: 70px;" src="{{ asset('/img/yi_point_logo_4.png') }}" alt="">
                </a>
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="{{ __('Toggle navigation') }}">
                    <span class="navbar-toggler-icon"></span>
                </button>

                <!-- ポイントの表示 -->
                <div class=""></div>

                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <!-- Right Side Of Navbar -->
                    <ul class="navbar-nav ml-auto">
                        <!-- Authentication Links -->
                        <!-- ログインしてない時のヘッダー -->
                        @guest
                            <li class="nav-item">
                                <a class="nav-link" href="{{ route('login') }}">{{ __('Login') }}</a>
                            </li>
                            @if (Route::has('register'))
                                <li class="nav-item">
                                    <a class="nav-link" href="{{ route('register') }}">{{ __('Register') }}</a>
                                </li>
                            @endif
                        <!-- ログイン状態のヘッダー -->
                        @else
                            <!-- ポイントの表示 -->
                            <li class="nav-item ml-2">
                                <div class="nav-link text-black">
                                現在ポイント数:
                                @if (Auth::user()->point > 0)
                                {{Auth::user()->point}} 
                                @else
                                0
                                @endif
                                Pt
                                </div>
                            </li>
                            <li class="nav-item ml-2">
                                <a class="nav-link text-black" href="/user_point">ポイント申請</a>
                            </li>
                            <li class="nav-item ml-2">
                                <a class="nav-link text-black" id="post-link" href="/cart">カート内一覧</a>
                            </li>
                            <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                    {{ Auth::user()->name }} <span class="caret"></span>
                                </a>
                            <li class="nav-item dropdown">
                                <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                                    <!-- 管理者ページ -->
                                    @if (Auth::user()->role==1)
                                    <a class="dropdown-item" href="/admin_index">管理者TOPページ</a>
                                    @endif
                                    <a class="dropdown-item" href="/user_info">マイページ</a>
                                    <a class="dropdown-item" href="{{ route('logout') }}"
                                    onclick="event.preventDefault();
                                                    document.getElementById('logout-form').submit();">
                                        {{ __('ログアウト') }}
                                    </a>
                                    <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                        @csrf
                                    </form>
                                </div>
                            </li>
                        @endguest
                    </ul>
                </div>
            </div>
        </nav>
        <main class="py-4" style="min-height: 700px;">
            <div >
            @yield('content')
            </div>
        </main>
        <!-- フッター -->
        <nav class="navbar navbar-expand-md navbar-light bg-white shadow-sm">
            <div class="container py-2">
                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <ul class="navbar-nav">
                        <li class="nav-item">
                            <a class="nav-link text-black" href="/question">お問い合わせ</a>
                        </li>
                    </ul>
                </div>
            </div>
        </nav>
    </div>
</body>
</html>
