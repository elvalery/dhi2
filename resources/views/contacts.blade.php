@extends('layouts.main')

@section('content')
  <div class="container-fluid">
    <div class="row">
      <div class="col">
        <h1 class="page-ttl">@lang('Contacts')</h1>
      </div>
    </div>
    <div class="row">
      <div class="col-md-6">
        <form action="{{ route('contacts.store') }}" method="POST" class="contacts-form" id="contact-form">
          {{ csrf_field() }}
          <div class="contacts-form__success contacts-form__spinner">
            <span>@lang('Thank you! Your message has been sent')</span>
          </div>
          <div class="my-0">
            <input type="file" id="callback_user_file" name="file" onchange="uploadFile(this)">
            <label for="callback_user_file" class="form_input px-3 py-1 mt-2 text-left">@lang('Upload a test assignment')</label>
          </div>
          <div class="text-center my-0 service-choice-wrapper">
            <div class="service-choice">
              <input type="checkbox" name="action[]" value="2" id="callback_user_service_email" data-require-field="callback_user_email">
              <label for="callback_user_service_email" class="open__light">@lang('write me')</label>
            </div>
            <div class="service-choice">
              <input type="checkbox" name="action[]" value="5" id="callback_user_service_call" data-require-field="callback_user_phone">
              <label for="callback_user_service_call" class="open__light">@lang('call me')</label>
            </div>
          </div>
          <div class="row input-wrap mt-0 mb-3">
            <div class="col-sm-12 col-lg-6">
              <label for="callback_user_phone" class="form_label mt-2 mb-0"><i style="display: none">*</i> @lang('Contact phone number')<br>
                <input type="phone" id="callback_user_phone" class="contacts-form__input phone-mask" name="phone" placeholder="+__ (___) ___ __ __">
              </label>
            </div>
            <div class="col-sm-12 col-lg-6">
              <label for="callback_user_email" class="form_label mt-2 mb-0"><i style="display: none">*</i> @lang('E-mail')<br>
                <input type="email" name="email" id="callback_user_email" class="contacts-form__input" placeholder="@lang('Enter your e-mail')">
              </label>
            </div>
          </div>
          <div class="text-center my-2">
            <textarea name="description" class="form_textarea px-3 py-1" rows="8" cols="80" placeholder="@lang('Description')"></textarea>
          </div>
          <div class="text-right d-flex justify-content-center my-3">
            <button type="submit" class="contacts-form__btn" name="type">@lang('Get an offer')</button>
          </div>
        </form>
      </div>
      <div class="col-md-6">
        <div class="contacts-item">
          <h3 class="contacts-item__ttl">@lang('Ukraine')</h3>
          <p class="contacts-item__txt">@lang('A: Kiev | 01001 | 18V Mykhailvska St. | Office 106')</p>
          <a href="tel:+380443794895" class="contacts-item__phone">T: +380 (44) 379 48 95</a>
          <a href="mailto:info@dhi-architecture.com" class="contacts-item__email">E: info@dhi-architecture.com</a>
        </div>
        <div class="contacts-item">
          <h3 class="contacts-item__ttl">@lang('Netherlands')</h3>
          <p class="contacts-item__txt">@lang('A: Rotterdam | 3014 JR | Drievriendenstraat 4b')</p>
          <a href="tel:+31621100209" class="contacts-item__phone">T: +31 6 21 10 02 09</a>
          <a href="mailto:info@dhi-architecture.com" class="contacts-item__email">E: info@dhi-architecture.com</a>
        </div>
      </div>
    </div>
  </div>
  <div id="map" class="map"></div>

@endsection

@section('js')
  <script>
      function uploadFile(target) {
          $(target).siblings('label').html(target.files[0].name);
      }
  </script>

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

    $('#callback_user_service_email, #callback_user_service_call').on('change', function() {
      var fld = $('#' + $(this).data('require-field'));
      fld.prop('required', this.checked);
      $(fld.parent('label').find('i')[0]).toggle(this.checked);
    });

    $('#contact-form').on('submit', function(e){
      e.preventDefault();

      var formdata = new FormData($(this)[0]);

      $("#contact-form .contacts-form__success").css({ "display": "flex" });
      $("#contact-form .contacts-form__success").addClass('contacts-form__spinner');
      $.ajax({
        type: 'POST',
        url: '{{ request('contacts.store') }}',
        data: formdata,
        cache: false,
        processData: false,
        contentType: false,
        complete: function(result){
          $("#contact-form .contacts-form__success").removeClass('contacts-form__spinner').delay(5000).hide('slow');
        },
      });
    });
  </script>
@endsection
