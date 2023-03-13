<?php
use \Framework\Http\Request;
chdir(dirname(__DIR__));
require 'vendor/autoload.php';

header('X-Developer: aliasst');

$request = (new Request())->withQueryParams($_GET)->withParsedBody($_POST);
$name = $request->getQueryParams()['name'] ?? 'Guest';


echo 'Hello, ' . $name;