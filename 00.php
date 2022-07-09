<?php

class Prediction
{
    private string $color;
    private string $location;
    private string $name;
    private string $item;

    public function __construct(string $color, string $location, string $name, string $item)
    {
        $this->color = $color;
        $this->location = $location;
        $this->name = $name;
        $this->item = $item;
    }

    public function readPrediction (): string
    {
        return "You will meet $this->name in $this->location, and find $this->item in a $this->color room together.";
    }
}

$p1 = new Prediction('gray', 'bootcamp', 'Mr Nimbus', 'trident');
echo $p1->readPrediction();


