<?php

function troco($troco)
{
    $quantidades_de_notas_de_100 = quantidade_de_notas($troco, 100);
    $troco = quantidades_de_notas($troco, $quantidades_de_notas_de_100, 100);

    $quantidades_de_notas_de_50 = quantidade_de_notas($troco, 50);
    $troco = quantidades_de_notas($troco, $quantidades_de_notas_de_50, 50);

    $quantidades_de_notas_de_20 = quantidade_de_notas($troco, 20);
    $troco = quantidades_de_notas($troco, $quantidades_de_notas_de_20, 20);

    $quantidades_de_notas_de_10 = quantidade_de_notas($troco, 10);
    $troco = quantidades_de_notas($troco, $quantidades_de_notas_de_10, 10);

    $quantidades_de_notas_de_5 = quantidade_de_notas($troco, 5);
    $troco = quantidades_de_notas($troco, $quantidades_de_notas_de_5, 5);

    $quantidades_de_notas_de_2 = quantidade_de_notas($troco, 2);
    $troco = quantidades_de_notas($troco, $quantidades_de_notas_de_2, 2);

    $quantidades_de_notas_de_1 = quantidade_de_notas($troco, 1);
    $troco = quantidades_de_notas($troco, $quantidades_de_notas_de_1, 1);

    $quantidade_de_moedas_de_50 = quantidade_de_notas($troco, 0.5);
    $troco = quantidades_de_notas($troco, $quantidade_de_moedas_de_50, 0.5);

    $quantidade_de_moedas_de_25 = quantidade_de_notas($troco, 0.25);
    $troco = quantidades_de_notas($troco, $quantidade_de_moedas_de_25, 0.25);

    $quantidade_de_moedas_de_10 = quantidade_de_notas($troco, 0.1);
    $troco = quantidades_de_notas($troco, $quantidade_de_moedas_de_10, 0.1);

    $quantidade_de_moedas_de_05 = quantidade_de_notas($troco, .05);
    $troco = quantidades_de_notas($troco, $quantidade_de_moedas_de_05, .05);

    $quantidade_de_moedas_de_01 = quantidade_de_notas($troco, .01);


    return [
        '100' => $quantidades_de_notas_de_100,
        '50' => $quantidades_de_notas_de_50,
        '20' => $quantidades_de_notas_de_20,
        '10' => $quantidades_de_notas_de_10,
        '5' => $quantidades_de_notas_de_5,
        '2' => $quantidades_de_notas_de_2,
        '1' => $quantidades_de_notas_de_1,
        '05' => $quantidade_de_moedas_de_50,
        '025' => $quantidade_de_moedas_de_25,
        '01' => $quantidade_de_moedas_de_10,
        '005'=> $quantidade_de_moedas_de_05,
        '001' => $quantidade_de_moedas_de_01,
    ];
}

function quantidade_de_notas($troco, $valor_da_nota)
{
    return floor(round($troco / $valor_da_nota, 2));
}

function quantidades_de_notas($troco, $quantidades_de_notas, $valor_da_nota)
{
    return ($troco - $valor_da_nota * $quantidades_de_notas);
}
