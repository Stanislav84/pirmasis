<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

  <h4> 1 uzduotis.</h4>

   <?php
   
    $vardas = "Stanislav";
    $pavarde = "Sterinovic";
    $gimimoData = "1984";
    $dabartineData = "2021";
    $metai = $dabartineData - $gimimoData;
    
    ?>

    <p> As esu <?= $vardas ." ". $pavarde ?> . Man yra <?= $metai ?> metai. </p> 
 
     
    <h4> 2 uzduotis.</h4>

  <?php

     $skaicius1 = rand(0,4);
     $skaicius2 = rand(0,4);
     
     echo $skaicius1 .",". $skaicius2;

     echo "<br>";
  if($skaicius1 !=0 && $skaicius2 !=0){
     if($skaicius1 >= $skaicius2){
        echo(round($skaicius1 / $skaicius2, 2));
     }else{
        echo(round($skaicius2 / $skaicius1, 2));
     } 
    
    }else{
      echo "Dalyba is nulio negalima";
    }

      echo "<br>";
  ?> 
<h4> 3 uzduotis.</h4>

  <?php
    
    $skaicius3 = rand(0,25);
    $skaicius4 = rand(0,25);
    $skaicius5 = rand(0,25);
    $vidurinisSkaicius = "";
    echo $skaicius3 .",". $skaicius4 .",". $skaicius5;
    
    echo "<br>";

    if($skaicius3 > $skaicius4 && $skaicius3 < $skaicius5 ||
        $skaicius3 < $skaicius4 && $skaicius3 > $skaicius5){
          $vidurinisSkaicius = $skaicius3;
        } elseif ($skaicius4 > $skaicius3 && $skaicius4 < $skaicius5 ||
                 $skaicius4 < $skaicius3 && $skaicius4 > $skaicius5){ 
                 $vidurinisSkaicius = $skaicius4;
        } else { 
          $vidurinisSkaicius = $skaicius5;
        }
        echo $vidurinisSkaicius;
    
 ?>

<h4> 4 uzduotis.</h4>

    <?php

    $krastineA = rand (1,10);
    $krastineB = rand (1,10);
    $krastineC = rand (1,10);
   echo $krastineA .",". $krastineB .",". $krastineC;
     echo "<br>";

     if($krastineA > $krastineB - $krastineC &&
        $krastineB > $krastineA - $krastineC &&
        $krastineC > $krastineA - $krastineB) { 
          echo "<h3> Trikampis gali buti sudarytas</h3>";
         } else { 
           echo "<h3> Trikampis negali buti sudarytas</h3>";
         }
         echo "<br>";

    ?>

<h4> 5 uzduotis.</h4>
  
  <?php
   


  ?>

<h4> 6 uzduotis.</h4>

<?php

$skaicius10 = rand(0,6);

 echo "<h". $skaicius10 . ">". $skaicius10 ."</h". $skaicius10 .">";
 echo "<br>";
?>

<h4> 7 uzduotis.</h4>

<?php
  
  $colorGreen = "green";
  $colorRed = "red";
  $colorBlue = "blue";
 
 $skaicius11 = rand(-10,10);
 $skaicius12 = rand(-10,10);
 $skaicius13 = rand(-10,10);
    echo $skaicius11 .",". $skaicius12 .",". $skaicius13;
     echo "<br>";

    $pirmoSkaiciausSpalva = $skaicius11 < 0 ? "green" : ($skaicius11 === 0 ? "red" : "blue");
    $antroSkaiciausSpalva = $skaicius12 < 0 ? "green" : ($skaicius12 === 0 ? "red" : "blue");
    $trecioSkaiciausSpalva = $skaicius13 < 0 ? "green" : ($skaicius13 === 0 ? "red" : "blue");

     echo "<h3 style='color: $pirmoSkaiciausSpalva'>atsitiktinis skaicius: $skaicius11:</h3>";
     echo "<h3 style='color: $antroSkaiciausSpalva'>atsitiktinis skaicius: $skaicius12:</h3>";
     echo "<h3 style='color: $trecioSkaiciausSpalva'>atsitiktinis skaicius: $skaicius13:</h3>";
 
  echo "<br>";
?>

<h4> 8 uzduotis.</h4>

<?php

$zvakiuKiekis = rand(5,3000);
  echo $zvakiuKiekis;

  $galutineKaina = $zvakiuKiekis < 1000 ? $zvakiuKiekis * 1 : ($zvakiuKiekis > 1000 && $zvakiuKiekis <2000 ? $zvakiuKiekis * 1 * 0.97 :
       $zvakiuKiekis * 1 * 0.94);

     echo "<h3> Zvakiu kiekis : $zvakiuKiekis, Kaina: $galutineKaina EUR</h3>";
       echo "<br>";

?>

<h4> 9 uzduotis.</h4>
<?php





?>


<h4> 10 uzduotis.</h4>
 <?php

  $val = rand(0,24);
  $min = rand(0,60);
  $sec = rand(0,60);
  $pridetasLaikas = rand(0,300);

  $konvertuotasLaikas = $val * 3600 + $min * 60 + $sec;
  $naujasLaikas = $konvertuotasLaikas + $pridetasLaikas;

  $naujosVal = floor($naujasLaikas / 3600);
  $naujosMin = floor(($naujasLaikas - $naujosVal * 3600) / 60);
  $naujosSec = $naujasLaikas - $naujosVal * 3600 - $naujosMin * 60;

    echo "<h3> Einamas laikas (val:min:sec) - $val : $min : $sec </h3>";
    echo "<h3> Pridetos sekundes - $naujasLaikas </h3>";
    echo "<h3> Laikas su pridetom sekundem (val:min:sec) - $naujosVal : $naujosMin : $naujosSec </h3>";
      echo "<br>";



 ?>
<h4> WEB mecanika.</h4>

<?php
sessionn_start();
include 'HTMLfragments/header.php';
if(!isset($_SESSION['paspaudimu kiekis'])){
  $_SESSION['paspaudimu kiekis'] = 0;
}

if($_SESSION['REQUEST_METHOD'] =='POST'){
  $_SESSION['paspaudimu kiekis']++ ;
  
}
$lname = "";
$fname = "";

if(isset($_GET['fname'])){
  if($_GET['lname']!="" && $_GET['fname']!=""){
    echo "labas ponas ".$_GET['fname']." ".$_GET['lname'];
  }else{
    $lname = $_GET['lname'];
    $fname = $_GET['fname'];
    echo "uzpildyk forma";
  }
}


?>

<h1>forma submitinta <?= $_SESSION['paspaudimu kiekis']?> kartu</h1>

<form action="" method="POST">
  <label for="fname">First name:</label><br>
  <input type="text" id="fname" name="fname" value=""><br>
  <label for="lname">Last name:</label><br>
  <input type="text" id="lname" name="lname" value=""><br><br>
  <input type="submit" value="Submit">
</form> 

<form action="" method="GET">
  <label for="fname">First name:</label><br>
  <input type="text" id="fname" name="fname"  value="<?=$fname?>"><br>
  <label for="lname">Last name:</label><br>
  <input type="text" id="lname" name="lname"  value="<?=$lname?>"><br><br>
  <input type="submit" value="Submit">
</form> 


<?php



br();



?>




<?php
 include 'HTMLfragments/footer.php';
?>


?>




</body>
</html>