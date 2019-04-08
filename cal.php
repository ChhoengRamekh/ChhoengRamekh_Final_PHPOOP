<?php
include 'src/functions.php';

extract($_POST);


if(isset($submit)) 
{
    if($operator == "none")
    {
        echo "0";
    }else if($operator == "add")
    {
        $add = new functions($firstNumber, $secondNumber);
        echo $firstNumber. " + ". $secondNumber. " = " . $add->add();
    }else if($operator == "minus")
    {
        $minus = new functions($firstNumber, $secondNumber);
        echo $firstNumber. " - ". $secondNumber. " = " . $minus->minus();
    }else if($operator == "multiply")
    {
        $multiply = new functions($firstNumber, $secondNumber);
        echo $firstNumber. " * ". $secondNumber. " = " . $multiply->multiply();
    }else if($operator == "devide")
    {
        $devide = new functions($firstNumber, $secondNumber);
        echo $firstNumber. " / ". $secondNumber. " = " . $devide->devide();
    }
}