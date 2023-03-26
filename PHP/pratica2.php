<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Array com PHP</title>
</head>
<body>

<?php
$n = array(3,5,8,2);
$n[] = 7; $n[] = 22;
print_r($n);
echo "$n[3]";

$n1 = range(5,20,2);
print_r($n1);

foreach($n1 as $v){
echo " $v ";
}

$n2 = array(1=>"A", 3=>"N", 5=>"P", 6=>"J");
print_r($n2);

$n3 = array(0=>10, 1=>9, 2=>8, 3=>7, 4=>6);
print_r($n3);

unset($n3[2]); // exclui o [2] => 8
print_r($n3);

$n3[] = "mais um"; // acrecenta um vetor
print_r($n3);

$n4 = array("nome"=>"Ana", "idade"=>23, "peso"=>78.5);
print_r($n4);

//             $k voce obtem o indice  $c voce obtem o valor do indice 
foreach($n4 as $k => $c){
    echo "O campo $k possui o conteudo $c \n";
}

// vetores dentro de veteros 

$n5 = array(array(2,3), array(4,5), array(6,7));
print_r($n5);

$n5[0][1] = $n5[2][0];
print_r($n5);


?>



    
</body>
</html>