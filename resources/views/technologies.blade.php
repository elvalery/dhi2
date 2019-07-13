@extends('layouts.main')

@section('content')
  <div class="container-fluid mh100vh">
    <div class="row">
      <div class="col">
        <h3 class="technologies__ttl">Technologies</h3>
      </div>
    </div>
    <div class="row technologies__wrap">
      <div class="col-md-5">
        <img src="img/tech_img1.jpg" alt="DHI" class="technologies__img img-r">
      </div>
      <div class="col-md-7">
        <h4 class="technologies__subttl">Building Information Modeling</h4>
        <p class="technologies__txt">We exploit the most advanced BIM, modeling, rendering and post-production technologies which the market can offer. At the same time, each and every team member can work in a single Team Work file.<br><br>The work process and file sharing and storage is organized using cloud technologies to enable seamless teamwork within design team as well as with client’s representatives.<br><br>Our overall aim is to achieve an effective and integrated synchronisation of architecture, interiors and engineering services through BIM design process which makes our internal and external collaboration and further work on documentation, modelling and CGI’s / animation production as a single seamless process.</p>
      </div>
    </div>
    <div class="row technologies__wrap">
      <div class="col-md-7 order-2 order-md-1">
        <h4 class="technologies__subttl">Parametric design</h4>
        <p class="technologies__txt">Designing or creating a design using mathematical algorithms and calculations. Allows you to create complex patterns, whole arrays or different surfaces. Created to ensure that the computer, upon inputting all the data, has calculated the most ergonomic model. If you change one parameter, the program immediately changes all configurations. It greatly accelerates the workflow and reduces design costs.</p>
      </div>
      <div class="col-md-5 order-1 order-md-2">
        <img src="img/tech_img2.jpg" alt="DHI" class="technologies__img img-r">
      </div>
    </div>
  </div>
@endsection