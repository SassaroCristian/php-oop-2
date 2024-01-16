<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Product List</title>
    <style>
        .card {
            border: 1px solid #ddd;
            padding: 20px;
            margin: 10px;
            text-align: center;
        }

        img {
            max-width: 100%;
            height: auto;
        }
    </style>
</head>

<body>

    <?php

    require_once("Product.php");
    require_once("ProductData.php");


    echo "<div>";
    echo "<br><h2>Prodotti</h2>";
    foreach ($products as $product) {
        echo "<div class='card'>";
        echo "<img src='{$product->getProductImage()}' alt='{$product->getProductName()}'>";
        echo "<h4>{$product->getProductName()}</h4>";
        echo "<p>{$product->getProductDescription()}</p>";
        echo "<p>Prezzo: $ {$product->getProductPrice()}</p>";
        echo "<p>Categoria: {$product->getProductCategory()}</p>";
        echo "</div>";
    }
    echo "</div>";
    ?>