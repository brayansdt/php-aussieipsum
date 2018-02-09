<?php
use \Brayansdt\AussieIpsum;

require_once __DIR__ . "/../../vendor/autoload.php";

$aussieIpsum = new AussieIpsum();

var_dump($aussieIpsum->sentence());