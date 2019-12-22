@extends('layouts.main')

@section('content')
  <div class="container-fluid">
    <div class="row">
      <div class="col">
        <h1 class="page-ttl">@lang('People')</h1>
      </div>
    </div>
    <div class="row justify-content-md-around">
      @if(app()->getLocale() == 'ru')
      <div class="col-xs-6 col-sm-4">
        <div class="people-item">
          <div class="people-item__img">
            <img src="/img/people1.jpg" alt="Яцентюк Андрей">
          </div>
          <h4 class="people-item__name">Яцентюк Андрей</h4>
          <p class="people-item__txt">Партнер, директор по проектированию</p>
          <p class="people-item__txt">Магистр архитектуры, НСАУ</p>
        </div>
      </div>
      @else
        <div class="col-xs-6 col-sm-4">
          <div class="people-item">
            <div class="people-item__img">
              <img src="/img/people1.jpg" alt="Andrey Yatsentuk">
            </div>
            <h4 class="people-item__name">Andrey Yatsentuk</h4>
            <p class="people-item__txt">Founder, Chief Architect</p>
            <p class="people-item__txt">Master of Architecture, NSAU</p>
          </div>
        </div>
      @endif
{{--      <div class="col-xs-6 col-sm-4">--}}
{{--        <div class="people-item">--}}
{{--          <div class="people-item__img">--}}
{{--            <img src="img/people2.jpg" alt="Яцентюк Андрей">--}}
{{--          </div>--}}
{{--          <h4 class="people-item__name">Яцентюк Андрей</h4>--}}
{{--          <p class="people-item__txt">Партнер, директор по проектированию</p>--}}
{{--          <p class="people-item__txt">Магистр архитектуры, НСАУ</p>--}}
{{--        </div>--}}
{{--      </div>--}}
{{--      <div class="col-xs-6 col-sm-4">--}}
{{--        <div class="people-item">--}}
{{--          <div class="people-item__img">--}}
{{--            <img src="img/people3.jpg" alt="Яцентюк Андрей">--}}
{{--          </div>--}}
{{--          <h4 class="people-item__name">Яцентюк Андрей</h4>--}}
{{--          <p class="people-item__txt">Партнер, директор по проектированию</p>--}}
{{--          <p class="people-item__txt">Магистр архитектуры, НСАУ</p>--}}
{{--        </div>--}}
{{--      </div>--}}
{{--      <div class="col-xs-6 col-sm-4">--}}
{{--        <div class="people-item">--}}
{{--          <div class="people-item__img">--}}
{{--            <img src="img/people4.jpg" alt="Яцентюк Андрей">--}}
{{--          </div>--}}
{{--          <h4 class="people-item__name">Яцентюк Андрей</h4>--}}
{{--          <p class="people-item__txt">Партнер, директор по проектированию</p>--}}
{{--          <p class="people-item__txt">Магистр архитектуры, НСАУ</p>--}}
{{--        </div>--}}
{{--      </div>--}}
{{--      <div class="col-xs-6 col-sm-4">--}}
{{--        <div class="people-item">--}}
{{--          <div class="people-item__img">--}}
{{--            <img src="img/people5.jpg" alt="Яцентюк Андрей">--}}
{{--          </div>--}}
{{--          <h4 class="people-item__name">Яцентюк Андрей</h4>--}}
{{--          <p class="people-item__txt">Партнер, директор по проектированию</p>--}}
{{--          <p class="people-item__txt">Магистр архитектуры, НСАУ</p>--}}
{{--        </div>--}}
{{--      </div>--}}
{{--      <div class="col-xs-6 col-sm-4">--}}
{{--        <div class="people-item">--}}
{{--          <div class="people-item__img">--}}
{{--            <img src="img/people6.jpg" alt="Яцентюк Андрей">--}}
{{--          </div>--}}
{{--          <h4 class="people-item__name">Яцентюк Андрей</h4>--}}
{{--          <p class="people-item__txt">Партнер, директор по проектированию</p>--}}
{{--          <p class="people-item__txt">Магистр архитектуры, НСАУ</p>--}}
{{--        </div>--}}
{{--      </div>--}}
{{--      <div class="col-xs-6 col-sm-4">--}}
{{--        <div class="people-item">--}}
{{--          <div class="people-item__img">--}}
{{--            <img src="img/people7.jpg" alt="Яцентюк Андрей">--}}
{{--          </div>--}}
{{--          <h4 class="people-item__name">Яцентюк Андрей</h4>--}}
{{--          <p class="people-item__txt">Партнер, директор по проектированию</p>--}}
{{--          <p class="people-item__txt">Магистр архитектуры, НСАУ</p>--}}
{{--        </div>--}}
{{--      </div>--}}
{{--      <div class="col-xs-6 col-sm-4">--}}
{{--        <div class="people-item">--}}
{{--          <div class="people-item__img">--}}
{{--            <img src="img/people8.jpg" alt="Яцентюк Андрей">--}}
{{--          </div>--}}
{{--          <h4 class="people-item__name">Яцентюк Андрей</h4>--}}
{{--          <p class="people-item__txt">Партнер, директор по проектированию</p>--}}
{{--          <p class="people-item__txt">Магистр архитектуры, НСАУ</p>--}}
{{--        </div>--}}
{{--      </div>--}}
    </div>
  </div>
@endsection
