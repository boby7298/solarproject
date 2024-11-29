<?php include("connection.php"); ?>

      <link rel="stylesheet" href="testingstyle.css">
      </head>
      <body>
        <div class="first_container">
      <div class="first_box1">
        <img src="image/roof.png" alt="" />
      </div>
       
      <div class="first_box2">
      <form action="testing2.php" method="get">
        <p class="first_class1">Check de mogelijkheden op je dak</p>
        <p id="first_vul">
          Vul hieronder je adres in, bereken je dakmaten en bekijk hoeveel je
          kan besparen.
        </p>
         <div id="first_addressw">
          <p id="first_address1">Address:</p>
          <p id="first_address2">Pentagon Building, Washington, VA, USA</p>
        </div>
          <input id="first_address" name="address" type="text" placeholder="Enter address here" />
          <div>
      
              <input type="text" id="latitude" name="latitude"/>
              <input type="text" id="longitude" name="longitude"/>
              <div class="first_icon">
         <input type="Submit" value="Start" id="first_btn_submit" name="save"/>
              <i class="fa-solid fa-arrow-right"></i>
              </div>
            </form>
            </div>
        </div>
        </div>

        <!-- Add the this google map apis to webpage -->
        <script src="https://maps.googleapis.com/maps/api/js?v=3.exp&sensor=false&key=AIzaSyBR_wcut5HasyNsPE3b5e64ws063folslo&libraries=places"></script>

        <script>
          var map9 = "load";
          google.maps.event.addDomListener(window, map9, initialize);
          function initialize() {
            var input = document.getElementById("first_address");
            var autocomplete = new google.maps.places.Autocomplete(input);
            autocomplete.addListener("place_changed", function () {
              var place = autocomplete.getPlace();
              // place variable will have all the information you are looking for.

              document.getElementById("latitude").value =
                place.geometry["location"].lat();
              document.getElementById("longitude").value =
                place.geometry["location"].lng();
            });
          }
        </script>
      </body>
    </html>
  </body>
</html>
