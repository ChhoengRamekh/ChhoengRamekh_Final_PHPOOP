<?php
class functions 
{
    public $firstNumber;
    public $operator;
    public $secondNumber;

    public function __construct($firstNumber, $secondNumber) 
    {
        $this->firstNumber = $firstNumber;
        $this->secondNumber = $secondNumber;
    }

    public function add()
    {
        return $this->firstNumber+$this->secondNumber;
    }
    public function minus()
    {
        return $this->firstNumber-$this->secondNumber;
    }
    public function multiply()
    {
        return $this->firstNumber*$this->secondNumber;
    }
    public function devide()
    {
        return $this->firstNumber/$this->secondNumber;
    }


}