<?php

namespace App\Types\Structural\Composite;

class GiftBox implements ProductInterface, GiftInterface
{
    private $price;
    private $giftPrice;

    public function __construct(int $price, int $giftPrice)
    {
        $this->price = $price;
        $this->giftPrice = $giftPrice;
    }

    public function getPrice()
    {
        return $this->giftPackagePrice() + $this->price;
    }

    public function giftPackagePrice()
    {
        return $this->giftPrice;
    }
}
