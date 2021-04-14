<?php


class Calculate
{
    private $number1;
    private $number2;


    public function __construct($number1, $number2)
    {
        $this->number1 = $number1;
        $this->number2 = $number2;

    }

    public function getAddition()
    {
        return $this->number1 + $this->number2;
    }

    public function getSubtraction()
    {
        return $this->number1 - $this->number2;
    }

    public function getMultiplication()
    {
        return $this->number1 * $this->number2;
    }

    public function getDivision()
    {
//        if ($this->number2 == 0){
//            echo "Lỗi number2 = 0";
//        }else{
//
//            return $this->number1 / $this->number2;
//        }
    if ($this->number2 == 0 ) {
        $exception = new Exception('Lỗi number2 = 0, phep chia khong thuc hien.');
        return $exception;
    }else{
      return $this->number1 / $this->number2;
        }

    try {
    getDivision($this->number2);
    }
    catch (Exception $e) {
        echo $e->getMessage();
    }
    }
    public function display(){
        return "";
    }
}