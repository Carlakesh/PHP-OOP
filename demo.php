<?php
class Cat {
	public $sound;
	public $color;
	public $gender;

	function __construct( $sound , $color , $gender) 
	{
		$this->sound = $sound;
		$this->color = $color;
		$this->gender = $gender;
	}

	function walk()
	{
		return " my Cat likes to walk, it is a " . $this->gender;
	}
function sound()
	{
		return " my Cat makes a sound, it sounds like a" . $this->sound;
	}

}

$Kitty = new Cat ("meow", "black" , "female");
echo $Kitty->walk();

?> 