@extends('layouts.main')

@section('content')
  <div class="container-fluid">
    <div class="row">
      <div class="col-md-12">
        <h1 class="page-ttl page-ttl_align_left">{{ $portfolio->name }}</h1>
      </div>
    </div>
  </div>
  @if($portfolio->photos)
  <div class="detail-slider">
    @foreach($portfolio->photos as $image)
      <div class="detail-slider__slide" style="background-image: url({{ asset('storage/' . $image->link) }})"></div>
    @endforeach
  </div>
  @endif
  <div class="container-fluid">
    @if($portfolio->factsList)
      <div class="row mb-4">
        <div class="col-md-12">
          <h3 class="block-ttl mt-0 mb-0">@lang('dhi.portfolio.facts-ttl')</h3>
        </div>
        @foreach($portfolio->factsList as $name => $value)
          <div class="col-md-4 detail__facts">
            <div class="detail__facts-ttl">{{ $name }}</div>
            <div class="detail__facts-txt">{{ $value }}</div>
          </div>
        @endforeach
      </div>
    @endif
    
    @if($portfolio->details)
      <div class="row">
        <div class="col-md-12">
          <h3 class="block-ttl mt-0 mb-1">@lang('dhi.portfolio.details-ttl')</h3>
          <div class="detail__other">
            {!! $portfolio->details !!}
          </div>
        </div>
      </div>
    @endif
  
    @if($portfolio->briefList || $portfolio->resultsList)
      <div class="row">
        @if($portfolio->briefList)
        <div class="col-md-6">
          <h3 class="block-ttl mt-0 mb-1">@lang('dhi.portfolio.brief-ttl')</h3>
          <ul class="detail__lst">
          @foreach($portfolio->briefList as $item)
            <li>{{ $item }}</li>
          @endforeach
          </ul>
        </div>
        @endif
        @if($portfolio->resultsList)
          <div class="col-md-6">
            <h3 class="block-ttl mt-0 mb-1">@lang('dhi.portfolio.results-ttl')</h3>
            <ul class="detail__lst">
              @foreach($portfolio->resultsList as $item)
                <li>{{ $item }}</li>
              @endforeach
            </ul>
          </div>
          @endif
      </div>
    @endif
  
    @if($portfolio->service)
    <div class="row mt-4 mb-5">
      <div class="col-md-12">
        <h3 class="block-ttl mt-0 mb-1">@lang('dhi.portfolio.services-ttl')</h3>
        <div>{{ $portfolio->serviceArray }}</div>
      </div>
    </div>
    @endif
  
    {{--<div class="row">
      <div class="col">
        <h3 class="related__ttl">RELATED PROJECTS</h3>
      </div>
    </div>
    <div class="row">
      <div class="col-md-4">
        <a href="portfolio-detail.html" class="related-item">
          <div class="related-item__img" style="background-image:url(img/project1.jpg)"></div>
          <h4 class="related-item__ttl">ParkINN</h4>
          <p class="related-item__date">21 March 2017</p>
        </a>
      </div>
      <div class="col-md-4">
        <a href="portfolio-detail.html" class="related-item">
          <div class="related-item__img" style="background-image:url(img/project1.jpg)"></div>
          <h4 class="related-item__ttl">ParkINN</h4>
          <p class="related-item__date">21 March 2017</p>
        </a>
      </div>
      <div class="col-md-4">
        <a href="portfolio-detail.html" class="related-item">
          <div class="related-item__img" style="background-image:url(img/project1.jpg)"></div>
          <h4 class="related-item__ttl">ParkINN</h4>
          <p class="related-item__date">21 March 2017</p>
        </a>
      </div>
    </div>--}}
  </div>
@endsection