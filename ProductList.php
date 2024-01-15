<?php

require_once("Product.php");

use MyApp\Product;

// array di oggetti Product
$products = [
    new Product("product1", "productDescription1", "productPrice1", "productCategory1", "productImage1"),
    new Product("product2", "productDescription2", "productPrice2", "productCategory2", "productImage2"),
    new Product("product3", "productDescription3", "productPrice3", "productCategory3", "productImage3"),
    new Product("product4", "productDescription4", "productPrice4", "productCategory4", "productImage4"),
    new Product("product5", "productDescription5", "productPrice5", "productCategory5", "productImage5"),
    new Product("product6", "productDescription6", "productPrice6", "productCategory6", "productImage6"),
    new Product("product7", "productDescription7", "productPrice7", "productCategory7", "productImage7")
];

// Stampare i prodotti
echo "<div>";
echo "<br><h2>Prodotti</h2>";
foreach ($products as $product) {
    echo "<br>" . $product;
}
echo "</div>";
?>