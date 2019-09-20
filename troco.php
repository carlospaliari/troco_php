<?php

function Troco($num1, $num2 ){
	$resultado = (($num1 / $num2) - floor($num1 / $num2)) * $num2;
	return (float)number_format($resultado, 3, '.', '');
}
function calc_troco($pago, $conta){ 
  
  $nota = array('100', '50', '10', '5', '1');
    $moeda = array('50', '10', '05','01');
	$troco = $pago - $conta;
	$valor = $troco;
	for($i = 0; $i <= 4; $i++){
		$moeda = floor($valor / $nota[$i]); 
		if ($moeda) {
			$resultado = $moeda. " nota(s) de R$". $nota[$i]." Reais<br>";
			$valor = modulo($valor, $nota[$i]); // sobra
			echo $resultado;
		}
	}
	$valor = $valor * 100;
	foreach($moeda as $moeda){
		$moeda = floor($valor / $moeda);
		if($moeda){
			$resultado = "$moeda";
			$valor = modulo($valor, $moeda);
			echo $resultado;
		}
	}
}  
