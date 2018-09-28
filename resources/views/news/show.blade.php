@extends('layouts.main')

@section('content')
<div class="container-fluid mh100vh">
  <div class="row">
    <div class="col">
      <h3 class="vacancies__ttl">{{ $news->title }}</h3>
    </div>
  </div>
  <div class="row">
    <div class="col-md-12 news__content">
      <span style="color: grey">{{ $news->date->format('d F Y')}}</span>
    {!! $news->content !!}
    </div>
  </div>
</div>
@endsection