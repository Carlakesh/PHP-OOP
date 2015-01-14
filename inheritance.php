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
return " but i love being a  " . $this->firstname;
	}
}
class Firstname extends Person {
	function eyes() {
		return $this->highschool;
	}
}
$eyes = new Person("girl", "boy", "men", "women");
print" sometimes i wish i was a boy " .$eyes->live();

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
		return "  she is " . $this->perfect;
	}
}
class perfect extends Lana {
	function Lanadelrey() {
		return $this->favorite;
	}
}
$favorite = new Lana("singer", "model", "random", "perfect");
print " <br> my favorite singer is Lana" .$favorite->getName();

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
		return "But i also love to look at my " . $this->Pictures;
	}
}
class Calls extends Phone {
	function playing() {
		return $this->Games;
	}
}
$playing = new Phone("Apps", "Games", "Pictures", "calls");
print" <br>  i  love to " .$playing->breaks();
?>