<?php
require 'produtos.php';
if(isset($_GET['id'])){
    $id = $_GET['id'];
    $produto = $produtos[$id];
    $ImgProd = "{$produto['modelo']}-{$produto['cores'][0]}";
}else{
    echo 'Produto não localizado';
}
?>

<div class="product">
    <div class="product-img">
        <div class="large">
            <img src="assets/shoes/<?= $ImgProd; ?>-1.avif" alt="" id="large">
        </div>
        <div class="thumbs">
            <?php
            for($i = 1; $i <= 8; $i++){
                ?>
                <div class="thumbnail" onmouseover="changeImage('1')">
                <img src="assets/shoes/<?= "{$ImgProd}-{$i}.avif"; ?>" alt="" id="thumb1">
            </div>
            <?php
            }
            ?>
        </div>

    </div>

    <div class="product-desc">

        <h1><?= $produto['nome']; ?></h1>
        <h3><?= $produto['categoria']; ?></h3>
    
        <div class="classification">
            <div class="stars">
                <i class="fa-solid fa-star"></i>
                <i class="fa-solid fa-star"></i>
                <i class="fa-solid fa-star"></i>
                <i class="fa-solid fa-star"></i>
                <i class="fa-solid fa-star-half-stroke"></i>
            </div>
            <h4><span>4.5</span>20 avaliações</h4>
        </div>

        <div class="prod-price">

            <div class="price-current">

                <h2>
                    <span>
                        <?php
                        $preco = $produto['preco'];
                        $desconto = $produto['desconto'];
                        $precoFormatado = emReal(novoPreco($preco,$desconto));
                        echo $precoFormatado;
                        ?>
                        
                    </span>
                </h2> 

                <h4>
                    Ou em 
                    <?php
                    $prestacoes = 12;
                    $valorParcela = emReal(parcelas(novoPreco($preco,$desconto),$prestacoes));
                    echo "{$prestacoes} X de {$valorParcela}";
                    ?>
                </h4>  

            </div>

        </div> 

        <div class="color-selector">
            <?php
            $colors = $produto['cores'];
            foreach ($colors as $color) {
            ?>
                <div onmousedown="colorSelector('<?= $color; ?>')" id="<?= "{$color}"; ?>"  class="choice">
                    <img src="assets/shoes/<?= "{$produto['modelo']}-{$color}-1.avif"; ?>" alt="">
                </div>
            <?php    
            }
            ?>
         </div>

         <div class="size">
            <h3>Tamanhos</h3>
            <?php
                for ($s = 35; $s <= 44; $s++){
                    if (in_array($s, $produto['tamanhos'])) {
                ?>
                        <input type="radio" class="trigger" name="tamanhos" id="<?=$s; ?>">
                        <label for="<?= $s; ?>"><?= $s; ?></label>
                    <?php
                    } else {
                    ?>
                        <input type="radio" class="trigger" name="tamanhos" id="<?=$s; ?>" disabled>
                        <label for="<?= $s; ?>"><?= $s; ?></label>
                <?php
                }
            }
            ?>
         </div>

         <div class="buttons">
            <a href="#" class="cart">Adicionar ao carrinho</a>
            <a href="#" class="fav">Salvar nos favoritos<i class="fa-regular fa-heart"></i></a>
        </div>

        <div class="share">
            <a href="#">
                <p>Compatilhar no <i class="fa-brands fa-whatsapp"></i> WhatsApp</p>
            </a>
        </div>


    </div>

</div>