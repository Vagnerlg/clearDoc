<?php
namespace ClearDoc;

class Script
{
	private $root;

	public function __contructor($root)
{
	$this->root = $root;
}
    public function init($name)
    {
        echo $name;
    }
}
