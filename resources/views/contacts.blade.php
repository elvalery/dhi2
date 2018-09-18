@extends('layouts.main')

@section('content')
  <div class="container-fluid">
    <div class="row">
      <div class="col">
        <h3 class="contacts__ttl">Contacts</h3>
      </div>
    </div>
    <div class="row">
      <div class="col">
        <form action="{{ route('contacts.store') }}" method="POST" class="contacts-form" id="contact-form">
          {{ csrf_field() }}
          <div class="contacts-form__success"><span>@lang('dhi.contacts.success')</span></div>
          <input class="contacts-form__input" type="text" name="name" placeholder="Name" required>
          <input class="contacts-form__input" type="text" name="contacts" placeholder="Email / Phone" required>
          <button class="contacts-form__btn" type="submit" name="type" value="email">Write me</button>
          <button class="contacts-form__btn" type="submit" name="type" value="phone">Call me</button>
        </form>
      </div>
    </div>
    <div class="row">
      <div class="col">
        <div class="contacts-item">
          <h3 class="contacts-item__ttl">Ukraine</h3>
          <p class="contacts-item__txt">A: Kiev | 01001 | 18V Mykhailvska St. | Office 106</p>
          <a href="tel:+380979082678" class="contacts-item__phone">T: +380 97 908 26 78</a>
          <a href="mailto:info@dhi-architecture.com" class="contacts-item__email">E: info@dhi-architecture.com</a>
        </div>
        <div class="contacts-item">
          <h3 class="contacts-item__ttl">Netherlands</h3>
          <p class="contacts-item__txt">A: Rotterdam | 3014 JR | Drievriendenstraat 4b </p>
          <a href="tel:+31616918988" class="contacts-item__phone">T: +31 616 91 89 88</a>
          <a href="mailto:info@dhi-architecture.com" class="contacts-item__email">E: info@dhi-architecture.com</a>
        </div>
      </div>
    </div>
  </div>
  <div id="map" class="map"></div>

@endsection

@section('js')
  <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyDcKXBKsIMkew7SppGI1p-MKSBteq60bBY"></script>
  <script type="text/javascript">
    $().button('toggle');
    
    google.maps.event.addDomListener(window, 'load', init);
    function init() {
      var mapOptions = {
        zoom: 5,
        scrollwheel: true,
        scaleControl: false,
        draggable: true,
        streetViewControl: false,
        mapTypeControl: false,
        center: new google.maps.LatLng(51.1838815, 19.59458393),
        styles: [{"elementType":"geometry","stylers":[{"color":"#f5f5f5"}]},{"elementType":"labels.icon","stylers":[{"visibility":"off"}]},{"elementType":"labels.text.fill","stylers":[{"color":"#616161"}]},{"elementType":"labels.text.stroke","stylers":[{"color":"#f5f5f5"}]},{"featureType":"administrative.land_parcel","elementType":"labels.text.fill","stylers":[{"color":"#bdbdbd"}]},{"featureType":"poi","elementType":"geometry","stylers":[{"color":"#eeeeee"}]},{"featureType":"poi","elementType":"labels.text.fill","stylers":[{"color":"#757575"}]},{"featureType":"poi.park","elementType":"geometry","stylers":[{"color":"#e5e5e5"}]},{"featureType":"poi.park","elementType":"labels.text.fill","stylers":[{"color":"#9e9e9e"}]},{"featureType":"road","elementType":"geometry","stylers":[{"color":"#ffffff"}]},{"featureType":"road.arterial","elementType":"labels.text.fill","stylers":[{"color":"#757575"}]},{"featureType":"road.highway","elementType":"geometry","stylers":[{"color":"#dadada"}]},{"featureType":"road.highway","elementType":"labels.text.fill","stylers":[{"color":"#616161"}]},{"featureType":"road.local","elementType":"labels.text.fill","stylers":[{"color":"#9e9e9e"}]},{"featureType":"transit.line","elementType":"geometry","stylers":[{"color":"#e5e5e5"}]},{"featureType":"transit.station","elementType":"geometry","stylers":[{"color":"#eeeeee"}]},{"featureType":"water","elementType":"geometry","stylers":[{"color":"#c9c9c9"}]},{"featureType":"water","elementType":"labels.text.fill","stylers":[{"color":"#9e9e9e"}]}]
      };
      var mapElement = document.getElementById('map');
      var map = new google.maps.Map(mapElement, mapOptions);
      var marker = new google.maps.Marker({
        position: new google.maps.LatLng(50.453428, 30.5223159),
        map: map,
        icon: 'img/placeholder.svg'
      });
      var marker1 = new google.maps.Marker({
        position: new google.maps.LatLng(51.9216331, 4.4664101),
        map: map,
        icon: 'img/placeholder.svg'
      });
    }

    $("#contact-form [type=submit]").click(function() {
      $("[type=submit]", $(this).parents("form")).removeAttr("clicked");
      $(this).attr("clicked", "true");
    });
    
    $('#contact-form').on('submit', function(e){
      e.preventDefault();
  
      var type = $("#contact-form [type=submit][clicked=true]").val(),
        contacts = $("#contact-form input[name=contacts]").val(),
        name = $("#contact-form input[name=name]").val();
        
      $.ajax({
        type: 'POST',
        url: '{{ request('contacts.store') }}',
        data: {name: name, type: type, contacts: contacts},
        success: function(result){
          $("#contact-form div").css({"display":"flex"}).delay(5000).hide('slow');
        },
      });
    });
  </script>
@endsection