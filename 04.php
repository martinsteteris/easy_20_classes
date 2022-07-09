<?php

class Product
{
    private float $price;
    private float $discount;

    public function __construct(float $price, float $discount)
    {
        $this->price = $price;
        $this->discount = $discount;
    }

    public  function finalPrice (): float
    {
        return $this->price - ($this->price * $this->discount);
    }
}

$product = new Product(2.99, 0.15);
echo number_format($product->finalPrice(), 2);