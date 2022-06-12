<?php

require_once __DIR__ . "/vendor/autoload.php";

use \Amien\ComposerLibrary\Customer;

$library = new Customer('bot');
$library->sayHello('amien');
