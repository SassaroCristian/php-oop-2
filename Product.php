<?php

class product
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
}