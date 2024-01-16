<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Product List</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 0;
            background-color: #f5f5f5;
        }

        .container {
            display: flex;
            flex-wrap: wrap;
            justify-content: space-around;
            padding: 20px;
            width: 100vw;
        }

        .card {
            border: 1px solid #ddd;
            padding: 20px;
            margin: 10px;
            width: 200px;
            text-align: center;
            background-color: white;
            border-radius: 8px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
        }

        img {
            max-width: 100%;
            height: auto;
            border-radius: 8px;
        }

        h4 {
            margin-top: 10px;
            color: #333;
        }

        p {
            color: #666;
        }
    </style>
</head>

<body>

    <?php

    require_once("Product.php");
    require_once("ProductData.php");

    // Stampare i prodotti
    echo "<div class='container'>";
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
</body>

</html>