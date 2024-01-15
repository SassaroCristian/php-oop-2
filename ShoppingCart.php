<?php

class ShoppingCart
{

    private $items = [];
    private $product;
    private $quantity;

    public function addItem(Product $product, $quantity)
    {
        $this->product = $product;
        $this->quantity = $quantity;
    }

}

