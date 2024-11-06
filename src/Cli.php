<?php

namespace Artur\PhpProject45\Cli;

use function cli\prompt;
use function cli\line;

function greeting()
{
    line('Welcome to the Brain Games!');
    $name = prompt('May I have your name?');
    return "Hello, {$name}!";
}