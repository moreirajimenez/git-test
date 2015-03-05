<?php

/*
 * To change this template, choose Tools | Templates
 * and open the template in the editor.
 */

<?php
  echo 12314;
  echo '<br>';
  echo 'Rodrigo';
  $p1 = 5;
  $m1 = 2;
  $m2 = 7;
  $proj1 = 5;
  $proj2 = 6;
  $proj3 = 9;
  $proj4 = 8;
  $trabF = 5;
  $proc = 5;
  $pf = 8;
  $mi =  (30*$p1 + 10*$m1 + 10*$m2 + 5*$proj1 + 5*$proj2 + 5*$proj3 +5*$proj4 + 10*$trabF + 20*$proc)/100;
  if ($mi>="7,5"){
      $mf = $mi;
      echo 'aprovado';
  }
 else {
     $mf = ($mi+$pf)/2;
}
  if ($mf>=5){
      echo 'aprovado com prova final';
  }
 else {
      echo 'reprovado'; 
}
echo "$mi";
echo "$mf";
?>

?>
