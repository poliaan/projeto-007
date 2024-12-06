<?php
if(isset($_GET['id'])){
    $id = $_GET['id'];

    $stmt = $pdo ->query("SELECT * FROM produtos WHERE id = $id");
    $produto = $stmt->fetchAll();

    $prodNome = $produto[0]['nome'];
    $prodModelo = $produto[0]['modelo'];
    $prodCategoria = $produto[0]['categoria'];
    $prodPreco = $produto[0]['preco'];
    $prodDesconto = $produto[0]['desconto'];

    $qColor = $pdo -> query("SELECT * FROM cores WHERE prod_id = $id");
    $cores = $qColor -> fetchAll();
    $cor = $cores[0]['cor'];

    $product_file = "{$prodModelo}-{$cor}";

    $qSizes = $pdo->query("SELECT tamanho FROM tamanhos WHERE prod_id = $id");
    $tamanhos = $qSizes-> fetchAll();

}else{
    echo 'Produto não localizado';
}
?>

<div class="product">
    <div class="product-img">
        <div class="large">
            <img src="assets/shoes/<?= $product_file; ?>-1.avif" alt="" id="large">
        </div>
        <div class="thumbs">
            <?php
            for($i = 1; $i <= 8; $i++){
                ?>
                <div class="thumbnail" onmouseover="changeImage('1')">
                <img src="assets/shoes/<?= "{$product_file}-{$i}.avif"; ?>" alt="" id="thumb1">
            </div>
            <?php
            }
            ?>
        </div>

    </div>

    <div class="product-desc">

        <h1><?= "{$prodNome}"; ?></h1>
        <h3><?= "{$prodCategoria}"; ?></h3>
    
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
                        $preco = $prodPreco;
                        $desconto = $prodDesconto;
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
            foreach ($cores as $cor) {
                $Selecionacor = $cor['cor'];
            ?>
                <div onmousedown="colorSelector('<?= $Selecionacor; ?>')" id="<?= "{$Selecionacor}"; ?>"  class="choice">
                    <img src="assets/shoes/<?= "{$prodModelo}-{$Selecionacor}-1.avif"; ?>" alt="">
                </div>
            <?php    
            }
            ?>
         </div>

         <div class="size">
            <h3>Tamanhos</h3>
            <?php
                $Tamanhos = array_column($tamanhos, 'tamanho');
                for ($s = 35; $s <= 44; $s++){
                    if (in_array($s, $Tamanhos)) {
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