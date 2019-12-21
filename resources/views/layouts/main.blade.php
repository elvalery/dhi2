<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}">

<head>
  <meta charset="utf-8">
  <title>@section('title')Design Hub International@show</title>
  <meta name="description" content="@yield('description')">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
  <!--
  <meta property="og:title" content="">
  <meta property="og:description" content="">
  <meta property="og:type" content="website">
  <meta property="og:url" content="">
  <meta property="og:image" content=""/>
  -->
  <link rel="icon" href="/img/favicon/favicon.ico">
  <link rel="apple-touch-icon" sizes="180x180" href="/img/favicon/apple-touch-icon-180x180.png">
  <link rel="stylesheet" href="{{  mix('css/main.css') }}">
  <meta name="theme-color" content="#000">
  <meta name="csrf-token" content="{{ csrf_token() }}">

  <!-- Global site tag (gtag.js) - Google Analytics -->
  <script async src="https://www.googletagmanager.com/gtag/js?id=UA-120201735-1"></script>
  <script>
    window.dataLayer = window.dataLayer || [];
    function gtag(){dataLayer.push(arguments);}
    gtag('js', new Date());
    gtag('config', 'UA-120201735-1');
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
      <a href="/" class="lang__item @if(app()->getLocale() == 'en')active @endif">En</a>
      <a href="/ru/" class="lang__item @if(app()->getLocale() == 'ru')active @endif">Ru</a>
    </div>

    @if(Route::currentRouteName() != 'main')
      <a href="/"><img src="/img/logo.svg" alt="DHI" class="nav__logo img-r"></a>
    @endif

    <ul class="nav-list">
      <li class="nav-list__item">
        <span>@lang('About')</span>
        <ul class="nav-list-sublist">
          {{--<li><a href="{{ route('about') }}">@lang('Company')</a></li>--}}
          <li><a href="{{ route('about') }}">@lang('About')</a></li>
          <li><a href="{{ route('people') }}">@lang('People')</a></li>
          {{--<li><a href="#">@lang('Publications')</a></li>--}}
          <li><a href="{{ route('technologies') }}">@lang('Technologies')</a></li>
        </ul>
      </li>
      @if($service_menu->isNotEmpty())
        <li class="nav-list__item">
          <span>@lang('Sectors')</span>
          <ul class="nav-list-sublist">
            <li><a href="{{ route('services.index') }}">@lang('Sectors')</a></li>
            @foreach($service_menu as $service)
              <li><a href="{{ route('service.detail', ['service' => $service]) }}">{{ $service->name }}</a></li>
            @endforeach
          </ul>
        </li>
      @else
        <li class="nav-list__item"><a href="{{ route('services.index') }}">@lang('Sectors')</a></li>
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
        <img src="/img/logo-small.png" alt="DHI" class="foot__logo img-r">
        <p class="foot__txt">© Copyright 2019 dhi-architecture.com - All Rights Reserved</p>
      </div>
    </div>
  </div>
  @show
</div>

<script src="{{ mix('js/app.js') }}"></script>

@yield('js')
</body>
</html>
