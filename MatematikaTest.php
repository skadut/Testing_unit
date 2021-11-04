<?php
use PHPUnit\Framework\TestCase;
require_once "./Matematika.php";
class MatematikaTest extends TestCase
{
/*
* Menguji pangkat bilangan positif, positif
* 
*/
public function testPositifSemua()
{
$hasilPangkat = Matematika::pangkatBilangan(2, 3);
$this->assertEquals(8, $hasilPangkat);
}
/*
* Menguji pangkat bilangan negatif, positif
* 
*/
public function testNegatifPositif()
{
$hasilPangkat = Matematika::pangkatBilangan(-3, 2);
$this->assertEquals(9, $hasilPangkat);
}
/*
* Menguji pangkat bilangan positif, negatif
* 
*/
public function testPositifNegatif()
{
$hasilPangkat = Matematika::pangkatBilangan(4, -2);
$this->assertEquals(1 / 16, $hasilPangkat);
}
/*
* Menguji pangkat bilangan input tidak sesuai
* 
*/
public function testInputNgawur()
{
$hasilPangkat = Matematika::pangkatBilangan("a", 4);
$this->assertEquals(10, $hasilPangkat);
}
}