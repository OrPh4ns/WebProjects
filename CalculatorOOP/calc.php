<?php


class calc
{
private $num1;
private $num2;
private $operation;
private $answer;
private $res;

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
                $this->res = $this->num1 + $this->num2;
                $this->answer= '<div class="alert alert-success" role="alert">Ergebnis >> '.$this->res.'</div>';
                break;
            case "2":
                $this->res = $this->num1 - $this->num2;
                $this->answer= '<div class="alert alert-success" role="alert">Ergebnis >> '.$this->res.'</div>';
            case "3":
                $this->res = $this->num1 * $this->num2;
                $this->answer= '<div class="alert alert-success" role="alert">Ergebnis >> '.$this->res.'</div>';
                break;
            case "4":
                $this->res = $this->num1 / $this->num2;
                $this->answer= '<div class="alert alert-success" role="alert">Ergebnis >> '.$this->res.'</div>';
                break;
            default:
            $this->answer= '<div class="alert alert-danger">
  <strong>Danger!</strong> Bitte Wähle die OP aus | يرجى اختيار العلامه الرياضيه
</div>';
                {
                }
        }
    }catch (Exception $ex){
        $this->answer= '<div class="alert alert-danger">
  <strong>Danger!</strong>'.$ex->getMessage().'</div>';

    }

    return $this->answer;
}
}

