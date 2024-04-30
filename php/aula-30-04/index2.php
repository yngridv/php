<?php

$var = array (1,2,3,5);
echo "<p> exemplo 1 </p>";
echo "var é $var[0] <br>" ;
echo "var é $var[1] <br>" ;
echo "var é $var[2] <br>" ;
echo "var é $var[3] <br>" ;
foreach ($var as $teste1) {
    $rgb1 = random_int(0, 255);
    $rgb2 = random_int(0, 255);
    $rgb3 = random_int(0, 255);
    echo "<p style=\"background-color:rgb($rgb1,$rgb2,$rgb3);\"> var é $teste1</p>";
};

$var1 = array ( "fabio" => 30, "eber" => 40, "wq" => 60); 
echo "<p> exemplo 2 </p>";
echo "var é $var1[fabio] <br>" ;
echo "var é $var1[eber] <br>" ;
echo "var é $var1[wq] <br>" ;

$var2 = array (0=> 5, 6=> 8, 9=> 15);
$var2[1]=20;
$var2[2]=3;
echo "<p> exemplo 3 </p>";
echo "var é $var2[0] <br>" ;
echo "var é $var2[1] <br>" ; 
echo "var é $var2[2] <br>" ;
echo "var é $var2[6] <br>" ;
echo "var é $var2[9] <br>" ; 


?>