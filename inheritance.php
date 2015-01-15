<?php
class Person 
{
	public $firstname;
	public $lastname;
	public $gender;
	public $personality;

	function __construct($firstname , $lastname, $gender , $personality)
	{
		$this->firstname = $firstname;
		$this->lastname = $lastname;
		$this->gender = $gender;
		$this->personality = $personality;
	}

	function live()
	{
return " but i love being a  " . $this->firstname . "<br />" . 
	 " but i love being 1  " . $this->lastname . "<br />" .
	 " but i love being 2 " . $this->gender . "<br />".
	 " but i love being 3 " . $this->personality;
	}
}
class Firstname extends Person 
{
		function __construct($firstname, $lastname, $gender, $personality)
	{

parent::__construct($firstname, $lastname, $gender, $personality);
	}

	function eyes()
	 {
		return " mother yucker"	;
	}
}
$motheryar = new firstname("girl", "boy", "men", "women");
print $motheryar->live() . "<br />" ; 
print $motheryar->eyes();

// NEW   
class Lana {
	public $singer;
	public $model;
	public $random;
	public $perfect;
	function __construct($singer, $model, $random, $perfect) {
		$this->singer = $singer;
		$this->model = $model;
		$this->random = $random;
		$this->perfect = $perfect;
	}
	function getName() {
		return "  she is " . $this->perfect . "<br />" . 
		"singer"    . $this->singer . "<br />" . 
		"model "    . $this->model . "<br />" . 
		"random"    . $this->random;
	}
}
class perfect extends Lana {
function __construct($singer, $model, $random, $perfect)
	{
		parent::__construct($singer, $model, $random, $perfect);
	}

	function Lanadelrey()
	 {
		return "perfection";
	}
}
$favorite = new perfect("singer", "model", "random", "perfect");
print $favorite->getName() . "<br />";
print $favorite->Lanadelrey();

//New
class Phone
{
	public $Apps;
	public $Games;
	public $Pictures;
	public $calls;
	function __construct($Apps, $Games, $Pictures, $Calls)
	{
		$this->Apps = $Apps;
		$this->Games = $Games;
		$this->Pictures = $Pictures;
		$this->Calls = $Calls;
	}
	function breaks()
	{
		return "But i also love to look at my " . $this->Pictures . "<br />".
				"Apps "  . $this->Apps . "<br />" . 
				"Games "    . $this->Games . "<br />" . 
				"Calls " . $this->Calls;
	}
}
class Calls extends Phone 
{
function __construct($Apps, $Games, $Pictures, $calls)
	{
		parent::__construct($Apps, $Games, $Pictures, $calls);
	}

	function playing() 
	{
		return "Games";
	}
}
$playing = new Calls("Apps", "Games", "Pictures", "calls");
print $playing->getName() . "<br />";
print $playing->playing();
?>
