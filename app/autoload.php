<?php

use Doctrine\Common\Annotations\AnnotationRegistry;
use Composer\Autoload\ClassLoader;

/**
 * @var ClassLoader $loader
 */
$loader = require __DIR__.'/../vendor/autoload.php';

AnnotationRegistry::registerLoader(array($loader, 'loadClass'));

return $loader;

function prx($value = ""){
	echo "<pre>";
	print_r($value);
	echo "</pre>";
	die;
}

function pr($value = ""){
	echo "<pre>";
	print_r($value);
	echo "</pre>";
	
}
