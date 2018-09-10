@extends('layouts.main')

@section('content')
  <div class="detail-slider">
    <div class="detail-slider__slide" style="background-image: url(img/detail-img.jpg)"></div>
    <div class="detail-slider__slide" style="background-image: url(img/detail-img.jpg)"></div>
    <div class="detail-slider__slide" style="background-image: url(img/detail-img.jpg)"></div>
    <div class="detail-slider__slide" style="background-image: url(img/detail-img.jpg)"></div>
  </div>
  
  <div class="container-fluid">
    <div class="row">
      <div class="col-md-8">
        <h3 class="detail__ttl">GREENFINITY PARK</h3>
        <p class="detail__txt"><span>Location:</span> Kyiv</p>
        <p class="detail__txt"><span>Client:</span> The JBG Companies</p>
        <p class="detail__txt"><span>Size:</span> 454000 SFNomination: Unbuilt commercial building</p>
        <p class="detail__txt"><span>Lead architect:</span> Andrey Yatsentuk</p>
        <p class="detail__txt last"><span>List of team members:</span> Andrey Yatsentuk, Maryna Savko, Natalia Lukasiuk, Yurii Molev, Iryna Mironchuk</p>
        <p class="detail__other">When the services and needs of a neighborhood evolve, the architecture that defines it must progress in tandem. As the world becomes more connected and cities more dynamic, a global approach to development, design, and construction must be employed to tether buildings and residents to local life. For ODA and the West Half Street site in Washington, DC, this meant an opportunity to create a cohesive architectural vision that links people, places, and events.</p>
        <p class="detail__other">The façades at West Half Street are tapestries of activity, reflections of the life surrounding them. The building’s topographical approach allows it to unite with, rather than compete against, nearby Nationals Park, a cultural landmark that, like most, was designed to stand independently. By peeling back the face of West Half Street as it approaches the stadium, the threshold between inside and outside, public and private, is blurred, allowing people and the building to participate with the world beyond their front doors. The lifting of the façade also echoes the gradient of the stadium and fosters a gentle transition between street, residence, and stadium. Youthful, airy, and energetic, the interiors at West Half Street are pockets of excitement themselves, defined by curved elements, minimalistic details, and a few tectonic finishes.</p>
      </div>
      <div class="col-md-4">
        <div class="detail-img" style="background-image:url(img/detail-img_other.jpg)"></div>
        <div class="detail-img" style="background-image:url(img/detail-img_other.jpg)"></div>
        <div class="detail-note"><span>INTEGRATED SERVICES</span>architecture, landscape architecture</div>
      </div>
    </div>
    <div class="row">
      <div class="col">
        <h3 class="related__ttl">RELATED PROJECTS</h3>
      </div>
    </div>
    <div class="row">
      <div class="col-md-4">
        <a href="portfolio-detail.html" class="related-item">
          <div class="related-item__img" style="background-image:url(img/project1.jpg)"></div>
          <h4 class="related-item__ttl">ParkINN</h4>
          <p class="related-item__date">21 March 2017</p>
        </a>
      </div>
      <div class="col-md-4">
        <a href="portfolio-detail.html" class="related-item">
          <div class="related-item__img" style="background-image:url(img/project1.jpg)"></div>
          <h4 class="related-item__ttl">ParkINN</h4>
          <p class="related-item__date">21 March 2017</p>
        </a>
      </div>
      <div class="col-md-4">
        <a href="portfolio-detail.html" class="related-item">
          <div class="related-item__img" style="background-image:url(img/project1.jpg)"></div>
          <h4 class="related-item__ttl">ParkINN</h4>
          <p class="related-item__date">21 March 2017</p>
        </a>
      </div>
    </div>
  </div>
@endsection