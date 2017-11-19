#!/usr/bin/env php
<?php
/**
 * User: leonardvujanic
 * DateTime: 19/11/2017 01:54
 *
 *
 */


if (empty($argv[1]) || empty($argv[2])) {
    throw new InvalidArgumentException('Missing required param');
}


$fileName = $argv[1];

if (file_exists($fileName) === false || is_readable($fileName) === false) {
    throw new Exception('File not found');
}


$chunks = explode('lessons', $fileName);

$function = '\leovujanic\codility\lessons' . str_replace('/', '\\', str_replace('index.php', 'solution', $chunks[1]));


$testArray = explode(',', $argv[2]);
$filterArray = [];

foreach ($testArray as $testItem) {
    $filterArray[] = (int)trim($testItem);
}


require_once $fileName;

if (function_exists($function) === false) {
    throw new Exception('Function does not exists');
}

$result = null;

try {
    $result = $function($filterArray);
} catch (Exception $e) {
    $result = $e->getMessage();
}


echo $result . PHP_EOL;
