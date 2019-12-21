@extends('layouts.main')

@section('content')
  <div class="container-fluid">
    <div class="row">
      <div class="col">
        <h1 class="page-ttl">@lang('News')</h1>
      </div>
    </div>
    @if($list->isNotEmpty())
      <div class="row">
        @foreach($list as $news)
          <div class="col-md-3">
            <div class="vacancies-item clearfix">
              <a href="{{ route('news.detail', $news) }}"><div class="vacancies-item__img" style="background-image:url({{ asset('storage/' . $news->cover) }})"></div></a>
              <a href="{{ route('news.detail', $news) }}"><h4 class="vacancies-item__name">{{ $news->title }}</h4></a>
              <p class="vacancies-item__txt">{{ $news->description }}</p>
            </div>
          </div>
        @endforeach
      </div>
    @endif
  </div>
@endsection
