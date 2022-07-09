<?php


class Groceries
{
    private string $product;
    private int $quantity;
    private float $price;


    public function __construct(string $product, int $quantity, float $price)
    {
        $this->product = $product;
        $this->quantity = $quantity;
        $this->price = $price;
    }
    public function getSum (): float
    {
        return $this->price * $this->quantity;
    }
}

$groceries = [
    $apple = new Groceries('Apple', 20, 0.15),
    $bread = new Groceries('Bread', 2, 1.20),
    $juice = new Groceries('Juice', 3, 0.99),
    $soup = new Groceries('Soup', 1, 2.15)
];
$total = 0;

foreach ($groceries as $item) {
    $total += $item->getSum();
}
echo $total;
