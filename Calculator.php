<?php
class Calculator
{
  private $operands;
public function setOperands(array $operands)
   {
    $this->operands = $operands;
   }
public function add()
   {
    return array_sum($this->operands);
   }
public function multiply($a,$b){
    return $a *$b;
}
public function divide($a,$b){
    if($b == null) {

        throw new Exception("Division 
                 by zero");
        
        }
    return $a / $b;
}
}