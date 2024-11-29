<?php include("connection.php"); ?>

<!DOCTYPE html>
<html lang="en">

<head>
    
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>form</title>
    <link rel="stylesheet" href="testingstyle.css">
    
</head>

<body>
    <div class="fifth_container">
        <div id="box1">
            <p id="box_sec1">Je huishouden</p>
            <div id="box_sec2">
                <div id="box_sec_content1">
                    <p id="text1"><i class="fa-solid fa-copy" style=" margin-right:5px; color: #ffffff;"></i>Design</p>
                    <p id="text2"><i class="fa-solid fa-square" style="  margin-right:5px; color: #f9fafb;"></i>11
                        zonnepanelen</p>
                    <p id="text3"><i class="fa-solid fa-house" style=" margin-right:5px; color: #f4f5f6;"></i>Steil dak
                    </p>
                </div>
                <div id="box_sec_content2">
                    <p id="text4"><i class="fa-solid fa-car-battery"
                            style="  margin-right:5px; color: #f9fafa;"></i>Batterie: Niet gekozen</p>
                    <p id="text5"><i class="fa-solid fa-bolt" style="  margin-right:5px; color: #f7f7f8;"></i>Laadpaal:
                        Niet gekozen</p>
                </div>

            </div>
            <p id="box_sec3">Factuur</p>
            <div id="heading1"></div>
            <div id="box_sec4">
                <div id="box_sec_content3">
                    <p id="text1">Zonnepanelen</p>
                    <p id="text2">Frais mensuels</p>
                </div>
                <div id="box_sec_content4">
                    <p id="text4">7903 €</p>
                    <p id="text5">0 €</p>
                </div>

            </div>
            <div id="heading2"></div>

            <div id="box_sec5">
                <div id="box_sec_content5">Investering total</div>
                <div id="box_sec_content6">7903 €</div>
            </div>
            <div id="box_sec6">
                <div id="box_sec_content7">Jaarlijkse besparing</div>
                <div id="box_sec_content8">
                    1249 €</div>
            </div>

            <div id="heading3"></div>

            <div id="box_sec7">
                <div id="box_sec_content9">Terugverdientijd</div>
                <div id="box_sec_content10">
                    5 years</div>
            </div>
        </div>

        <div class="box2">
            <p class="class">Vul uw gegevens in</p>
            <p id="vul">
                Wil je een nauwkeuriger beeld? Laat dan hier je gegevens achter zodat één van onze Svea-experts contact
                kan opnemen. Zo kunnen jullie samen de volgende stappen doornemen.
            </p>
            <div id="input_main">
                <div id="input_first">
                    <form Method="post">
                        <input type="text" placeholder="Vooname" value="" id="btn_roof1" class="roof"
                            name="firstname" />
                        <hr class="heading">
                        <input type="email" placeholder="E-mailadres" value="
" id="btn_roof2" class="roof" name="email" />
                        <hr class="heading">

                        <input type="text" placeholder="Straat
" value="Rdpt Robert Schuman" id="btn_roof3" class="roof" name="address" />
                        <hr class="heading">

                        <input type="text" placeholder="Stad

" value="Bruxelles" id="btn_roof4" class="roof" name="city" />
                        <hr class="heading">

                </div>
                <div id="input_second">
                    <input type="text" placeholder="Achternaam


" value="" id="btn_roof5" class="roof" name="lastname" />
                    <hr class="heading">

                    <input type="text" placeholder="Telefoonnummer




" value="" id="btn_roof6" class="roof" name="telephone" />
                    <hr class="heading">

                    <input type="text" placeholder="Postcode




" value="
" id="btn_roof7" class="roof" name="pincode" />
                    <input type="hidden" value="<?php echo $_GET['cst_val_test1'];?>" name="cost">
                    <input type="hidden" value="<?php echo $_GET['totalcost_val_test2'];?>" name="totalcost">
                    <input type="hidden" value="<?php echo $_GET['select_land_squarearea'];?>" name="area">


                    <!-- <input type="submit" value="Submit" required> -->
                    <hr class="heading">
                    

                </div>
            </div>
            <div class="checkbox_container">
                <div class="checkbox_content1">
                    <input id="checkbox" type="checkbox" required>
                    <p class="checkbox_para">Ik aanvaard dat Svea Solar mijn persoonsgegevens bewaart en het
                        privacybeleid.</p>
                </div>
                <div class="checkbox_content2">
                    <input id="checkbox" type="checkbox" required>
                    <p class="checkbox_para">Blijf op de hoogte van het laatste nieuws over zonnepanelen van Svea Solar.
                    </p>
                </div>
            </div>
            <div class="container_btxccxcn">
                    <!--<form action="testing4.php" method="get">-->
                    <div id="btn">
                        <!--<input type="Submit" value="Back" id="btn_submit" name="save"/>-->
                        <a href="http://localhost/solar//testing4.php?cst_val=1040+%E2%82%AC&totalcost_val=52000+%E2%82%AC&totalselect_degree=Schuin+dak&save=Next"
                            id="btn_submit">Back</a>
                    </div>
                    <div id="vvbvvbtn"><input type="Submit" value="Submit" id="btn1_submit" /></div>


                    </form>
                    <!--</form>-->
            </div>
        </div>
    </div>
    </div>
    </div>
    <?php

if($_POST){  
    $name = $_POST["firstname"]; 
    $email = $_POST["email"]; 
    $address = $_POST["address"]; 
    $city = $_POST["city"]; 
    $lastname = $_POST["lastname"]; 
    $telephone = $_POST["telephone"]; 
    $pincode = $_POST["pincode"];
    $cost = $_POST["cost"];
    $totalcost = $_POST["totalcost"];
    $area = $_POST["area"];

$sql = "INSERT INTO `solarpanel` ( `firstname`, `email`,`address`,`city`,`lastname`,`telephone`,`pincode`) VALUES ('$name', '$email','$address','$city','$lastname', '$telephone',' $pincode')";

$result = mysqli_query($conn,$sql);

 if($result){
  echo "fsddsdsdsddsdsddddsddd";
 }else{
  echo "not successfully".mysqli_error($conn);
 }
 
$massege = "
<div>
<table style='border: 1px solid black;
  border-collapse: collapse;
text-align: center;
background-color:#D8DDDE;
  '>
  
  <tr>
  
    <th style='border: 1px solid black;
  text-align: center;
  font-size:18px;
  padding: 8px;
  background-color:#7BC5CD;'>S.no.</th>
  
    <th style='border: 1px solid black;
  text-align: center;
  font-size:18px;
  background-color:#7BC5CD;
  padding: 8px;' colspan='2'>Solar Installation Details</th>
  
  </tr>

  <tr>
  
    <td style='border: 1px solid black;
  text-align: center;
  padding: 8px;
  font-size:13px;
  background-color:#5E6262;
  color:white;'>1</td>
  
    <td style='border: 1px solid black;
  text-align: left;
  padding: 8px;
  font-size:13px;'>Firstname</td>
  
    <td style='border: 1px solid black;
  text-align: left;
  padding: 8px;
  font-size:13px;'>$name</td>
    
  </tr>

  <tr style='border: 1px solid black;
  text-align: left;
  '>
  
    <td style='border: 1px solid black;
  text-align: center;
  padding: 8px;
  font-size:13px;
  background-color:#5E6262;
  color:white;'>2</td>
  
    <td style='border: 1px solid black;
  text-align: left;
  padding: 8px;
  font-size:13px;'>Lastname</td>
  
    <td style='border: 1px solid black;
  text-align: left;
  padding: 8px;
  font-size:13px;'>$lastname</td>
  
  </tr>
    
  <tr>
  
    <td style='border: 1px solid black;
  text-align: center;
  padding: 8px;
 font-size:13px;
 background-color:#5E6262;
  color:white;'>3</td>
  
    <td style='border: 1px solid black;
  text-align: left;
  padding: 8px;
  font-size:13px;'>Address</td>
  
    <td style='border: 1px solid black;
  text-align: left;
  padding: 8px;
  font-size:13px;'>$address</td>
  
  </tr>
  <tr style='border: 1px solid black;
  text-align: left;
  '>
  
    <td style='border: 1px solid black;
  text-align: center;
  padding: 8px;
  font-size:13px;
  background-color:#5E6262;
  color:white;'>4</td>
  
    <td style='border: 1px solid black;
  text-align: left;
  padding: 8px;
  font-size:13px;'>City</td>
  
    <td style='border: 1px solid black;
  text-align: left;
  padding: 8px;
  font-size:13px;'>$city</td>
   
  </tr>
  <tr>
  
    <td style='border: 1px solid black;
  text-align: center;
  padding: 8px;
  font-size:13px;
  background-color:#5E6262;
  color:white;'>5</td>
  
    <td style='border: 1px solid black;
  text-align: left;
  padding: 8px;
  font-size:13px;'>Email</td>
  
    <td style='border: 1px solid black;
  text-align: left;
  padding: 8px;
  font-size:13px;'>$email</td>
    
  </tr>
  <tr>
  
    <td style='border: 1px solid black;
  text-align: center;
  padding: 8px;
  font-size:13px;
  background-color:#5E6262;
  color:white;'>6</td>
  
    <td style='border: 1px solid black;
  text-align: left;
  padding: 8px;
  font-size:13px;'>Telephone</td>
  
    <td style='border: 1px solid black;
  text-align: left;
  padding: 8px;
  font-size:13px;'>$telephone</td>
   
  </tr>
  <tr>
  
    <td style='border: 1px solid black;
  text-align: center;
  padding: 8px;
  font-size:13px;
  background-color:#5E6262;
  color:white;'>7</td>
  
    <td style='border: 1px solid black;
  text-align: left;
  padding: 8px;
  font-size:13px;'>Pincode</td>
  
    <td style='border: 1px solid black;
  text-align: left;
  padding: 8px;
  font-size:13px;'>$pincode</td>
    
  </tr>
  <tr>
  
    <td style='border: 1px solid black;
  text-align: center;
  padding: 8px;
  font-size:13px;
  background-color:#5E6262;
  color:white;'>8</td>
  
    <td style='border: 1px solid black;
  text-align: left;
  padding: 8px;
  font-size:13px;'>Selected Sq.Area</td>
  
    <td style='border: 1px solid black;
  text-align: left;
  padding: 8px;
  font-size:13px;'>$area</td>
    
  </tr>
  <tr>
  
    <td style='border: 1px solid black;
  text-align: center;
  padding: 8px;
  font-size:13px;
  background-color:#5E6262;
  color:white;'>9</td>
  
    <td style='border: 1px solid black;
  text-align: left;
  padding: 8px;
font-size:13px;'>Yearly costs savings</td>
  
    <td style='border: 1px solid black;
  text-align: left;
  padding: 8px;
  font-size:13px;'>$cost</td>
    
  </tr>
  <tr>
  
    <td style='border: 1px solid black;
  text-align: center;
  padding: 8px;
  font-size:13px;
  background-color:#5E6262;
  color:white;'>10</td>
  
    <td style='border: 1px solid black;
  text-align: left;
  padding: 8px;
  font-size:13px;'>Totalcost</td>
  
    <td style='border: 1px solid black;
  text-align: left;
  padding: 8px;
  font-size:13px;'>$totalcost</td>
    
  </tr>
</table></div>" ;
 

 
     $mail = new PHPMailer\PHPMailer\PHPMailer();
    $mail->IsSMTP(); // enable SMTP

    $mail->SMTPDebug = 0; // debugging: 1 = errors and messages, 2 = messages only
    $mail->SMTPAuth = true; // authentication enabled
    $mail->SMTPSecure = 'ssl'; // secure transfer enabled REQUIRED for Gmail
    $mail->Host = "smtp.gmail.com";
    $mail->Port = 465; // or 587
    $mail->IsHTML(true);
    $mail->Username = "kumarboby7298@gmail.com";
    $mail->Password = "cxlctgykxuocvjeq";
    $mail->SetFrom("bobynewberry0702@gmail.com");
    $mail->Subject = "Solar Charge Calculator";
    $mail->Body = ($massege);
    $mail->AddAddress($email);
    $mail->AddAddress("kumarboby7298@gmail.com");
    
     if(!$mail->Send()) {
        echo "Mailer Error: " . $mail->ErrorInfo;
     } else {
        echo "Form details has been sent";
     }

}

?>

</body>

</html>