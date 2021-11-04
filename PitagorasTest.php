<?php

use PHPUnit\Framework\TestCase;

require 'Pitagoras.php';

class PitagorasTest extends TestCase{
    private $pitagoras;
    protected function setUp(): void
    {
        parent::setUp();
        $this->pitagoras = new pitagoras();
    }
    protected function tearDown(): void
    {
        $this->pitagoras = NULL;
        parent::tearDown();
    }
    public function testGetAkar()
    {
        $result = $this->pitagoras->akar(5,12);
        $this->assertEquals(13,$result);
    }
    public function testAkarWithFloat()
    {
        $result = $this->pitagoras->akar(0.5,0);
        $this->assertEquals(8.0156097709407,$result);
    }
    public function testAkarWithNegative()
    {
        $result = $this->pitagoras->akar(-6,8);
        $this->assertEquals('sisi tidak boleh negatif atau nol',$result);
    }
    public function testAkarWithZero()
    {
        $result = $this->pitagoras->akar(0,0);
        $this->assertEquals('sisi tidak boleh negatif atau nol',$result);
    }
    public function testAkarWithBigNumb()
    {
        $result = $this->pitagoras->akar(1000,1000);
        $this->assertEquals(1414.213562373095,$result);
    }
}
