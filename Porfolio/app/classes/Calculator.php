<?php


namespace App\classes;


class Calculator
{
    public $firstNumber,$secondNumber,$sum,$sub,$mul,$div;
    public function __construct($post)
    {
        $this->firstNumber=$post['first_number'];
        $this->secondNumber=$post['second_number'];
    }
    public function getSum()
    {
        $this->sum=$this->firstNumber + $this->secondNumber;
        header("Location: web.php?page=calculator&&result=$this->sum");
    }
    public function getSub()
    {
        $this->sub=$this->firstNumber - $this->secondNumber;
        header("Location: web.php?page=calculator&&result=$this->sub");
    }
    public function getMulti()
    {
        $this->mul=$this->firstNumber * $this->secondNumber;
        header("Location: web.php?page=calculator&&result=$this->mul");
    }
    public function getDivided()
    {
        $this->div=$this->firstNumber / $this->secondNumber;
        header("Location: web.php?page=calculator&&result=$this->div");
    }
}