@extends('layouts.main', ['body_class' => 'homepage'])

@section('content')
  <img src="img/logo_white.svg" alt="DHI" class="main__logo">
  <div class="main-slider">
    <a href="portfolio.html" class="main-slider__slide project1">
      <span class="main-slider__bottom">
        <h3 class="main-slider__ttl">ParkINN</h3>
      </span>
    </a>
    <a href="portfolio.html" class="main-slider__slide project2">
      <span class="main-slider__bottom">
        <h3 class="main-slider__ttl">Greenfinity Park</h3>
      </span>
    </a>
    <a href="portfolio.html" class="main-slider__slide project3">
      <span class="main-slider__bottom">
        <h3 class="main-slider__ttl">Retroville</h3>
      </span>
    </a>
    <a href="portfolio.html" class="main-slider__slide project4">
      <span class="main-slider__bottom">
        <h3 class="main-slider__ttl">«OLX» office interior</h3>
      </span>
    </a>
    <a href="portfolio.html" class="main-slider__slide project5">
      <span class="main-slider__bottom">
        <h3 class="main-slider__ttl">“Sky Mall” shopping mall 2nd phase</h3>
      </span>
    </a>
    <a href="portfolio.html" class="main-slider__slide project6">
      <span class="main-slider__bottom">
        <h3 class="main-slider__ttl">Residential complex on Gagarin Plateau</h3>
      </span>
    </a>
  </div>
@endsection

@section('footer')@endsection