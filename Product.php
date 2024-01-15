<?php

namespace MyApp;

class Product
{
    private $productName;
    private $productDescription;
    private $productPrice;
    private $productCategory;
    private $productImage;

    public function __construct($productName, $productDescription, $productPrice, $productCategory, $productImage)
    {
        $this->productName = $productName;
        $this->productDescription = $productDescription;
        $this->productPrice = $productPrice;
        $this->productCategory = $productCategory;
        $this->productImage = $productImage;
    }

    // Implemento il metodo magico __toString per convertire l'oggetto in una stringa
    public function __toString()
    {
        return "Nome: " . $this->productName . " | Descrizione: " . $this->productDescription . " | Prezzo: " . $this->productPrice . " | Categoria: " . $this->productCategory . " | Immagine: " . $this->productImage;
    }
}
?>