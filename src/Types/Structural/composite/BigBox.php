<?php

namespace App\Types\Structural\Composite;

class BigBox implements ProductInterface, ActionsInterface

// Main Tool
{
    private $products = [];

    public function __construct($products)
    {
        $this->products = $products;
    }

    public function getPrice()
    {
        return $this->totalPrice($this->products);
    }

    private function totalPrice(array $products)
    {
        $totalPrice = 0;
        foreach ($products as $product) {
            $totalPrice += $product->getPrice();
        }
        return $totalPrice;
    }

    public function add(ProductInterface $product)
    {
        $this->products[] = $product;
    }

    public function remove(ProductInterface $Deletedproduct)
    {
        $filtered_products = array_filter($this->products, function ($product) use ($Deletedproduct) {
            return $product !== $Deletedproduct;
        });

        $this->products = $filtered_products;
    }
}
