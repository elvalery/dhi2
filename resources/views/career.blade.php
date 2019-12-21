@extends('layouts.main')

@section('content')
  <div class="container-fluid">
    <div class="row">
      <div class="col">
        <h1 class="page-ttl vacancies__page-ttl">@lang('dhi.job.title')</h1>
        <h2 class="vacancies__txt">@lang('dhi.job.description')</h2>
      </div>
    </div>
    <div class="vacancies__img">
      <img src="/img/career-animation.gif" alt="DHI">
    </div>
    <div class="row">
      <div class="col">
        <h3 class="block-ttl">@lang('dhi.job.subtitle')</h3>
      </div>
    </div>
    @if($list->isNotEmpty())
    <div class="row">
      @foreach($list as $job)
      <div class="col-md-3">
        <div class="vacancies-item clearfix">
          <div class="vacancies-item__img" style="background-image:url({{ asset('storage/' . $job->cover) }})"></div>
          <h4 class="vacancies-item__name">{{ $job->name }}</h4>
          <p class="vacancies-item__txt">{{ $job->details }}</p>
          @if($job->pdf)
            <a href="{{ asset('storage/' . $job->pdf)  }}" target="_blank" class="vacancies-item__link">@lang('dhi.job.pdf')</a>
          @endif
        </div>
      </div>
      @endforeach
    </div>
    @endif
  </div>
@endsection
