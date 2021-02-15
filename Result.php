<?php

class Result
{
    public $word;
    public $img;
    public $location;

    public function __construct(
        $word = 'Takdematch',
        $img = 'https://image.freepik.com/free-vector/confused-woman-working-laptop-cartoon-icon-illustration-people-technology-icon-concept_138676-2125.jpg',
        $location = 'http://localhost/tunnelbiz/index.php'
    ) {
        $this->word = $word;
        $this->img = $img;
        $this->location = $location;
    }
}
