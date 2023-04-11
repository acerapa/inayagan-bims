<div class="modal js-hgafghfsxvbs" data-elem-lat="" data-elem-lng="" tabindex="-1" role="dialog">
  <div class="modal-dialog modal-lg" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title">Geolocation Picker</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div id="pac-container">
        <input class="form-control" id="pac-input" type="text" placeholder="Enter a location" />
      </div>
      <div class="modal-body" style="padding: 0px !important;">
        <div id="map" style="width:100%;height:500px;"></div>
      </div>
      <div class="modal-footer" style="justify-content: space-between !important;">
        <div>
          <p class="p-0 m-0">
            <code>Lat: </code><span class="js-hjagtdfbnxcd">0.0000000000</span><br/>
            <code>Lng: </code><span class="js-jkbxvbcdfgbh">0.0000000000</span>
          </p>
        </div>
        <div class="d-flex">
          <button type="button" class="btn btn-primary js-jkhbgvfdrsed">Save</button>
          <button type="button" class="btn btn-secondary ml-2" data-dismiss="modal">Close</button>
        </div>
        
      </div>
    </div>
  </div>
</div>
<script type="text/javascript">

      function initMap(lat, lng) {

        $(".js-hjagtdfbnxcd").text(lat);
        $(".js-jkbxvbcdfgbh").text(lng);

        var myLatLng = { lat, lng };

        var map = new google.maps.Map(document.getElementById('map'), {
          zoom: 15,
          center: myLatLng
        });

        var marker = new google.maps.Marker({
          position: myLatLng,
          map: map,
          draggable: true
        });

        const input = document.getElementById("pac-input");
        const options = {
          fields: ["formatted_address", "geometry", "name"],
          strictBounds: false,
          types: ["establishment"],
        };

        const autocomplete = new google.maps.places.Autocomplete(input, options);
        autocomplete.bindTo("bounds", map);

        autocomplete.addListener("place_changed", () => {
          const place = autocomplete.getPlace();

          if (place.geometry.viewport) {
            map.fitBounds(place.geometry.viewport);
          } else {
            map.setCenter(place.geometry.location);
            map.setZoom(17);
          }

          marker.setPosition(place.geometry.location);
          marker.setVisible(true);

        });

        google.maps.event.addListener(marker, 'dragend', (marker) => {
          console.log(marker);
          var latLng  = marker.latLng;
          var lat     = latLng.lat();
          var lng     = latLng.lng();
          $(".js-hjagtdfbnxcd").text(lat);
          $(".js-jkbxvbcdfgbh").text(lng);
        });

      }
  
  function showModalGeoPicker(elemLat, elemLng) {
    $(document).ready(function () {
      $(".js-hgafghfsxvbs").modal("show");
      $(".js-hgafghfsxvbs").attr('data-elem-lat', elemLat);
      $(".js-hgafghfsxvbs").attr('data-elem-lng', elemLng);
    });
  }

  function hideModalGeoPicker() {
    $(document).ready(function () {
      $(".js-hgafghfsxvbs").modal("hide");
    });
  }

  $('.js-hgafghfsxvbs').on('shown.bs.modal', function(){
    navigator.geolocation.getCurrentPosition(function (position) {
      initMap(position.coords.latitude, position.coords.longitude)
    },
    function errorCallback(error) {
      console.error(error);
    });
  });

  $(".js-jkhbgvfdrsed").click(function () {
    var elem_lat = $(".js-hgafghfsxvbs").attr("data-elem-lat");
    var elem_lon = $(".js-hgafghfsxvbs").attr("data-elem-lng");
    $(elem_lat).val($(".js-hjagtdfbnxcd").text());
    $(elem_lon).val($(".js-jkbxvbcdfgbh").text());
    $(".js-hgafghfsxvbs").attr('data-elem-lat', '');
    $(".js-hgafghfsxvbs").attr('data-elem-lng', '');
    $(".js-hjagtdfbnxcd").text('0.0000000000');
    $(".js-jkbxvbcdfgbh").text('0.0000000000');
    hideModalGeoPicker();

    //Callback for household registration
    saveLocalHousehold();
  });

</script>
<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyCBarUcMUAi3XsZ9j7XO415Gnn1o4fA5y0&libraries=places"></script>
<style>
  .pac-container { z-index: 99999999999 !important;}
</style>
