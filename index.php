<?php

// DAY ONE
// THIS IS EXAMPLE 1 

class Flower {
	 //class body
	 // class body
	//class body
}
 class Phone{
 	//class body
 	//class body
 	//class body
 }
class Tv {
	//class body
	//class body
	//class body
}

//THIS IS EXAMPLE 2

$flower1 = newFlower();
$flower2 = newFlower();

$phone1 = newPhone();
$phone2 = newPhone();

$tv1 = newTv();
$tv2 = newTv();

//THIS IS EXAMPLE 3  
class Flower {
	public $brand = "daisy";
	public $color = "yellow";
	public $amount = "3";
	public $price = 0;
}
class Phone {
	public $brand = "iphone";
	public $color = "white";
	public $type = "iphone6";
	public $price = 0;
}
class Tv {
	public $brand = "samsung";
	public $color = "black";
	public $amount = "1";
	public $price = 0;
}

// THIS IS EXAMPLE 4
$Flower1 = new Flower();
print $Flower1­>name;
// random name 

$Phone1 = new Phone();
print $Phone1­>name;
// random name 

$Tv1 = new Tv();
print $Tv1­>name;
// random name 

//THIS IS EXAMPLE 5
public function myMethod($random, $class) {
// comments
}
public function myMethod($daisy, $iphone) {
// comments
}

public function myMethod($Tv, $samsung) {
// comments
}

//THIS IS EXAMPLE 6

class flower {
	public $brand = "daisy";
	public $color = "yellow";
	public $amount = "3";
	public $price = 0;

	function getName() {
	return “{$this­>brand}” .
	“{$this­>color}”;
	}
}

$Flower1 = new flower();
$Flower1­>brand = “Daisy”;
$Flower­>color = “yellow”;
print “The flowers name is {Flower1­>getName()}.”;

}

class phone {
	public $brand = "iphone";
	public $color = "white";
	public $type = "iphone6";
	public $price = 0;

	function getName() {
	return “{$this­>brand}” .
	“{$this­>color}”;
	}
}

$iphone1-> = new phone();
$iphone1­>brand = “iphone”;
$iphone1­>color = “white”;
print “The iphone is {iphone1­>getName()}.”;
}

class tv {
	public $brand = "samsung";
	public $color = "black";
	public $amount = "1";
	public $price = 0;

	function getName() {
	return “{$this­>brand}” .
	“{$this­>color}”;
	}
}

$tv1-> = new tv();
$tv1­>brand = “samsung”;
$tv1­>color = “black”;
print “The Tv is {tv1­>getName()}.”;
}

// DAY TWO 
// THIS IS EXAMPLE 1
class flower {
public $brand;
public $color;
public $amount;

function __construct($title, $brand, $color, $amount) {
$this­>brand = $brand;
$this­>color = $color;
$this­>amount = $amount;
}
	function getName() {
	return “{$this­>brand}” .
	“{$this­>color}”;
	}
}
 
class phone {
public $brand;
public $color;
public $type;
function __construct($title, $brand, $color, $type) {
$this­>brand = $brand;
$this­>color = $color;
$this­>type = $type;
}
	function getName() {
	return “{$this­>brand}” .
	“{$this­>color}”;
	}
}

 
class tv {
public $brand;
public $color;
public $amount;
function __construct($title, $brand, $color, $amount) {
$this­>brand = $brand;
$this­>color = $color;
$this­>amount = $amount;
}
	function getName() {
	return “{$this­>brand}” .
	“{$this­>color}”;
	}
}

// EXAMPLE 2
$flower1 = new flower(“yellow”, “daisy”, “Goldflower”);
print “flower 1: {$flower1­>getName()}\n; 

$phone1 = new phone(“white”, “iphone”, “ appleiphone6”);
print “iphone 1: {$phone1­>getName()}\n; 

$tv1 = new tv(“black”, “samsung”, “samsungtv”);
print “tv 1: {$tv1­>getName()}\n; 


?> 
