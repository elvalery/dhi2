@extends('layouts.main')

@section('content')
  <div class="container-fluid">
    <div class="row">
      <div class="col">
        <h1 class="page-ttl">@lang('Technologies')</h1>
      </div>
    </div>
    @if (app()->getLocale() == 'ru')
      <div class="row technologies__wrap">
        <div class="col-lg-6 col-md-6">
          <img src="/img/tech_img1.jpg" alt="DHI" class="technologies__img img-r">
        </div>
        <div class="col-lg-6 col-md-6">
          <div class="technologies__content">
            <h4 class="technologies__subttl">Информационное моделирование зданий</h4>
            <p class="technologies__txt">
              Мы используем самые передовые технологии BIM, моделирования, рендеринга и постпродакшена, которые может предложить рынок. Одновременно каждый член команды может работать в одном файле Team Work.<br><br>
              Рабочий процесс, совместное использование и хранение файлов, организованы с использованием облачных технологий, чтобы обеспечить бесперебойную командную работу как внутри команды разработчиков, так и с представителями клиента.<br><br>
              Наша главная цель - добиться эффективной и интегрированной синхронизации архитектуры, интерьеров и инженерных услуг с помощью BIM моделирования. Это делает наше внутреннее и внешнее сотрудничество и дальнейшую работу над документацией, моделированием, CGI или производством анимации единым цельным процессом.
            </p>
          </div>
        </div>
      </div>
      <div class="row technologies__wrap">
        <div class="col-lg-6 order-2 order-md-1 col-md-6">
          <div class="technologies__content">
            <h4 class="technologies__subttl">Параметрический дизайн</h4>
            <p class="technologies__txt">
              Проектирование или создание дизайна с использованием математических алгоритмов и вычислений позволяет нам создавать сложные шаблоны, целые массивы или различные поверхности. Алгоритм создан так, чтобы компьютер после ввода всех данных рассчитал наиболее эргономичную модель. Если вы измените один параметр, программа немедленно изменит все конфигурации. Это значительно ускоряет рабочий процесс и снижает затраты на проектирование.
            </p>
          </div>
        </div>
        <div class="col-lg-6 col-md-6 order-1 order-md-2">
          <img src="/img/tech_img2.jpg" alt="DHI" class="technologies__img img-r">
        </div>
      </div>
    @else
    <div class="row technologies__wrap">
      <div class="col-lg-6 col-md-6">
        <img src="img/tech_img1.jpg" alt="DHI" class="technologies__img img-r">
      </div>
      <div class="col-lg-6 col-md-6">
        <div class="technologies__content">
          <h4 class="technologies__subttl">Building Information Modeling</h4>
          <p class="technologies__txt">
            We exploit the most advanced BIM, modeling, rendering and post-production technologies which the market can
            offer. At the same time, each and every team member can work in a single Team Work file.<br><br>
            The work process and file sharing and storage is organized using cloud technologies to enable seamless teamwork
            within design team as well as with client’s representatives.<br><br>
            Our overall aim is to achieve an effective and integrated synchronisation of architecture, interiors and
            engineering services through BIM design process which makes our internal and external collaboration and further
            work on documentation, modelling and CGI’s / animation production as a single seamless process.
          </p>
        </div>
      </div>
    </div>
    <div class="row technologies__wrap">
      <div class="col-lg-6 order-2 order-md-1 col-md-6">
        <div class="technologies__content">
          <h4 class="technologies__subttl">Parametric design</h4>
          <p class="technologies__txt">
            Designing or creating a design using mathematical algorithms and calculations. Allows you to create complex
            patterns, whole arrays or different surfaces. Created to ensure that the computer, upon inputting all the data,
            has calculated the most ergonomic model. If you change one parameter, the program immediately changes all
            configurations. It greatly accelerates the workflow and reduces design costs.</p>
        </div>
      </div>
      <div class="col-lg-6 col-md-6 order-1 order-md-2">
        <img src="img/tech_img2.jpg" alt="DHI" class="technologies__img img-r">
      </div>
    </div>
    @endif
  </div>
@endsection
