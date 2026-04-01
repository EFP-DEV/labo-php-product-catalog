<?php
// var_dump($pdo);
$sql = 'SELECT * FROM `products`';
$statement = $pdo->query($sql);
while($product = $statement->fetch()){
    // var_dump($product);
    echo '
    <article>
        <img src="' . $product['image'] . '" alt="">
        <img src="" alt="">
        <h3>' . $product['name'] . '</h3>
        <strong>' . $product['product_type'] . '</strong>
        <strong>' . $product['price'] . '</strong>
        <ol>
            <li>*</li>
            <li>*</li>
            <li>*</li>
            <li>*</li>
            <li>*</li>
        </ol>
        <a href="index.php?product=' . $product['id'] . '">Go</a>
    </article>
    ';


}
?>


