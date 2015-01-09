<?php
//EXAMPLE 1 , DAY 3 
if (is_integer(10) > 20 ) 
{
	echo "YAY 1";
}
else {
	echo " <br> not true ";
var_dump(is_integer('890'));
var_dump(is_integer('2000'));
var_dump(is_integer('ABCDE'));
var_dump(is_integer('true'));
}
//EXAMPLE 2
if (is_bool(11) > 4) 
{
	echo "YAY 2";
}
else 
{
	 echo " <br> <p3>  not true  "; 
var_dump(is_bool('967'));
var_dump(is_bool('4050'));
var_dump(is_bool('JKL'));
var_dump(is_bool('false'));
}
//EXAMPLE 3
if (is_double(90) < 552) 
{
	echo " YAY 3";
}
else
{
	echo " <br> not true ";
var_dump(is_double('248'));
var_dump(is_double('8000'));
var_dump(is_double('TYU'));
var_dump(is_double('true'));
}
?>