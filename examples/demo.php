<?php 

require_once __DIR__ . '/../vendor/autoload.php';

use Canadadry\PhpCui\Cui;

system('stty cbreak - echo'); 
$stdin = fopen('php://stdin', 'r');

$cui = new Cui();
echo $cui->clear();
echo $cui->move(100,10);
while (1) {
	$c = ord(fgetc($stdin));
    echo $cui->clear();
	echo $cui->move(10,10);
    echo "Char read: $c\n";
	echo $cui->move(100,10);
}
