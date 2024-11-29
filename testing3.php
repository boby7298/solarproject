<?php
include("connection.php");

$_SESSION['cstvaluee']=$_REQUEST['cstvaluee'];

?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Roof Angle</title>
    <link rel="stylesheet" href="testingstyle.css">
</head>

<body>
    <script>
        $(document).ready(function () {

            $(document).on('click', '.roof_change', function () {

                $('.roof_change').removeClass("active");
                $(this).addClass('active');
                $(".boxing").hide();

                var id = $(this).attr('id');
                var name = $(this).data('name');
                $("#box" + id).show();
            });


        });

    </script>

    <div class="third_container">
        <div id="box1" class="boxing">
            <img src="image/roof3.png" alt="" />
        </div>
        <div id="box2" class="boxing">
            <img src="image/roof2.png" alt="" />
        </div>
        <div id="box3" class="boxing">
            <img src="image/roof1.png" alt="" />
        </div>

        <div class="box2">
            <p class="class1">Hoe schat je de hellingshoek van jouw dak in?</p>
            <p id="vul" class="class">
                Als we de hellingsgraad weten, kunnen we beter inschatten hoe de zon op je dak schijnt.
            </p>
            <input type="button" value="Plat dek               0-15°" data-name="Plat dek" id="1"
                class="roof_change active" name="save" selected />
            <input type="Submit" value="Schuin dak        15-30°" data-name="Schuin dak" id="2" class="roof_change"
                name="save" />
            <input type="Submit" value="Steil dak               30° >" data-name="Steil dak" id="3" class="roof_change"
                name="save" />

            <form action="testing4.php" method="get">
                <input type="hidden" id="thhidd" value="<?php echo $_GET['cstvaluee'];?>" name="cst_val">
                <input type="hidden" id="fourthh" value="<?php echo $_GET['totalcost'];?>" name="totalcost_val">
                <input type="hidden" id="fourthh" value="<?php echo $_GET['select_area'];?>" name="select_land_area">
                <div id="btn">
                    <!-- <input type="text" id="cstvaluee" name="cstvaluee"> -->
                    <input type="Submit" value="Next" id="btn_submit" name="save" />
                </div>
            </form>
            <div>
                <!--<form action="testing2.php" method="get">-->
                <div id="btn">
                    <!--<input type="Submit" value="Back" id="btn1_submit" name="save" />-->
                    <a href="https://pis.healthylifefitnessclub.com/testing2.php" id="btn1_submit">Back</a>
                </div>
                <!--</form>-->
            </div>
        </div>
    </div>
    </div>
    </div>
</body>

</html>