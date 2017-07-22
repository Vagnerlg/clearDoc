#!/usr/bin/php
<?php
require_once __DIR__.'/Script.php';
use ClearDoc\Script;
$script = new Script(str_replace('vendor/vagnerlg/cleardoc/bin','',__DIR__));
if(!isset($argv[1])){
	echo "Help\n";
	echo "Comand list\n";
	echo "\n";
	echo "init [nameDir]\n";
	echo "\n";
	echo "\n";
}else if($argv[1] == 'init'){
	$nameDir = isset($argv[2])?$argv[2]:'cleardoc';
	$script->init($nameDir);
}
