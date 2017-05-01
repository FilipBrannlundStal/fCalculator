<?php
namespace Mos\HTMLForm;
/**
 * A controller 
 *
 */
class CalculatorController
{
	/**
	 * Multiplicates $x & $y and returns sum
	 * @param $x $y
	 * @return int
	 */
	public function multiply($x, $y)
	{
		$res = $x*$y;
		return $res;
	}

	/**
	 * Addition $x & $y and returns sum
	 * @param $x $y
	 * @return int
	 */
	public function addition($x, $y)
	{
		$res = $x+$y;
		return $res;
	}


	/**
	 * Division $x & $y and returns value
	 * @param $x $y
	 * @return int
	 */
	public function division($x, $y)
	{
		$res = $x/$y;
		return $res;
	}

	/**
	 * Mobulo $x & $y and returns value
	 * @param $x $y
	 * @return int
	 */
	public function modolu($x, $y)
	{
		$res = $x%$y;
		return $res;
	}	
}
?>