<?php
require_once("RuleInterface.php");
class Makan implements RuleInterface
{
    public function matches(string $word): bool
    {
        return $word == "makan";
    }

    public function getReplacement(): string
    {
        return 'menu';
    }

    public function getImage(): string
    {
        return 'https://image.freepik.com/free-vector/vector-cartoon-illustration-design-fast-food-restaurant-menu_1441-334.jpg';
    }

    public function onClick(): string
    {
        return 'senarai.php';
    }
}
