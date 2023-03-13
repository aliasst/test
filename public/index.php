<?php
use \Framework\Http\Request;
chdir(dirname(__DIR__));
require 'vendor/autoload.php';

header('X-Developer: aliasst');

$request = new Request();
$name = $request->getQueryParams()['name'] ?? 'Guest';


echo 'Hello, ' . $name;