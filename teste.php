<?php

$pdo = new PDO('mysql:host=localhost;dbname=testesql', "root", "");
$pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

/*function calcDistancia($lat1, $long1, $lat2, $long2){
    $d2r = 0.017453292519943295769236;

    $dlong = ($long2 - $long1) * $d2r;
    $dlat = ($lat2 - $lat1) * $d2r;

    $temp_sin = sin($dlat/2.0);
    $temp_cos = cos($lat1 * $d2r);
    $temp_sin2 = sin($dlong/2.0);

    $a = ($temp_sin * $temp_sin) + ($temp_cos * $temp_cos) * ($temp_sin2 * $temp_sin2);
    $c = 2.0 * atan2(sqrt($a), sqrt(1.0 - $a));

    return 6368.1 * $c;
}

echo '1: ' . calcDistancia(-23.562635, -46.660147, -23.558987, -46.660212) . "\n";
echo '2: ' . calcDistancia(-23.524487, -47.441711, -23.549078,-46.614304) . "\n";*/


$sql = $pdo->prepare("SELECT Geo(-23.538718, -46.367236,Latitude, Longitude) AS Distancia, Restaurante FROM busca");
$sql->execute();


while($ln = $sql->fetchObject()){
	$distancia = floor($ln->Distancia);
	if($distancia > 5){

	}else{
		echo $distancia;
	}
}