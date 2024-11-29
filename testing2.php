<?php
include("connection.php");
session_start(); // Make sure the session is started

// Sanitize the GET inputs
$address = isset($_GET['address']) ? htmlspecialchars($_GET['address']) : '';
$latitude = isset($_GET['latitude']) ? filter_var($_GET['latitude'], FILTER_VALIDATE_FLOAT) : 0;
$longitude = isset($_GET['longitude']) ? filter_var($_GET['longitude'], FILTER_VALIDATE_FLOAT) : 0;

$_SESSION['address'] = $address;
$_SESSION['latitude'] = $latitude;
$_SESSION['longitude'] = $longitude;
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Solar Panel Placement</title>
  <link rel="stylesheet" href="testingstyle.css">
</head>
  <body>
      
    <script>
     var drawingManager;
      var all_overlays = [];
      function initMap() {
        var map = new google.maps.Map(document.getElementById("map"), {
          center: { lat: <?php echo $_GET['latitude']; ?>, lng: <?php echo $_GET['longitude']; ?> },
          zoom: 20,
          mapTypeId: google.maps.MapTypeId.SATELLITE,
          overviewMapControl: true,
          fullscreenControl: true,
          rotateControl: true,
          scaleControl: true,
          streetViewControl: true,
          mapTypeControl: true,
          noClear: false,
          tilt: 0,
        });
        drawingManager = new google.maps.drawing.DrawingManager({
          drawingMode: google.maps.drawing.OverlayType.POLYGON,
          drawingControl: false,
          drawingControlOptions: {
            position: google.maps.ControlPosition.TOP_CENTER,
            drawingModes: ["polygon"],
          },
          //markerOptions: {icon: 'https://developers.google.com/maps/documentation/javascript/examples/full/images/beachflag.png'},
          polygonOptions: {
            fillColor: "#72a2e7",
            strokeColor: "#1ac255",
            fillOpacity: 0.5,
            strokeWeight: 5,
            clickable: false,
            editable: true,
            zIndex: 1,
          },
        });
        drawingManager.setMap(map);
        function update_area() {
          area = 0;
          for (var i = 0; i < all_overlays.length; i++) {
            area += google.maps.geometry.spherical.computeArea(
              all_overlays[i].overlay.getPath()
              );
            }
            sq_feet = area * 10.76;
            alert(sq_feet);
          }
          google.maps.event.addListener(
          drawingManager,
          "overlaycomplete",
          function (event) {
                
            all_overlays.push(event);
            area=google.maps.geometry.spherical.computeArea(all_overlays[0].overlay.getPath());
            var areasq = Math.floor(area);
            var calculate = areasq * 10;
            var total_cost = areasq * 500;
            document.getElementById("print").innerHTML = areasq +" m² ";
            document.getElementById("print").style.display = "block";
            document.getElementById("undoDrawing").style.display = "block";
            document.getElementById("cstvaluee").value = calculate +" €";
            document.getElementById("totalcost").value = total_cost +" €";
            document.getElementById("select_area").value = areasq +" m² ";

          }
        );
        //Edit Shape
        $("#moveMap").click(function () {
          drawingManager.setDrawingMode(null);
          $("#yard_size").val(sq_feet);
        });
        //Trace Shape
        $("#editPoly").click(function () {
          drawingManager.setDrawingMode(
            google.maps.drawing.OverlayType.POLYGON
          );
        });
        //Delete All Shapes
        $("#undoDrawing").click(function () {
          for (var i = 0; i < all_overlays.length; i++) {
            all_overlays[i].overlay.setMap(null);
          }
          all_overlays = [];
          $("#yard_size").val(null);
          $("#print").hide();
        });
      }
      window.initMap = initMap;
    </script>
      <div class="second_container">
      <div class="second_box2">
        <p class="second_class1">Waar wil je de zonnepanelen plaatsen?</p>
        <p id="second_vul">
          Klik op elke hoek van het dak van je huis, of van het dakoppervlak waar je zonnepanelen wil leggen. Daarop kan je het aantal zonnepanelen zien. Verkeerd geklikt? Geen probleem: je kan altijd opnieuw beginnen.
        </p>
        <form action="testing3.php" method="get">
          <div id="btn">
          <input type="hidden" id="cstvaluee" name="cstvaluee">
          <input type="hidden" id="totalcost" name="totalcost">
          <input type="hidden" id="select_area" name="select_area">
            <input type="Submit" value="Next" id="second_btn_submit" name="save">
          </div>
          <div>
            <div id="btn">
              <a href="https://pis.healthylifefitnessclub.com" id="second_btn1_submit" >Back</a>
            </div>
        </div>
        </form>
        </div>
      </div>
    </div>
  </div>
  <div id="print"><p></p></div>
  <div id="map"></div>
    <div class="controls">
      <div class="span1 four"><a id="editPoly" class="tracing-control active" title="This is the drawing/tracing tool. Work with this tool to create your outlines."><i class="fa fa-lg fa-pencil icon-pencil icon-large"></i><br>Trace</a></div>
      <div class="span1 four"><a id="moveMap" class="tracing-control" title="Click here to move the map. Or click and drag when in Tracing mode."><i class="fa fa-lg fa-arrows icon-move icon-large"></i><br>Edit</a></div>
      <div class="span1 four"> <a id="undoDrawing" class="tracing-control" title="Did your tracing not turn out? Click here to undo your last outline."><i class="fa fa-lg fa-undo icon-undo icon-large"></i><br>Reset</a>
      </div>
    <script
      src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBR_wcut5HasyNsPE3b5e64ws063folslo&callback=initMap&libraries=drawing&v=weekly"
      defer
    ></script>
  </body>
</html>