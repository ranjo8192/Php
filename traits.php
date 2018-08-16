<?php
// Traits in php
trait Addition
{
	function add($a,$b)
	{
		return $a+$b;
	}
}
trait Subtraction
{
	function subtract($a,$b)
	{
		return $a-$b;
	}
}

trait Multiplication
{
	function multiply($a,$b)
	{
		return $a*$b;
	}
}

class AdditionSubtractionMultiplication
{
	use Addition, Subtraction, Multiplication;
}

$add_subtarct_multiply = new AdditionSubtractionMultiplication();
echo "Addition of two number is=".$add_subtarct_multiply->add(3,5)."<br/>".
	"Subtraction of two numbers is =".$add_subtarct_multiply->subtract(100,50)."<br/>".
	"Multiplication of two number is =".$add_subtarct_multiply->multiply(10,10);
?>