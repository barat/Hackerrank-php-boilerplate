#!/bin/sh

args=("$@")
php ${args[0]} < ${args[1]} | php test.php ${args[2]}
