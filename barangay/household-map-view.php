<?php include "c-meta.php"; ?>
<body>

  <?php include "c-theme-loader.php"; ?>

  <div id="pcoded" class="pcoded">
      <div class="pcoded-overlay-box"></div>
      <div class="pcoded-container navbar-wrapper">
        <?php include "c-header.php"; ?>
          <div class="pcoded-main-container">
              <div class="pcoded-wrapper">
              
                  <?php include "c-sidebar.php"; ?>

                  <div class="pcoded-content">
                      <!-- Page-header start -->
                      <div class="page-header">
                          <div class="page-block">
                              <div class="row align-items-center">
                                  <div class="col-md-8">
                                      <div class="page-header-title">
                                        <h5 class="m-b-10">Household Map View</h5>
                                        <p class="m-b-0 js-city-brgy-name-hjagxcvsfder">Barangay, City</p>
                                      </div>
                                  </div>
                                  <div class="col-md-4">
                                      <ul class="breadcrumb-title">
                                          <li class="breadcrumb-item">
                                              <a href="index.html"> <i class="fa fa-home"></i> </a>
                                          </li>
                                          <li class="breadcrumb-item"><a href="#!">Dashboard</a>
                                          </li>
                                      </ul>
                                  </div>
                              </div>
                          </div>
                      </div>
                        <div class="pcoded-inner-content" id="map" style="height: calc(100vh - 178px) !important;">
                            
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    
    <?php include "c-footer-library.php"; ?>
    <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyCBarUcMUAi3XsZ9j7XO415Gnn1o4fA5y0&libraries=places"></script>
    <script type="text/javascript">

      function initMap(center) {
        const map = new google.maps.Map(document.getElementById("map"), {
          zoom: 15,
          center: center,
        });
        setMarkers(map);
      }

      var beaches = [];

      var brgy_profile = localStorage.getItem("user_brgy_profile");
      if(brgy_profile) {

        brgy_profile = JSON.parse(brgy_profile);
        var purok_list      = brgy_profile.barangay.household_list;
        var household_item  = [];

        for(let j = 0; j < purok_list.length; j++) {
          var item = [purok_list[j]['name'], parseFloat(purok_list[j]['latitude']), parseFloat(purok_list[j]['longitude'])];
          household_item.push(item);
        }

        beaches = household_item;
      }
      else {
        fetchBrgyProfile(function (brgy_profile_req) {

        });
      }

      function setMarkers(map) {
        const image = {
          url: "https://developers.google.com/maps/documentation/javascript/examples/full/images/beachflag.png",
          size: new google.maps.Size(20, 32),
          origin: new google.maps.Point(0, 0),
          anchor: new google.maps.Point(0, 32),
        };

        const shape = {
          coords: [1, 1, 1, 20, 18, 20, 18, 1],
          type: "poly",
        };

        for (let i = 0; i < beaches.length; i++) {
          const beach = beaches[i];

          new google.maps.Marker({
            position: { lat: beach[1], lng: beach[2] },
            map,
            icon: image,
            shape: shape,
            title: beach[0],
            zIndex: beach[3],
          });
        }
      }

      navigator.geolocation.getCurrentPosition(function (position) {
        const center = { lat: position.coords.latitude, lng: position.coords.longitude};
        initMap(center);
      },
      function errorCallback(error) {
        console.error(error);
      });

    </script>
    

</body>

</html>
