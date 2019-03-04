<?php
include "header.php";
?>

<body>
  <div id="main" class="m-scene">

    <?php
    include "nav.php";
     ?>

    <main>
      <div class="scene-element scene_element--slideUp">
        <div class=form>
          <h1 class=title>Contact <span style="color:#09d9ff">Me</span></h1>
          <p>
            If you have any questions, or would like me to work for you, please contact me below
            <br />
          </p>
          <form name=contactform class="form1" action="send_form_email.php" method="POST">

            <div class="name-email-div">
              <input type="text" name="name" placeholder="Name" class="name draw" required>
              <span class="focus-border">
              	<i></i>
              </span>
            </div>

            <div class="name-email-div">
              <input type="email" name="email" class="draw email" placeholder="Email" required>
              <span class="focus-border">
              	<i></i>
              </span>
            </div>

            <br />

            <div class="textarea-div">
              <textarea class='draw' name="message" placeholder="Message" required></textarea>
              <span class="focus-border">
              <i></i>
            </span>
            </div>

            <br />

            <input value="SUBMIT" type="submit" class="submit">
          </form>

        </div>

        <!-- MAP -->
        <div class=map id="map"></div>

      </div>
    </main>
    <script type="text/javascript">
      function initMap() {
        var uluru = {
          lat: 43.068372,
          lng: -87.885815
        };
        var map = new google.maps.Map(document.getElementById('map'), {
          zoom: 11,
          center: uluru,
          disableDefaultUI: true,
          styles: [{
              elementType: "geometry.fill",
              stylers: [{
                  color: "#27c5e5"
                },
                {
                  saturation: 30
                }
              ]
            },
            {
              elementType: "labels.text.fill",
              stylers: [{
                color: "#f9fcff"
              }]
            },
            {
              elementType: "labels.text.stroke",
              stylers: [{
                  color: "#242f3e"
                },
                {
                  visibility: "simplified"
                }
              ]
            },
            {
              featureType: "administrative.land_parcel",
              elementType: "labels",
              stylers: [{
                visibility: "off"
              }]
            },
            {
              featureType: "poi",
              elementType: "labels.text",
              stylers: [{
                visibility: "off"
              }]
            },
            {
              featureType: "poi",
              elementType: "labels.text.fill",
              stylers: [{
                color: "#d59563"
              }]
            },
            {
              featureType: "poi.business",
              stylers: [{
                visibility: "off"
              }]
            },
            {
              featureType: "poi.park",
              elementType: "geometry",
              stylers: [{
                color: "#263c3f"
              }]
            },
            {
              featureType: "poi.park",
              elementType: "geometry.fill",
              stylers: [{
                color: "#1fd8ff"
              }]
            },
            {
              featureType: "poi.park",
              elementType: "labels.text.fill",
              stylers: [{
                color: "#6b9a76"
              }]
            },
            {
              featureType: "road",
              elementType: "geometry",
              stylers: [{
                color: "#62e0f7"
              }]
            },
            {
              featureType: "road",
              elementType: "geometry.stroke",
              stylers: [{
                color: "#333"
              }]
            },
            {
              featureType: "road",
              elementType: "labels.icon",
              stylers: [{
                visibility: "off"
              }]
            },
            {
              featureType: "road",
              elementType: "labels.text.fill",
              stylers: [{
                color: "#62e0f7"
              }]
            },
            {
              featureType: "road.arterial",
              elementType: "geometry.fill",
              stylers: [{
                color: "#0cb7d6"
              }]
            },
            {
              featureType: "road.arterial",
              elementType: "labels.text.fill",
              stylers: [{
                color: "#fafafa"
              }]
            },
            {
              featureType: "road.highway",
              elementType: "geometry",
              stylers: [{
                color: "#746855"
              }]
            },
            {
              featureType: "road.highway",
              elementType: "geometry.fill",
              stylers: [{
                  color: "#1fbcdc"
                },
                {
                  weight: 0.5
                }
              ]
            },
            {
              featureType: "road.highway",
              elementType: "geometry.stroke",
              stylers: [{
                visibility: "off"
              }]
            },
            {
              featureType: "road.highway",
              elementType: "labels.text.fill",
              stylers: [{
                color: "#6ed9f3"
              }]
            },
            {
              featureType: "road.local",
              elementType: "geometry.fill",
              stylers: [{
                color: "#4ae3ff"
              }]
            },
            {
              featureType: "road.local",
              elementType: "labels",
              stylers: [{
                visibility: "off"
              }]
            },
            {
              featureType: "transit",
              stylers: [{
                visibility: "off"
              }]
            },
            {
              featureType: "transit",
              elementType: "geometry",
              stylers: [{
                color: "#2f3948"
              }]
            },
            {
              featureType: "transit.station",
              elementType: "labels.text.fill",
              stylers: [{
                color: "#d59563"
              }]
            },
            {
              featureType: "water",
              stylers: [{
                color: "#141414"
              }, ]
            },
            {
              featureType: "water",
              elementType: "geometry",
              stylers: [{
                color: "#141414"
              }]
            },
            {
              featureType: "water",
              elementType: "geometry.fill",
              stylers: [{
                color: "#141414"
              }]
            },
            {
              featureType: "water",
              elementType: "labels.text.fill",
              stylers: [{
                color: "#515c6d"
              }]
            },
            {
              featureType: "water",
              elementType: "labels.text.stroke",
              stylers: [{
                color: "#17263c"
              }]
            }
          ]
        });
        var marker = new google.maps.Marker({
          position: uluru,
          map: map,
        });

      }
    </script>
    <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyAD1blSwTkuXBSVTIIFjgkVPxsVhtS31gk
&callback=initMap" async defer></script>
    <script src="_js/index.js"></script>
    <script src="_js/ss.js"></script>
    <?php
      include "navscript.php";
     ?>

  </div>
</body>

</html>
