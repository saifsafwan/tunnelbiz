<?php

class Tidur implements RuleInterface
{
    public function matches(string $word): bool
    {
        return $word == "tidur";
    }

    public function getReplacement(): string
    {
        return 'katil';
    }

    public function getImage(): string
    {
        return 'https://png.pngtree.com/element_our/20190530/ourlarge/pngtree-cartoon-soft-light-bed-image_1245877.jpg';
    }

    public function onClick(): string
    {
        return 'black.php';
    }
}
