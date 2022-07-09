<?php

class SecretSociety
{
    private array $names;

    public function __construct(array $names)
    {
        $this->names = $names;
    }
    public function getFirstLetters (): string
    {
        $firsts = [];
        foreach ($this->names as $name) {
            $firsts[] = substr($name, 0, 1);
        }
        sort($firsts);
        return implode('', $firsts);
    }
}

$org = new SecretSociety(['Gary', 'Travor', 'Fantomas', 'Oliver']);
echo $org->getFirstLetters();