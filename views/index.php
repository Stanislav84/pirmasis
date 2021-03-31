<?php
include 'HTMLfragments/header.php';
?>


<table>
  <tr>
    <th>Vardas</th>
    <th>Pavarde</th> 
    <th>Asmens kodas</th>
    <th>Elektroninis pastas</th>
    <th>banko saskaita</th>
    <th>prideti</th>
    <th>isimti</th>
    <th>edit</th>
    <th>delete</th>
  </tr>

  
<?php
$data = readData();
foreach ($data as $client) {
    ?>

    <tr>
    <td><?=$client['name']?></td>
    <td><?=$client['surname']?></td>
    <td><?=$client['ak']?></td>
    <td><?=$client['email']?></td>
  </tr>
 


 <?php
  }
  ?>


</table>
<?php

include 'HTMLfragments/footer.php';


?>









