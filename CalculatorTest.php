<?php
use PHPUnit\Framework\TestCase;

require './Calculator.php';

class CalculatorTest extends TestCase
{
    private $calculator;

    public function setUp() : void
    {
        $this->calculator = new Calculator;
    }

    public function testAdd()
   {
    $this->calculator->setOperands([5,20]);
    $this->assertEquals(25, $this->calculator->add());
   }
   public function testAddNegative()
   {
    $this->calculator->setOperands([-5,10]);
    $this->assertEquals(5, $this->calculator->add());
   }

   public function testMultiply()
   {
    $this->assertEquals($this->calculator->multiply(1,2),2);
   }
   public function testDivide()
   {
    $this->assertEquals($this->calculator->divide(1,2),4);
   }
}