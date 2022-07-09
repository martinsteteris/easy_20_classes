<?php

class Sentence
{
    private string $sentence;
    private array $lowercase = [];

    public function __construct(string $sentence)
    {
        $this->sentence = $sentence;
    }

    public function findLowerCase(): string
    {
        $arr = str_split($this->sentence, 1);
        foreach ($arr as $char) {
            if (ord($char) > 96 && (ord($char) < 123)) {
                $this->lowercase[] = $char;
                }
        }
        return implode('', $this->lowercase);
    }
}

$blahblah = new Sentence('KsSwFagJmVaHcBhKiUnWeEFHVEWUKQBVQV');
echo $blahblah->findLowerCase();