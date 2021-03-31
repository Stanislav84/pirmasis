<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

 <h4> 1 uzduotis. </h4>
    <?php

   $name1 = "Monika";
   $surname1 = "Beluci";
   $ns = $name1 . " " . $surname1;
   
   echo "$ns";

   ?>

 <h4> 2 uzduotis. </h4>
   <?php
$name2 = "Monika";
$surname2 = "Beluci";

echo strtoupper($name2);
echo "<br>";

echo strtolower($surname2);
echo "<br>";
    
?>

<h4> 3 uzduotis. </h4>

<?php

$name3 = "Monika";
$surname3 = "Beluci";
$a = substr($name3,0,1 );
$b = substr($surname3,0,1);
$g = $a . $b;
 
echo $g; 

?>

<h4> 4 uzduotis. </h4>

<?php

$name4 = "Monika";
$surname4 = "Beluci";

$c = substr($name4,3);
$d = substr($surname4,3);
$v = $c . $d;

echo $v;
echo "<br>";
?>

<h4> 5 uzduotis. </h4>

<?php

$sakinys = "An American in Paris";
echo $sakinys;
echo "<br>";

$keiciamasis1 = $sakinys;
$keiciamasis1 = str_replace("a","*",$keiciamasis1);
$keiciamasis1 = str_replace("A","*",$keiciamasis1);
 echo $keiciamasis1;
  echo "<br>";
 
?>
<h4> 6 uzduotis. </h4>

<?php

$kintamasis = "An American in Paris";
echo  $kintamasis;
echo "<br>";
$raidziuKiekis = substr_count($kintamasis, "a");
$raidziuKiekis1 = substr_count($kintamasis, "A");
$suma = $raidziuKiekis + $raidziuKiekis1;

echo $suma;
echo "<br>";

?>

<h4> 7 uzduotis. </h4>

<?php

$sentence = "An American in Paris";
echo $sentence;
echo "<br>";

$withoutVowels = $sentence;
$withoutVowels =str_replace("a","",$withoutVowels);
$withoutVowels =str_replace("A","",$withoutVowels);
$withoutVowels =str_replace("e","",$withoutVowels);
$withoutVowels =str_replace("E","",$withoutVowels);
$withoutVowels =str_replace("i","",$withoutVowels);
$withoutVowels =str_replace("I","",$withoutVowels);
$withoutVowels =str_replace("y","",$withoutVowels);
$withoutVowels =str_replace("Y","",$withoutVowels);
$withoutVowels =str_replace("o","",$withoutVowels);
$withoutVowels =str_replace("O","",$withoutVowels);
$withoutVowels =str_replace("u","",$withoutVowels);
$withoutVowels =str_replace("U","",$withoutVowels);
echo $withoutVowels;
echo "<br>";

$sentence1 = "Breakfast at Tiffany's";
echo $sentence1;
echo "<br>";

$withoutVowels1 = $sentence1;
$withoutVowels1 =str_replace("a","",$withoutVowels1);
$withoutVowels1 =str_replace("A","",$withoutVowels1);
$withoutVowels1 =str_replace("e","",$withoutVowels1);
$withoutVowels1 =str_replace("E","",$withoutVowels1);
$withoutVowels1 =str_replace("i","",$withoutVowels1);
$withoutVowels1 =str_replace("I","",$withoutVowels1);
$withoutVowels1 =str_replace("y","",$withoutVowels1);
$withoutVowels1 =str_replace("Y","",$withoutVowels1);
$withoutVowels1 =str_replace("o","",$withoutVowels1);
$withoutVowels1 =str_replace("O","",$withoutVowels1);
$withoutVowels1 =str_replace("u","",$withoutVowels1);
$withoutVowels1 =str_replace("U","",$withoutVowels1);
echo $withoutVowels1;
echo "<br>";


$sentence2 = "2001: A Space Odyssey";
echo $sentence2;
echo "<br>";

$withoutVowels2 = $sentence2;
$withoutVowels2 =str_replace("a","",$withoutVowels2);
$withoutVowels2 =str_replace("A","",$withoutVowels2);
$withoutVowels2 =str_replace("e","",$withoutVowels2);
$withoutVowels2 =str_replace("E","",$withoutVowels2);
$withoutVowels2 =str_replace("i","",$withoutVowels2);
$withoutVowels2 =str_replace("I","",$withoutVowels2);
$withoutVowels2 =str_replace("y","",$withoutVowels2);
$withoutVowels2 =str_replace("Y","",$withoutVowels2);
$withoutVowels2 =str_replace("o","",$withoutVowels2);
$withoutVowels2 =str_replace("O","",$withoutVowels2);
$withoutVowels2 =str_replace("u","",$withoutVowels2);
$withoutVowels2 =str_replace("U","",$withoutVowels2);
echo $withoutVowels2;
echo "<br>";

$sentence3 = "It's a Wonderful Life";
echo $sentence3;
echo "<br>";


$withoutVowels3 = $sentence3;
$withoutVowels3 =str_replace("a","",$withoutVowels3);
$withoutVowels3 =str_replace("A","",$withoutVowels3);
$withoutVowels3 =str_replace("e","",$withoutVowels3);
$withoutVowels3 =str_replace("E","",$withoutVowels3);
$withoutVowels3 =str_replace("i","",$withoutVowels3);
$withoutVowels3 =str_replace("I","",$withoutVowels3);
$withoutVowels3 =str_replace("y","",$withoutVowels3);
$withoutVowels3 =str_replace("Y","",$withoutVowels3);
$withoutVowels3 =str_replace("o","",$withoutVowels3);
$withoutVowels3 =str_replace("O","",$withoutVowels3);
$withoutVowels3 =str_replace("u","",$withoutVowels3);
$withoutVowels3 =str_replace("U","",$withoutVowels3);
echo $withoutVowels3;
echo "<br>";

?>

<h4> 8 uzduotis. </h4>

<?php

$text = 'Star Wars: Episode '.str_repeat(' ', rand(0,5)). rand(1,9) . ' - A New Hope';
$episode = " ";
echo $text;
echo "<br>";
$episode = explode(" ", $text);
echo $episode[count($episode)-5];
echo "<br>";

?>

<h4> 9 uzduotis. </h4>

<?php

/*$sentence4 = "Don't Be a Menace to South Central While Drinking Your Juice in the Hood";
echo $sentence4;
echo "<br>";
$explSentence = explode(" ", $sentence4);
$i = 0;
While (array_key_exists($i, $explSentence)) { 
   if(strlen($explSentence[$i]) <= 5) {
     $++;
   }
  }
echo $explSentence;
echo "<br>";*/

$x = 0;
$string = "Elephant shoe penguin food telephone";
$explString = explode(" ", $string);
foreach($explString as $word){
   if(strlen($word > 6)){
       $x++;
   }
}

echo $x;


?>



</body>
</html>