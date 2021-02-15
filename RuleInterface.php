<?php
interface RuleInterface
{
    public function matches(string $word): bool;
    public function getReplacement(): string;
    public function getImage(): string;
    public function onClick(): string;
}
