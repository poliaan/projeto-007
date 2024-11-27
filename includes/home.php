<?php
foreach($produtos as $id => $produto){
?>
 <a href="detail.php?id=<?= $id; ?>">
    <div class="prod">
        <div class="prod-img">
            <img src="assets/shoes/<?= $produto['modelo']; ?>-<?= $produto['cores'][0]; ?>-1.avif" alt="">
        </div>
        <div class="prod-card">
            <div class="prod-name">
                <?= $produto['nome']; ?> 
            </div>
            <div class="prod-cat">
                <?= $produto['categoria']; ?> 
            </div>
            <div class="prod-price">
                <div>
                    <span class="price-current">
                    <h4>
                        <strong>
                        <?php
                            $preco = $produto['preco'];
                            $desconto = $produto['desconto'];
                            $precoFormatado = emReal(novoPreco($preco,$desconto));
                            echo $precoFormatado;
                            ?>
                        </strong>    
                    </h4> 
                    </span>
                    <span class="payment">no Pix</span>
                </div>
                <div aria-label="preço antigo" class="old-price">
                    <?= $produto['preco']; ?>
                </div>
                <div class="discount">
                    <?= $produto['desconto']; ?>% off
                </div>
            </div>
        </div>
    </div>
</a>
<?php
}