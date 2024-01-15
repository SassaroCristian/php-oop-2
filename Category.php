<?php

class Category
{
    private $name;
    private $products = [];

    public function __construct($name)
    {
        $this->name = $name;
        $this->products = [];
    }

    public function addProduct(Product $product)
    {

    }


}
