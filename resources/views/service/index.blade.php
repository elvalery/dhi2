@extends('layouts.main')

@section('content')
  <div class="container-fluid mh100vh">
    <div class="row">
      <div class="col">
        <h3 class="vacancies__ttl">@lang('dhi.services.title')</h3>
      </div>
    </div>
    @if($list->isNotEmpty())
      <div class="row">
        @foreach($list as $service)
          <div class="col-md-3">
            <div class="vacancies-item clearfix">
              <a href="{{ route('service.detail', $service) }}"><div class="vacancies-item__img" style="background-image:url({{ asset('storage/' . $service->cover) }})"></div></a>
              <a href="{{ route('service.detail', $service) }}"><h4 class="vacancies-item__name">{{ $service->name }}</h4></a>
              <p class="vacancies-item__txt">{{ $service->description }}</p>
            </div>
          </div>
        @endforeach
      </div>
    @endif
  </div>
@endsection