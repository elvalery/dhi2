@extends('layouts.main')

@section('content')
  <div class="container-fluid tabs" >
    <div class="row">
      <div class="col">
        <h1 class="page-ttl">@lang('Portfolio')</h1>
      </div>
    </div>
    <ul class="tab-mnu">
      <li class="tab-mnu__link active">@lang('All')</li>
      @foreach($categories as $category)
        <li class="tab-mnu__link">{{ $category->name }}</li>
      @endforeach
    </ul>

    <div class="tab-content active">
      <div class="row">
      @foreach($list as $portfolio)
        @if(($loop->iteration % 3 + 1) == 0)</div><div class="row">@endif

        <div class="col-sm-6 col-md-4">
          <a href="{{ route('portfolio.detail', $portfolio) }}" class="portfolio-item">
            <div class="portfolio-item__img">
              <img src="{{ asset('storage/' . $portfolio->cover) }}" alt="">
            </div>
            <h4 class="portfolio-item__ttl">{{ $portfolio->name }}</h4>
            <p class="portfolio-item__date">{{ $portfolio->completion_date->format('Y') }}</p>
          </a>
        </div>
      @endforeach
      </div>
    </div>

    @foreach($categories as $category)
      <div class="tab-content">
        <div class="row">
          @forelse($category->portfolios as $portfolio)
            @if(($loop->iteration % 3 + 1) == 0)</div><div class="row">@endif

          <div class="col-md-4">
            <a href="{{ route('portfolio.detail', $portfolio) }}" class="portfolio-item">
              <div class="portfolio-item__img">
                <img src="{{ asset('storage/' . $portfolio->cover) }}" alt="">
              </div>
              <h4 class="portfolio-item__ttl">{{ $portfolio->name }}</h4>
              <p class="portfolio-item__date">{{ $portfolio->completion_date->format('Y') }}</p>
            </a>
          </div>

          @empty
            <div class="col-md-12 pb-4">@lang('dhi.portfolio.empty-category')</div>
          @endforelse
        </div>
      </div>
    @endforeach

    <div class="partners">
      <div class="row">
        <div class="col-12">
          <div class="partners__img">
            <img src="img/stripe.jpg" alt="">
          </div>
        </div>
      </div>
    </div>

  </div>
@endsection
