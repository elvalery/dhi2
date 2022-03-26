@extends('layouts.main', ['body_class' => 'homepage'])

@section('content')
  <img src="/img/logo-white.png" alt="DHI" class="main__logo">
  <div class="main__text">
    @lang('That was Retroville shopping centre we were working on for four years.') <br>
    @lang('Seeing our brainchild been demolished like that because of the bombing is truly heartbreaking.') <br>
    @lang('We will stand, we will win! And  we will rebuild everything what has been ruined due to that invasion.') <br>
    @lang('Glory to Ukraine!')
  </div>
  <div class="main-slider">
    <div class="main-slider__slide main-slider__slide--t2 project-d1">
      <div class="main-slider__video">
        <div class="main-slider__video-helper">
          <video autoplay muted loop playsinline>
            <source src="/video/project-d1/1.mp4" type="video/mp4">
            <source src="/video/project-d1/1.webm" type="video/webm">
            <source src="/video/project-d1/1.ogg" type="video/ogg">
            Sorry, your browser doesn't support embedded videos.
          </video>
        </div>
      </div>
      <span class="main-slider__bottom"></span>
    </div>
    <div class="main-slider__slide main-slider__slide--t2 project-d1">
      <div class="main-slider__video">
        <div class="main-slider__video-helper">
          <video autoplay muted loop playsinline>
            <source src="/video/project-d1/2.mp4" type="video/mp4">
            <source src="/video/project-d1/2.webm" type="video/webm">
            <source src="/video/project-d1/2.ogg" type="video/ogg">
            Sorry, your browser doesn't support embedded videos.
          </video>
        </div>
      </div>
      <span class="main-slider__bottom"></span>
    </div>
    <div class="main-slider__slide main-slider__slide--t2 project-d1">
      <div
          class="main-slider__image-wrap"
          style="background-image: url('/img/project-d1/2.jpg');"
      >
      </div>
      <span class="main-slider__bottom"></span>
    </div>
    <div class="main-slider__slide main-slider__slide--t2 project-d1">
      <div
          class="main-slider__image-wrap"
          style="background-image: url('/img/project-d1/1.jpg');"
      >
      </div>
      <span class="main-slider__bottom"></span>
    </div>
{{--    <div class="main-slider__slide project-d1__video">--}}
{{--      <span class="main-slider__bottom">--}}
{{--        <h3 class="main-slider__ttl">We will rebuild soon!</h3>--}}
{{--      </span>--}}
{{--    </div>--}}
{{--    <div class="main-slider__slide project-d2__video">--}}
{{--      <span class="main-slider__bottom">--}}
{{--        <h3 class="main-slider__ttl">We will rebuild soon!</h3>--}}
{{--      </span>--}}
{{--    </div>--}}
{{--    <a href="/portfolio/parkinn" class="main-slider__slide project1">--}}
{{--      <span class="main-slider__bottom">--}}
{{--        <h3 class="main-slider__ttl">PARK INN BY RADISSON</h3>--}}
{{--      </span>--}}
{{--    </a>--}}
{{--    <a href="/portfolio/greenfinity" class="main-slider__slide project2">--}}
{{--      <span class="main-slider__bottom">--}}
{{--        <h3 class="main-slider__ttl">GREENFINITY BUSINESS PARK</h3>--}}
{{--      </span>--}}
{{--    </a>--}}
{{--    <a href="/portfolio/retroville" class="main-slider__slide project3">--}}
{{--      <span class="main-slider__bottom">--}}
{{--        <h3 class="main-slider__ttl">RETROVILLE SHOPPING CENTRE</h3>--}}
{{--      </span>--}}
{{--    </a>--}}
{{--    <a href="/portfolio/olx" class="main-slider__slide project4">--}}
{{--      <span class="main-slider__bottom">--}}
{{--        <h3 class="main-slider__ttl">OLX OFFICE INTERIOR DESIGN</h3>--}}
{{--      </span>--}}
{{--    </a>--}}
{{--    <a href="/portfolio/skymall" class="main-slider__slide project5">--}}
{{--      <span class="main-slider__bottom">--}}
{{--        <h3 class="main-slider__ttl">SKYMALL 2ND PHASESHOPPING CENTRE</h3>--}}
{{--      </span>--}}
{{--    </a>--}}
{{--    <a href="/portfolio/gagarin-plateau" class="main-slider__slide project6">--}}
{{--      <span class="main-slider__bottom">--}}
{{--        <h3 class="main-slider__ttl">ODESSA RESIDENTIAL COMPLEX</h3>--}}
{{--      </span>--}}
{{--    </a>--}}
  </div>
@endsection

@section('footer')@endsection
