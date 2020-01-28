@extends('layouts.main')

@section('content')
  <div class="container-fluid service__cover" style="background-image: url({{ asset('storage/' . $service->image) }})">
    <div class="row">
      <div class="col-md-12">
        <h1 class="page-ttl page-ttl_white page-ttl_big">{{ $service->name }}</h1>
      </div>
    </div>
    <div class="row">
      <div class="col-md-10 col-lg-8 offset-lg-2 offset-md-1 service__txt">
        {!! $service->details !!}
      </div>
    </div>
  </div>
  @if($service->portfolio)
  <div class="container-fluid">
    <div class="row">
      <div class="col-md-12">
        <h3 class="block-ttl">@lang('Related projects')</h3>
      </div>
    </div>
    <div class="row">
      @foreach($service->portfolio as $item)
      <div class="col-sm-6 col-md-3">
        <div class="vacancies-item">
          <a href="{{ route('portfolio.detail', $item) }}">
            <div class="vacancies-item__img" style="background-image: url({{ asset('storage/' . $item->cover) }})"></div>
            <h4 class="vacancies-item__name">{{ $item->name }}</h4>
          </a>
        </div>
      </div>
      @endforeach
    </div>
  </div>
  @endif

@endsection
