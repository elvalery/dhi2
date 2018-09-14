@extends('layouts.main')

@section('content')
  <div class="container-fluid mh100vh">
    <div class="row">
      <div class="col">
        <h3 class="vacancies__ttl">@lang('dhi.job.title')</h3>
        <h3 class="vacancies__txt">@lang('dhi.job.description')</h3>
        <img src="img/vacancies_img.jpg" alt="DHI" class="vacancies__img img-r">
      </div>
    </div>
    <div class="row">
      <div class="col">
        <div class="vacancies__subttl">@lang('dhi.job.subtitle')</div>
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