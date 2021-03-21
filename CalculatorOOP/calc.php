<?php


class calc
{
private $num1;
private $num2;
private $operation;

public function setInfo($num1, $num2, $operation)
{
    $this->num1 = $num1;
    $this->num2 = $num2;
    $this->operation = $operation;

}
public function doCalc(){
    try {
        switch ($this->operation) {
            case "1":
                return $this->num1 + $this->num2;
                break;
            case "2":
                return $this->num1 - $this->num2;
            case "3":
                return $this->num1 * $this->num2;
                break;
            case "4":
                return $this->num1 / $this->num2;
                break;
            default:
                return "Bitte Wähle die OP aus | يرجى اختيار العلامه الرياضيه";
                {
                }
        }
    }catch (Exception $ex){
        return $ex->getMessage();
    }
}
}

