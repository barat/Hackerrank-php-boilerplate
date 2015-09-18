<?php

$input = stream_get_contents(STDIN);
var_dump(PHP_EOL.$input.PHP_EOL);
echo PHP_EOL;
$expected = file_get_contents(getcwd().DIRECTORY_SEPARATOR.$argv[1]);
var_dump(PHP_EOL.$expected.PHP_EOL);
echo PHP_EOL;
echo "Test result: ";
var_dump($input == $expected);
echo PHP_EOL;
