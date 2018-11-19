<!DOCTYPE html>
<html lang="en">
 <head>
	<meta charset="UTF-8">
 </head>
 <body>
  <?php 
  echo "///////"; 
  $arr=array(41, 22, 46, 7, 0, -2, -3, 41, 0, 0, -17, -1); 
  $ttt=$arr[i]; 
  for($g=0;$g<=10;$g++){ 
  for($i=$g+1;$i<=10;$i++){ 
  $ttt=$arr[$i]; 
  if($ttt==$arr[$g]){ 
  echo $ttt; 
  } 
  } 
  }; 
  ?>

  <?php 
  $arr=array(41, 22, 46, 7, 0, -2, -3, 41, 0, 0, -17, -1); 
  $sum=0; 
  for($g=0;$g<=9;$g++){ 
  if($arr[$g]>0){ 
  $sum=$sum+$arr[$g]; 
  } 
  } 
  echo $sum; 
  ?>
 </body>
</html>