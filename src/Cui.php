<?php 
namespace Canadadry\PhpCui;

class Cui
{
	public function helloWordl() : string
	{
		return "hello world!";
	}	

	public function clear()
	{
		return "\033[2J";
	}

	public function move($x,$y)
	{
		return "\033[".$x.";".$y."H";
	}
};