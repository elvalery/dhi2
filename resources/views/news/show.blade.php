@extends('layouts.main')

@section('content')
<div class="container-fluid">
  <div class="row">
    <div class="col">
      <h1 class="page-ttl page-ttl_align_left">{{ $news->title }}</h1>
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