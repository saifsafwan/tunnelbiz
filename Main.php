<?php

require_once('Result.php');

class Main
{
    private $rules;

    public function __construct(array $rules)
    {
        $this->rules = $rules;
    }

    public function test(string $word): Result
    {
        foreach ($this->rules as $rule) {
            if ($rule->matches($word)) return new Result($rule->getReplacement(), $rule->getImage(), $rule->onClick());
        }
        return new Result();
    }
}
