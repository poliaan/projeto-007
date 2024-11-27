<?php

//content

$produtos = [
    [
        // CATEGORIA LANÇAMENTO PRODUTO 01 
        'nome' => 'Tênis Nike Air Force 1 07 Masculino',
        'modelo' => 'air-force-1',
        'categoria' => 'Casual',
        'preco' => 1099.99,
        'desconto' => 5,
        'cores' => ['azul'],
        'tamanhos' => [35,36,37,39,44]
    ],

    [
        // CATEGORIA LANÇAMENTO PRODUTO 02 - COR 01 e 02
        'nome' => 'Tênis Nike SB Force 58 Unissex',
        'modelo' => 'sb-force-58',
        'categoria' => 'Skateboarding',
        'preco' => 599.99,
        'desconto' => 5,
        'cores' => ['azul','verde'],
        'tamanhos' => [35,37,38,39,41,43]
    ],

    [
        // CATEGORIA OFERTA PRODUTO 01 - COR 01 e 02
        'nome' => 'Chuteira Nike Phantom GT2 Elite Campo',
        'modelo' => 'chuteira-gt2',
        'categoria' => 'Adulto/Campo',
        'preco' => 1999.99,
        'desconto' => 29,
        'cores' => ['preto','cinza'], 
        'tamanhos' => [35,38,39,40,42,43]
    ],

    [
        // CATEGORIA OFERTA PRODUTO 02 - COR 1 e 02
        'nome' => 'Tênis Nike Zoom Court Next Masculino',
        'modelo' => 'tenis-zoom',
        'categoria' => 'Para Jogar Tênis',
        'preco' => 1299.99,
        'desconto' => 34,
        'cores' => ['vermelho','branco'],
        'tamanhos' => [36,37,38,39,40,42]
    ],

    [
        // CATEGORIA MASCULINO PRODUTO 01 - COR 01 e 02
        'nome' => 'Tênis Nike Juniper Trail 2 Masculino',
        'modelo' => 'juniper-trail',
        'categoria' => 'Corrida',
        'preco' => 799.99,
        'desconto' => 50,
        'cores' => ['preto','verde'],
        'tamanhos' => [38,39,41,42,43,44]
    ],

    [
        // CATEGORIA MASCULINO PRODUTO 02 - COR 01 e 02
        'nome' => 'Tênis Nike Trail Ultrafly Masculino',
        'modelo' => 'trail-ultrafly',
        'categoria' => 'Corrida',
        'preco' => 2999.99,
        'desconto' => 38,
        'cores' => ['branco','vermelho'],
        'tamanhos' => [35,38,41,42,43,44]
    ],

    [
        // CATEGORIA FEMININO PRODUTO 01 - COR 01 e 02
        'nome' => 'Tênis Nike Zoom Court Lite 3 Feminino',
        'modelo' => 'zoom-court',
        'categoria' => 'Para Jogar Tênis',
        'preco' => 699.99,
        'desconto' => 19,
        'cores' => ['branco','preto'],
        'tamanhos' => [35,36,39,40,42,44]
    ],

    [
        // CATEGORIA FEMININO PRODUTO 02 - COR 01 e 02
        'nome' => 'Tênis Nike Air Force 1 Wild Feminino',
        'modelo' => 'air-force-1-wild',
        'categoria' => 'Casual',
        'preco' => 999.99,
        'desconto' => 5,
        'cores' => ['marrom','laranja'],
        'tamanhos' => [37,38,39,41,44]
    ],

    [
        // CATEGORIA INFANTIL PRODUTO 01 - COR 01 e 02
        'nome' => 'Tênis Nike Infinity Flow Infantil',
        'modelo' => 'infinity-flow',
        'categoria' => 'Crianças / Corrida',
        'preco' => 599.99,
        'desconto' => 15,
        'cores' => ['cinza','amarelo'],
        'tamanhos' => [35,38,39]
    ],

    [
        // CATEGORIA INFANTIL PRODUTO 02 - COR 01 e 02
        'nome' => 'Tênis Nike Star Runner 3 Infantil',
        'modelo' => 'star-runner',
        'categoria' => 'Bebês / Casual',
        'preco' => 349.90,
        'desconto' => 24,
        'cores' => ['rosa','azul'],
        'tamanhos' => [35,36,37,]
    ],

    [
        // CATEGORIA SNKRS PRODUTO 01 
        'nome' => 'Tênis Nike Zoom Fly 5 Masculino',
        'modelo' => 'zoom-fly-5',
        'categoria' => 'Corrida',
        'preco' => 949.90,
        'desconto' => 27,
        'cores' => ['branco','roxo'],
        'tamanhos' => [36,37,39,40,41,43]
    ],

    [
        // CATEGORIA SNKRS PRODUTO 02 
        'nome' => 'Tênis Nike Zoom Vapor Cage 4 Rafa Masculino',
        'modelo' => 'zoom-vapor-cage-4-rafa',
        'categoria' => 'Para Jogar Tênis',
        'preco' => 1224.99,
        'desconto' => 17,
        'cores' => ['branco','amarelo'],
        'tamanhos' => [37,38,39,40,42,44]
    ],

];


echo "INSERT INTO produtos (nome, modelo, categoria, preco, desconto) <br>";
echo "VALUES <br>";
foreach($produtos as $produto) {
    echo "('{$produto['nome']}', '{$produto['modelo']}', '{$produto['categoria']}', {$produto['preco']}, {$produto['desconto']}), <br>";
}

echo "<br>";
echo "INSERT INTO cores (prod_id, cor) <br>";
echo "VALUES <br>";
foreach($produtos as $id => $produto){
    $cores = $produto['cores'];
    foreach($cores as $cor){
        echo "(" . $id + 1 . ",'{$cor}'),<br>";
    }
}

echo "<br>";
echo "INSERT INTO tamanhos (prod_id, tamanho) <br>";
echo "VALUES <br>";
foreach($produtos as $id => $produto){
    $tamanhos = $produto['tamanhos'];
    foreach($tamanhos as $tamanho){
        echo "(" . $id + 1 . ",{$tamanho}),<br>";
    }
}

echo "</code>";


