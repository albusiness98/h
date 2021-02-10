<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <title>CALCULO DE LA HIPOTENUSA DEL TRIANGULO RECTANGULO</title>
</head>
<body>
<?php

  if(isset($_POST["btn"])&& $_POST["btn"] == 'Calcular') {
  
    $cateto1 = $_POST['cateto 1'];
    $cateto2 = $_POST['cateto 2'];    
    $hipotenusa = null;
    
   if(!empty($cateto1) or !empty($cateto2)) {
   
    echo "<h2 align='center'>CALCULO DE LA HIPOTENUSA DEL TRIANGULO RECTANGULO</h2>";
    
      $hipotenusa = sqrt(pow($cateto1, 2) + pow($cateto2, 2));
      
    echo "<br>Cateto 1: ". $cateto1;
    echo "<br>Cateto 2: ". $cateto2;   
    echo "<br/><br/>";
    echo "<br>Hipotenusa: ". $hipotenusa;
    echo "<br/><br/>";
    echo "<a href='datos.html'>Regresar</a>";
   }
  }
 ?>
 </body>
</html>
