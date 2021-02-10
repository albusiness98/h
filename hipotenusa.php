<?php

$cateto1 = 3;
$cateto2 = 4;
$hipotenusa = null;

$hipotenusa = sqrt(pow($cateto1, 2) + pow($cateto2, 2));

echo 'Calcular la hipotenusa del triangulo rectangulo', '<br/>';
echo 'Cateto1:'. $cateto1, '<br/>';
echo 'Cateto2:'. $cateto2, '<br/>';
echo 'Hipotenusa'. $hipotenusa, '<br/>';

?>
