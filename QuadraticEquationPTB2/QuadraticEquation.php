<?php


class QuadraticEquation
{
    private $a;
    private $b;
    private $c;

    public function __construct($a, $b, $c){
        $this->a = $a;
        $this->b = $b;
        $this->c = $c;
    }


    public function getDiscriminant(){
        return ($this->b * $this->b) - (4 * $this->a * $this->c);
    }

    public function getRoot1(){
        return (-$this->b + sqrt($this->getDiscriminant()))/($this->a * 2);
    }

    public function getRoot2(){
        return (-$this->b - sqrt($this->getDiscriminant()))/($this->a * 2);
    }

    public function display(){
        return "QuadraticEquation(Phương trình bậc hai) ( " . $this->a . "x2 + " . $this->b . "x + " . $this->c ." = 0)";
    }
}