@extends('layouts.main')

@section('content')
  <div class="container-fluid">
    <div class="row">
      <div class="col">
        <h3 class="portfolio__ttl">Portfolio</h3>
      </div>
    </div>
    <ul class="tab-mnu">
      <li class="tab-mnu__link active">All</li>
      @foreach($categories as $category)
        <li class="tab-mnu__link">{{ $category }}</li>
      @endforeach
    </ul>
  </div>
  <div class="container-fluid">
    
    <div class="tab-content active">
      <div class="row">
      @foreach($list as $portfolio)
        @if($loop->iteration % 3 == 0)</div><div class="row">@endif
        
        <div class="col-md-4">
          <a href="{{ route('portfolio.detail', $portfolio) }}" class="portfolio-item">
            <div class="portfolio-item__img" style="background-image:url({{ asset('storage/' . $portfolio->cover) }})"></div>
            <h4 class="portfolio-item__ttl">{{ $portfolio->name }}</h4>
            <p class="portfolio-item__date">{{ $portfolio->completion_date }}</p>
          </a>
        </div>
      @endforeach
      </div>
    </div>
    
    <div class="tab-content">
      <div class="row">
        <div class="col-md-4">
          <a href="portfolio-detail.html" class="portfolio-item">
            <div class="portfolio-item__img" style="background-image:url(img/project1.jpg)"></div>
            <h4 class="portfolio-item__ttl">ParkINN</h4>
            <p class="portfolio-item__date">21 March 2017</p>
          </a>
        </div>
        <div class="col-md-4">
          <a href="portfolio-detail.html" class="portfolio-item">
            <div class="portfolio-item__img" style="background-image:url(img/project2.jpg)"></div>
            <h4 class="portfolio-item__ttl">Greenfinity Park</h4>
            <p class="portfolio-item__date">21 March 2017</p>
          </a>
        </div>
        <div class="col-md-4">
          <a href="portfolio-detail.html" class="portfolio-item">
            <div class="portfolio-item__img" style="background-image:url(img/project3.jpg)"></div>
            <h4 class="portfolio-item__ttl">Retroville</h4>
            <p class="portfolio-item__date">21 March 2017</p>
          </a>
        </div>
      </div>
      <div class="row">
        <div class="col-md-4">
          <a href="portfolio-detail.html" class="portfolio-item">
            <div class="portfolio-item__img" style="background-image:url(img/project4.jpg)"></div>
            <h4 class="portfolio-item__ttl">«OLX» office interior</h4>
            <p class="portfolio-item__date">21 March 2017</p>
          </a>
        </div>
        <div class="col-md-4">
          <a href="portfolio-detail.html" class="portfolio-item">
            <div class="portfolio-item__img" style="background-image:url(img/project5.jpg)"></div>
            <h4 class="portfolio-item__ttl">“Sky Mall” shopping mall 2nd phase </h4>
            <p class="portfolio-item__date">21 March 2017</p>
          </a>
        </div>
        <div class="col-md-4">
          <a href="portfolio-detail.html" class="portfolio-item">
            <div class="portfolio-item__img" style="background-image:url(img/project6.jpg)"></div>
            <h4 class="portfolio-item__ttl">Residential complex on Gagarin Plateau</h4>
            <p class="portfolio-item__date">21 March 2017</p>
          </a>
        </div>
      </div>
    </div>
    
    <div class="tab-content">
      <div class="row">
        <div class="col-md-4">
          <a href="portfolio-detail.html" class="portfolio-item">
            <div class="portfolio-item__img" style="background-image:url(img/project1.jpg)"></div>
            <h4 class="portfolio-item__ttl">ParkINN</h4>
            <p class="portfolio-item__date">21 March 2017</p>
          </a>
        </div>
        <div class="col-md-4">
          <a href="portfolio-detail.html" class="portfolio-item">
            <div class="portfolio-item__img" style="background-image:url(img/project2.jpg)"></div>
            <h4 class="portfolio-item__ttl">Greenfinity Park</h4>
            <p class="portfolio-item__date">21 March 2017</p>
          </a>
        </div>
        <div class="col-md-4">
          <a href="portfolio-detail.html" class="portfolio-item">
            <div class="portfolio-item__img" style="background-image:url(img/project3.jpg)"></div>
            <h4 class="portfolio-item__ttl">Retroville</h4>
            <p class="portfolio-item__date">21 March 2017</p>
          </a>
        </div>
      </div>
      <div class="row">
        <div class="col-md-4">
          <a href="portfolio-detail.html" class="portfolio-item">
            <div class="portfolio-item__img" style="background-image:url(img/project4.jpg)"></div>
            <h4 class="portfolio-item__ttl">«OLX» office interior</h4>
            <p class="portfolio-item__date">21 March 2017</p>
          </a>
        </div>
        <div class="col-md-4">
          <a href="portfolio-detail.html" class="portfolio-item">
            <div class="portfolio-item__img" style="background-image:url(img/project5.jpg)"></div>
            <h4 class="portfolio-item__ttl">“Sky Mall” shopping mall 2nd phase </h4>
            <p class="portfolio-item__date">21 March 2017</p>
          </a>
        </div>
        <div class="col-md-4">
          <a href="portfolio-detail.html" class="portfolio-item">
            <div class="portfolio-item__img" style="background-image:url(img/project6.jpg)"></div>
            <h4 class="portfolio-item__ttl">Residential complex on Gagarin Plateau</h4>
            <p class="portfolio-item__date">21 March 2017</p>
          </a>
        </div>
      </div>
    </div>
    
    <div class="tab-content">
      <div class="row">
        <div class="col-md-4">
          <a href="portfolio-detail.html" class="portfolio-item">
            <div class="portfolio-item__img" style="background-image:url(img/project1.jpg)"></div>
            <h4 class="portfolio-item__ttl">ParkINN</h4>
            <p class="portfolio-item__date">21 March 2017</p>
          </a>
        </div>
        <div class="col-md-4">
          <a href="portfolio-detail.html" class="portfolio-item">
            <div class="portfolio-item__img" style="background-image:url(img/project2.jpg)"></div>
            <h4 class="portfolio-item__ttl">Greenfinity Park</h4>
            <p class="portfolio-item__date">21 March 2017</p>
          </a>
        </div>
        <div class="col-md-4">
          <a href="portfolio-detail.html" class="portfolio-item">
            <div class="portfolio-item__img" style="background-image:url(img/project3.jpg)"></div>
            <h4 class="portfolio-item__ttl">Retroville</h4>
            <p class="portfolio-item__date">21 March 2017</p>
          </a>
        </div>
      </div>
      <div class="row">
        <div class="col-md-4">
          <a href="portfolio-detail.html" class="portfolio-item">
            <div class="portfolio-item__img" style="background-image:url(img/project4.jpg)"></div>
            <h4 class="portfolio-item__ttl">«OLX» office interior</h4>
            <p class="portfolio-item__date">21 March 2017</p>
          </a>
        </div>
        <div class="col-md-4">
          <a href="portfolio-detail.html" class="portfolio-item">
            <div class="portfolio-item__img" style="background-image:url(img/project5.jpg)"></div>
            <h4 class="portfolio-item__ttl">“Sky Mall” shopping mall 2nd phase </h4>
            <p class="portfolio-item__date">21 March 2017</p>
          </a>
        </div>
        <div class="col-md-4">
          <a href="portfolio-detail.html" class="portfolio-item">
            <div class="portfolio-item__img" style="background-image:url(img/project6.jpg)"></div>
            <h4 class="portfolio-item__ttl">Residential complex on Gagarin Plateau</h4>
            <p class="portfolio-item__date">21 March 2017</p>
          </a>
        </div>
      </div>
    </div>
    
    <div class="tab-content">
      <div class="row">
        <div class="col-md-4">
          <a href="portfolio-detail.html" class="portfolio-item">
            <div class="portfolio-item__img" style="background-image:url(img/project1.jpg)"></div>
            <h4 class="portfolio-item__ttl">ParkINN</h4>
            <p class="portfolio-item__date">21 March 2017</p>
          </a>
        </div>
        <div class="col-md-4">
          <a href="portfolio-detail.html" class="portfolio-item">
            <div class="portfolio-item__img" style="background-image:url(img/project2.jpg)"></div>
            <h4 class="portfolio-item__ttl">Greenfinity Park</h4>
            <p class="portfolio-item__date">21 March 2017</p>
          </a>
        </div>
        <div class="col-md-4">
          <a href="portfolio-detail.html" class="portfolio-item">
            <div class="portfolio-item__img" style="background-image:url(img/project3.jpg)"></div>
            <h4 class="portfolio-item__ttl">Retroville</h4>
            <p class="portfolio-item__date">21 March 2017</p>
          </a>
        </div>
      </div>
      <div class="row">
        <div class="col-md-4">
          <a href="portfolio-detail.html" class="portfolio-item">
            <div class="portfolio-item__img" style="background-image:url(img/project4.jpg)"></div>
            <h4 class="portfolio-item__ttl">«OLX» office interior</h4>
            <p class="portfolio-item__date">21 March 2017</p>
          </a>
        </div>
        <div class="col-md-4">
          <a href="portfolio-detail.html" class="portfolio-item">
            <div class="portfolio-item__img" style="background-image:url(img/project5.jpg)"></div>
            <h4 class="portfolio-item__ttl">“Sky Mall” shopping mall 2nd phase </h4>
            <p class="portfolio-item__date">21 March 2017</p>
          </a>
        </div>
        <div class="col-md-4">
          <a href="portfolio-detail.html" class="portfolio-item">
            <div class="portfolio-item__img" style="background-image:url(img/project6.jpg)"></div>
            <h4 class="portfolio-item__ttl">Residential complex on Gagarin Plateau</h4>
            <p class="portfolio-item__date">21 March 2017</p>
          </a>
        </div>
      </div>
    </div>
    
    <div class="tab-content">
      <div class="row">
        <div class="col-md-4">
          <a href="portfolio-detail.html" class="portfolio-item">
            <div class="portfolio-item__img" style="background-image:url(img/project1.jpg)"></div>
            <h4 class="portfolio-item__ttl">ParkINN</h4>
            <p class="portfolio-item__date">21 March 2017</p>
          </a>
        </div>
        <div class="col-md-4">
          <a href="portfolio-detail.html" class="portfolio-item">
            <div class="portfolio-item__img" style="background-image:url(img/project2.jpg)"></div>
            <h4 class="portfolio-item__ttl">Greenfinity Park</h4>
            <p class="portfolio-item__date">21 March 2017</p>
          </a>
        </div>
        <div class="col-md-4">
          <a href="portfolio-detail.html" class="portfolio-item">
            <div class="portfolio-item__img" style="background-image:url(img/project3.jpg)"></div>
            <h4 class="portfolio-item__ttl">Retroville</h4>
            <p class="portfolio-item__date">21 March 2017</p>
          </a>
        </div>
      </div>
      <div class="row">
        <div class="col-md-4">
          <a href="portfolio-detail.html" class="portfolio-item">
            <div class="portfolio-item__img" style="background-image:url(img/project4.jpg)"></div>
            <h4 class="portfolio-item__ttl">«OLX» office interior</h4>
            <p class="portfolio-item__date">21 March 2017</p>
          </a>
        </div>
        <div class="col-md-4">
          <a href="portfolio-detail.html" class="portfolio-item">
            <div class="portfolio-item__img" style="background-image:url(img/project5.jpg)"></div>
            <h4 class="portfolio-item__ttl">“Sky Mall” shopping mall 2nd phase </h4>
            <p class="portfolio-item__date">21 March 2017</p>
          </a>
        </div>
        <div class="col-md-4">
          <a href="portfolio-detail.html" class="portfolio-item">
            <div class="portfolio-item__img" style="background-image:url(img/project6.jpg)"></div>
            <h4 class="portfolio-item__ttl">Residential complex on Gagarin Plateau</h4>
            <p class="portfolio-item__date">21 March 2017</p>
          </a>
        </div>
      </div>
    </div>
    
    <div class="tab-content">
      <div class="row">
        <div class="col-md-4">
          <a href="portfolio-detail.html" class="portfolio-item">
            <div class="portfolio-item__img" style="background-image:url(img/project1.jpg)"></div>
            <h4 class="portfolio-item__ttl">ParkINN</h4>
            <p class="portfolio-item__date">21 March 2017</p>
          </a>
        </div>
        <div class="col-md-4">
          <a href="portfolio-detail.html" class="portfolio-item">
            <div class="portfolio-item__img" style="background-image:url(img/project2.jpg)"></div>
            <h4 class="portfolio-item__ttl">Greenfinity Park</h4>
            <p class="portfolio-item__date">21 March 2017</p>
          </a>
        </div>
        <div class="col-md-4">
          <a href="portfolio-detail.html" class="portfolio-item">
            <div class="portfolio-item__img" style="background-image:url(img/project3.jpg)"></div>
            <h4 class="portfolio-item__ttl">Retroville</h4>
            <p class="portfolio-item__date">21 March 2017</p>
          </a>
        </div>
      </div>
      <div class="row">
        <div class="col-md-4">
          <a href="portfolio-detail.html" class="portfolio-item">
            <div class="portfolio-item__img" style="background-image:url(img/project4.jpg)"></div>
            <h4 class="portfolio-item__ttl">«OLX» office interior</h4>
            <p class="portfolio-item__date">21 March 2017</p>
          </a>
        </div>
        <div class="col-md-4">
          <a href="portfolio-detail.html" class="portfolio-item">
            <div class="portfolio-item__img" style="background-image:url(img/project5.jpg)"></div>
            <h4 class="portfolio-item__ttl">“Sky Mall” shopping mall 2nd phase </h4>
            <p class="portfolio-item__date">21 March 2017</p>
          </a>
        </div>
        <div class="col-md-4">
          <a href="portfolio-detail.html" class="portfolio-item">
            <div class="portfolio-item__img" style="background-image:url(img/project6.jpg)"></div>
            <h4 class="portfolio-item__ttl">Residential complex on Gagarin Plateau</h4>
            <p class="portfolio-item__date">21 March 2017</p>
          </a>
        </div>
      </div>
    </div>
  
  </div>
@endsection