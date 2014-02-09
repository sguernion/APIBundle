<?php
if (!is_file($autoloadFile = __DIR__.'/autoload.php')) {
    throw new \LogicException('Run "composer install --dev" to create autoloader.');
}

require $autoloadFile;

// Your custom configuration



?>