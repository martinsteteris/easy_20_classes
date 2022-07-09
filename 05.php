<?php

class FindingNemo
{
    private string $sentence;

    public function __construct(string $sentence)
    {
        $this->sentence = $sentence;
    }
    public function findNemo (): string
    {
        $pos = strpos($this->sentence, 'Nemo');
        if (is_numeric($pos)) {
            return "I found Nemo at $pos!";
        } else {
            return "Sry, cant find Nemo :(";
        }
    }
}

$s = new FindingNemo(' Where is emo?');
echo $s->findNemo();