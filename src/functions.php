<?php
class functions 
{
    public $firstNumber;
    public $operator;
    public $secondNumber;

    public function __construct($firstNumber, $operator, $secondNumber) 
    {
        $this->firstNumber = $firstNumber;
        $this->operator = $operator;
        $this->secondNumber = $secondNumber;
    }

    public function none() 
    {
        return "0";
    }
    
    p