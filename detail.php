<?php
$sql = 'SELECT * FROM `products` WHERE id=' . $_GET['product'];
$statement = $pdo->query($sql);
$product = $statement->fetch();
?>
<article>
    <img src="" alt="">
    <img src="" alt="">
    <h3><?php echo $product['name'];?></h3>
    <strong><?php echo $product['product_type'];?></strong>
    <strong><?php 
    if(!empty($product['price'])){
        echo $product['price'];
    }
    elseif(!empty($product['price_min']) && !empty($product['price_max'])){
        echo $product['price_min'] .'/'.$product['price_max'];
    }
    elseif(!empty($product['price_sale'])){
        echo $product['price_sale'];
    }
        
        ?></strong>

    <ol>
        <li>*</li>
        <li>*</li>
        <li>*</li>
        <li>*</li>
        <li>*</li>
    </ol>
    <p>DESCRIPTION</p>
    <button>BUY</button>
</article>
