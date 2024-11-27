<?php

function novoPreco($preco, $desconto){
    $novoPreco = $preco - (($preco / 100) * $desconto);
    return $novoPreco;
};

function parcelas($valor, $quantidade){
    $parcela = $valor / $quantidade;
    return $parcela;
}

function emReal($value){
    $emReais = number_format($value, 2, ",", ".",);
    return "R$ {$emReais}";
};
