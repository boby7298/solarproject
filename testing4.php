<?php 
include("connection.php");

$variable = isset($_GET['cst_val']) ? (int)$_GET['cst_val'] : 0;
$value2 = 1000;
$value1 = 250;
$variable1 = $variable + $value2;
$variable2 = $variable + $value1;

$variable_a = isset($_GET['totalcost_val']) ? (int)$_GET['totalcost_val'] : 0;
$value2a = 35000;
$value1a = 15000;
$variable1a = $variable_a + $value2a;
$variable2a = $variable_a + $value1a;
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
    $(document).ready(function() {
        $("#btn_roof1").click(function() {
            $("#box1").show();
            $("#box2").hide();
            $("#box3").hide();
        });
        $("#btn_roof2").click(function() {
            $("#box2").show();
            $("#box1").hide();
            $("#box3").hide();
        });
        $("#btn_roof3").click(function() {
            $("#box3").show();
            $("#box1").hide();
            $("#box2").hide();
        });

        $("#btn_roof1").click(function() {
            $("#info_main").show();
            $("#cost1").show();
            $("#info_main1").hide();
            $("#info_main2").hide();
        });
        $("#btn_roof2").click(function() {
            $("#info_main1").show();
            $("#info_main").hide();
            $("#info_main2").hide();
        });
        $("#btn_roof3").click(function() {
            $("#info_main2").show();
            $("#info_main").hide();
            $("#info_main1").hide();
        });

        $("#btn_roof1").click(function() {
            $("#cost1").show();
            $("#cost2").hide();
            $("#cost3").hide();
        });
        $("#btn_roof2").click(function() {
            $("#cost2").show();
            $("#cost1").hide();
            $("#cost3").hide();
        });
        $("#btn_roof3").click(function() {
            $("#cost3").show();
            $("#cost1").hide();
            $("#cost2").hide();
        });
        $("#btn_roof1").click(function() {
            $("#cost1a").show();
            $("#cost2a").hide();
            $("#cost3a").hide();
        });
        $("#btn_roof2").click(function() {
            $("#cost2a").show();
            $("#cost1a").hide();
            $("#cost3a").hide();
        });
        $("#btn_roof3").click(function() {
            $("#cost3a").show();
            $("#cost1a").hide();
            $("#cost2a").hide();
        });

    });
    $(document).on('click', 'input', function() {
        $(this).addClass('active').siblings().removeClass('active');
    });
    </script>
    
    <div class="fourth_container">
        <div class="box1">
            <div id="box1" class="boxing">
                <img src="image/roof1.png" alt="" />
            </div>
            <div id="box2" class="boxing">
                <img src="image/roof2.png" alt="" />
            </div>
            <div id="box3" class="boxing">
                <img src="image/roof3.png" alt="" />
            </div>
        </div>
        <div class="box2">
            <div class="costing">
                <div class="costA">
                    <div id="cost1">
                        <h3><?php echo($variable);?>
                    </div>
                    <div id="cost2">
                        <h3><?php echo($variable2);?> €
                    </div>
                    <div id="cost3">
                        <h3><?php echo($variable1);?> €
                    </div>
                    </h3>
                    <p>Yearly costs savings</p>
                </div>
                <div class="costB">
                    <div id="cost1a">
                        <h3><?php echo($variable_a);?>
                    </div>
                    <div id="cost2a">
                        <h3><?php echo($variable2a);?> €
                    </div>
                    <div id="cost3a">
                        <h3><?php echo($variable1a);?> €
                    </div>
                    <p>Total cost</p>
                </div>
            </div>
            <p class="class1">Welk type zonnepaneel wil je installeren?</p>
            <p id="vul" class="class">
                Kies welke van onderstaande opties jouw voorkeur wegdraagt. Op basis daarvan passen we de prijs (en
                geschatte besparing) aan in het vak hierboven. In een volgende stap krijg je een compleet overzicht.
            </p>
            <div class="btnmain">
                <input type="button" value="Essential" id="btn_roof1" class="active" name="save" />
                <input type="Submit" value="Design" id="btn_roof2" class="" name="save" />
                <input type="Submit" value="Pro" id="btn_roof3" class="" name="save" />
            </div>
            <div id="info_main" class="info_main">
                <div class="esse">
                    <p class="essee">Essential</p>
                    <p class="">410W</p>
                </div>
                <div class="esse2">
                    <p class="">Krijg waar voor je geld</p>
                    <p class="">214W/m²</p>
                </div>
                <p id="dan" class="">
                    Ons standaardmodel is energie- én kostenefficiënt. Het is geschikt voor alle soorten huizen: van
                    rijwoningen tot bedrijfspanden en boerderijen.
                </p>
                <div class="esse3">
                    <input id="checkbox" type="checkbox" required>
                    <p>Is je huis ouder dan 10 jaar?</p>

                </div>
            </div>
            <div id="info_main1" class="info_main">
                <div class="esse">
                    <p class="">Design</p>
                    <p class="">405W</p>
                </div>
                <div class="esse2">
                    <p class="">Stijl voor een mooie prijs</p>
                    <p class="">211W/m²</p>
                </div>
                <p id="dan" class="">
                    Met Design hoef je geen compromissen te sluiten op vlak van uitzicht of kwaliteit. Dit pakket bied
                    je een hoge efficiëntie en een elegante en exclusieve look, dankzij de donkere kleur.
                </p>
                <div class="esse3">
                    <input id="checkbox" type="checkbox" required>
                    <p>Is je huis ouder dan 10 jaar?</p>
                </div>
            </div>
            <div id="info_main2" class="info_main">
                <div class="esse">
                    <p class="">Pro</p>
                    <p class="">415W</p>
                </div>
                <div class="esse2">
                    <p class="">Pro met een reden</p>
                    <p class="">234W/m²</p>
                </div>
                <p id="dan" class="">
                    Pro is een stijlvol en betrouwbaar paneel met een hoog rendement. Het paneel is geproduceerd met
                    innovatieve technologie en duurzaamheid in het achterhoofd. Met Pro krijg je een productgarantie dat
                    hoge prestaties voor een lange tijd garandeert.


                </p>
                <div class="esse3">
                    <input id="checkbox" type="checkbox" required>
                    <p>Is je huis ouder dan 10 jaar?</p>
                </div>
            </div>
            <form action="testing5.php" method="get">
                <input type="hidden" value="<?php echo isset($_GET['cst_val']) ? $_GET['cst_val'] : ''; ?>"
                    name="cst_val_test1">
                <input type="hidden" value="<?php echo isset($_GET['totalcost_val']) ? $_GET['totalcost_val'] : ''; ?>"
                    name="totalcost_val_test2">
                <input type="hidden"
                    value="<?php echo isset($_GET['select_land_area']) ? $_GET['select_land_area'] : ''; ?>"
                    name="select_land_squarearea">
                <div id="btn">
                    <input type="Submit" value="Next" id="btn_submit" name="save" />
                </div>
            </form>

            <div>
                <!--<form action="testing3.php" method="get">-->
                <div id="btn">
                    <!--<input type="Submit" value="Back" id="btn1_submit" name="save" />-->
                    <a href="https://pis.healthylifefitnessclub.com/testing3.php" id="btn1_submit">Back</a>
                </div>
                <!--</form>-->
            </div>
        </div>
    </div>
    </div>
    </div>
</body>

</html>