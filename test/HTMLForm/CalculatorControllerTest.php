<?php
//namespace Mos\Calculator;
//include('../../src/Calculator/CalculatorController.php');
//include('CalculatorController.php');
namespace Mos\HTMLForm;
class CalculatorControllerTest extends \PHPUnit_Framework_TestCase 
{
	public function testMultiply() 
	{
		$elem = new \Mos\HTMLForm\CalculatorController();
		$res = $elem->multiply(4, 4);
		$this->assertEquals($res, 16, "Multiplication was wrong");
	}
	public function testAddidion()
	{
		$elem = new \Mos\HTMLForm\CalculatorController();
		$res = $elem->addition(2, 2);
		$this->assertEquals($res, 4, "Addition was wrong");
	}

	public function testDivision()
	{
		$elem = new \Mos\HTMLForm\CalculatorController();
		$res = $elem->division(10, 2);
		$this->assertEquals($res, 5, "Division was wrong");
	}

	public function testModolu()
	{
		$elem = new \Mos\HTMLForm\CalculatorController();
		$res = $elem->modolu(100, 6);
		$this->assertEquals($res, 4, "Modolu was wrong");
	}
	
}