@extends('layouts.main')

@section('content')
  <div class="container-fluid service__cover" style="background-image: url({{ asset('storage/' . $service->image) }})">
    <div class="row">
      <div class="col-md-8">
        <h3 class="service__ttl">{{ $service->name }}</h3>
      </div>
    </div>
    <div class="row">
      <div class="col-md-12 service__txt">
        {!! $service->details !!}
      </div>
    </div>
  </div>
  @if($service->portfolio)
  <div class="container-fluid">
    <div class="row">
      <div class="col-md-8"><h3 class="detail__ttl">@lang('dhi.service.projects-ttl')</h3></div>
    </div>
    <div class="row">
      @foreach($service->portfolio as $item)
      <div class="col-md-3">
        <div class="vacancies-item clearfix">
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