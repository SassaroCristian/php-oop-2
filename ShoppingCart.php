<?php

require_once('Product.php');
use MyApp\Product;

class ShoppingCart
{
    private $items = [];

    public function addItem(Product $product, $quantity)
    {
        $this->items[] = ['product' => $product, 'quantity' => $quantity];
    }

    public function getItems()
    {
        return $this->items;
    }

    public function getTotalItems()
    {
        return count($this->items);
    }
}