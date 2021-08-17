<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}">

<head>
  <meta charset="utf-8">
  <title>@section('title')Design Hub International @show</title>
  <meta name="description" content="@yield('description')">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">

  <meta property="og:title" content="@section('title')Design Hub International @show">
  <meta property="og:description" content="@yield('description')">
  <meta property="og:type" content="website">
  <meta property="og:image" content="/img/favicon/logo-1000x1000.png"/>
  <meta property="og:image:width" content="1000"/>
  <meta property="og:image:height" content="1000"/>

  <link rel="apple-touch-icon" sizes="57x57" href="/img/favicon/apple-icon-57x57.png">
  <link rel="apple-touch-icon" sizes="60x60" href="/img/favicon/apple-icon-60x60.png">
  <link rel="apple-touch-icon" sizes="72x72" href="/img/favicon/apple-icon-72x72.png">
  <link rel="apple-touch-icon" sizes="76x76" href="/img/favicon/apple-icon-76x76.png">
  <link rel="apple-touch-icon" sizes="114x114" href="/img/favicon/apple-icon-114x114.png">
  <link rel="apple-touch-icon" sizes="120x120" href="/img/favicon/apple-icon-120x120.png">
  <link rel="apple-touch-icon" sizes="144x144" href="/img/favicon/apple-icon-144x144.png">
  <link rel="apple-touch-icon" sizes="152x152" href="/img/favicon/apple-icon-152x152.png">
  <link rel="apple-touch-icon" sizes="180x180" href="/img/favicon/apple-icon-180x180.png">
  <link rel="icon" type="image/png" sizes="192x192" href="/img/favicon/android-icon-192x192.png">
  <link rel="icon" type="image/png" sizes="32x32" href="/img/favicon/favicon-32x32.png">
  <link rel="icon" type="image/png" sizes="96x96" href="/img/favicon/favicon-96x96.png">
  <link rel="icon" type="image/png" sizes="16x16" href="/img/favicon/favicon-16x16.png">
  <link rel="manifest" href="/manifest.json">
  <meta name="msapplication-TileColor" content="#ffffff">
  <meta name="msapplication-TileImage" content="/img/favicon/ms-icon-144x144.png">
  <link rel="icon" href="/img/favicon/favicon.ico">

  <link rel="stylesheet" href="{{  mix('css/main.css') }}">
  <meta name="theme-color" content="#000">
  <meta name="csrf-token" content="{{ csrf_token() }}">

  <!-- Global site tag (gtag.js) - Google Analytics -->
  <script async src="https://www.googletagmanager.com/gtag/js?id=UA-170665348-1"></script>
  <script>
    window.dataLayer = window.dataLayer || [];
    function gtag(){dataLayer.push(arguments);}
    gtag('js', new Date());

    gtag('config', 'UA-170665348-1');
  </script>
</head>

<body class="{{ !empty($body_class) ? $body_class : '' }}">

<div class="hamburger hamburger--collapse d-md-none">
  <div class="hamburger-box">
    <div class="hamburger-inner"></div>
  </div>
</div>

<nav class="nav">
  <div class="nav__wrap">
    <div class="lang">
      <a
          href="javascript:void(0);"
          class="lang__item @if(app()->getLocale() == 'en')active @endif"
          onclick="
            @if(app()->getLocale() != 'en')
              setLocale('en');
            @else
              return false;
            @endif
            "
      >En</a>
      <a
          href="javascript:void(0);"
          class="lang__item @if(app()->getLocale() == 'ru')active @endif"
          onclick="
            @if(app()->getLocale() != 'ru')
              setLocale('ru');
            @else
              return false;
            @endif
            "
      >Ru</a>
    </div>

    @if(Route::currentRouteName() != 'en.main' && Route::currentRouteName() != 'ru.main')
      <a href="/"><img src="/img/logo-black.svg" alt="DHI" class="nav__logo img-r"></a>
    @endif

    <ul class="nav-list">
      <li class="nav-list__item @if(checkActiveRoute('about', Route::currentRouteName())))on @endif">
        <span>@lang('About')</span>
        <ul
            class="nav-list-sublist"
            @if(checkActiveRoute('about', Route::currentRouteName()))style="display: block" @endif
        >
          <li><a href="{{ route('about') }}">@lang('About')</a></li>
          {{--<li><a href="{{ route('people') }}">@lang('People')</a></li>--}}
          <li><a href="{{ route('technologies') }}">@lang('Technologies')</a></li>
        </ul>
      </li>
      @if($service_menu->isNotEmpty())
        <li class="nav-list__item @if(checkActiveRoute('service', Route::currentRouteName()))on @endif">
          <span>@lang('Sectors')</span>
          <ul
              class="nav-list-sublist"
              @if(checkActiveRoute('service', Route::currentRouteName()))style="display: block" @endif
          >
            <li><a href="{{ route('service.index') }}">@lang('Sectors')</a></li>
            @foreach($service_menu as $service)
              <li><a href="{{ route('service.detail', ['service' => $service]) }}">{{ $service->name }}</a></li>
            @endforeach
          </ul>
        </li>
      @else
        <li class="nav-list__item"><a href="{{ route('service.index') }}">@lang('Sectors')</a></li>
      @endif
      <li class="nav-list__item"><a href="{{ route('portfolio.index') }}">@lang('Portfolio')</a></li>
      <li class="nav-list__item"><a href="{{ route('news.index') }}">@lang('News')</a></li>
      <li class="nav-list__item"><a href="{{ route('career') }}">@lang('Career')</a></li>
      <li class="nav-list__item"><a href="{{ route('contacts') }}">@lang('Contacts')</a></li>
    </ul>
    {{--<a href="#" class="nav-enter">enter</a>--}}
    <div class="nav-soc">
      <a href="https://www.facebook.com/Design-Hub-International-941115632665039/" target="_blank" class="nav-soc__link"><img src="/img/fb.svg" width="16" height="16" alt="DHI"></a>
      <a href="https://www.instagram.com/dhi_architecture/" target="_blank" class="nav-soc__link"><img src="/img/in.svg" width="16" height="16" alt="DHI"></a>
      <a href="https://ua.linkedin.com/in/andrey-yatsentuk-4624aa4b" target="_blank" class="nav-soc__link"><img src="/img/li.svg" width="16" height="16" alt="DHI"></a>
      <a href="https://www.behance.net/dhi-architecture" target="_blank" class="nav-soc__link"><img src="/img/be.svg" width="16" height="16" alt="DHI"></a>
      <a href="https://www.youtube.com/channel/UCeDErzD8cwVhCSSLNZIKoSA?view_as=subscriber" target="_blank" class="nav-soc__link"><img src="/img/yo.svg" width="16" height="16" alt="DHI"></a>
    </div>
  </div>
</nav>

<div class="content">
  @yield('content')
  @section('footer')
  <div class="foot container-fluid">
    <div class="row">
      <div class="col">
        <img src="/img/logo-white.png" alt="DHI" class="foot__logo img-r">
        <p class="foot__txt">© Copyright {{ now()->year }} dhi-architecture.com - All Rights Reserved</p>
      </div>
    </div>
  </div>
  @show
</div>

<script src="{{ mix('js/app.js') }}"></script>

@yield('js')
</body>
</html>
