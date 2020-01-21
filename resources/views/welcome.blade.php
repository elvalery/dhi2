@extends('layouts.main', ['body_class' => 'homepage'])

@section('content')
  <img src="/img/logo_white.svg" alt="DHI" class="main__logo">
  <div class="main-slider">
    <a href="/portfolio/parkinn" class="main-slider__slide project1">
      <span class="main-slider__bottom">
        <h3 class="main-slider__ttl">PARK INN BY RADISSON</h3>
      </span>
    </a>
    <a href="/portfolio/greenfinity" class="main-slider__slide project2">
      <span class="main-slider__bottom">
        <h3 class="main-slider__ttl">GREENFINITY BUSINESS PARK</h3>
      </span>
    </a>
    <a href="/portfolio/retroville" class="main-slider__slide project3">
      <span class="main-slider__bottom">
        <h3 class="main-slider__ttl">RETROVILLE SHOPPING CENTRE</h3>
      </span>
    </a>
    <a href="/portfolio/olx" class="main-slider__slide project4">
      <span class="main-slider__bottom">
        <h3 class="main-slider__ttl">OLX OFFICE INTERIOR DESIGN</h3>
      </span>
    </a>
    <a href="/portfolio/skymall" class="main-slider__slide project5">
      <span class="main-slider__bottom">
        <h3 class="main-slider__ttl">SKYMALL 2ND PHASESHOPPING CENTRE</h3>
      </span>
    </a>
    <a href="/portfolio/gagarin-plateau" class="main-slider__slide project6">
      <span class="main-slider__bottom">
        <h3 class="main-slider__ttl">ODESSA RESIDENTIAL COMPLEX</h3>
      </span>
    </a>
  </div>
@endsection

@section('footer')@endsection
