<?php

require_once __DIR__ . "/vendor/autoload.php";


$library = new \Amien\ComposerLibrary\Customer('bot');
echo $library->sayHello('amien');
